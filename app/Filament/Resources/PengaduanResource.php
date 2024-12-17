<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengaduanResource\Pages;
use App\Filament\Resources\PengaduanResource\RelationManagers;
use App\Models\Pengaduan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PengaduanResource extends Resource
{
    protected static ?string $model = Pengaduan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Pengaduan';
    protected static ?string $navigationGroup = 'Pengaduan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                ->required()
                ->label('Nama Pengadu'),
            Forms\Components\TextInput::make('alamat')
                ->required()
                ->label('Alamat'),
            Forms\Components\Select::make('layanan_id')
                ->relationship('layanan', 'kategori_layanan')
                ->required()
                ->label('Layanan'),

            // Menambahkan kolom deskripsi di form
            Forms\Components\TextArea::make('deskripsi')
            ->label('Deskripsi')
            ->nullable()
            ->rows(3), // Mengatur tinggi TextArea

            Forms\Components\Select::make('status')
                ->options([
                    'pending' => 'Pending',
                    'diterima' => 'Diterima',
                    'ditolak' => 'Ditolak',
                ])
                ->default('pending')
                ->label('Status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama Pengadu'),
                Tables\Columns\TextColumn::make('alamat')->label('Alamat'),
                Tables\Columns\TextColumn::make('layanan.kategori_layanan')->label('Layanan'),
                // Menambahkan kolom deskripsi di tabel
            Tables\Columns\TextColumn::make('deskripsi')->label('Deskripsi')->limit(50), // Limit untuk menampilkan sebagian
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->label('Dibuat Pada'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengaduans::route('/'),
            'create' => Pages\CreatePengaduan::route('/create'),
            'edit' => Pages\EditPengaduan::route('/{record}/edit'),
        ];
    }
}