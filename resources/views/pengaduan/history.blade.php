<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Pengaduan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/johndoe.css') }}"> <!-- Sesuaikan dengan file CSS Anda -->
</head>
<body>
    <div class="container">
        <h1>History Pengaduan</h1>
        <a href="{{ route('pengaduan.create') }}" class="btn btn-primary btn-rounded">
            <i class="ti-out pr-2"></i>Back
        </a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Layanan</th>
                    <th>Deskripsi</th> <!-- Tambahkan kolom Deskripsi -->
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengaduans as $pengaduan)
                    <tr>
                        <td>{{ $pengaduan->id }}</td>
                        <td>{{ $pengaduan->nama }}</td>
                        <td>{{ $pengaduan->alamat }}</td>
                        <td>{{ $pengaduan->layanan->kategori_layanan }}</td> <!-- Asumsi ada relasi dengan model Layanan -->
                        <td>{{ $pengaduan->deskripsi ?? '-' }}</td> <!-- Tambahkan Deskripsi -->
                        <td>{{ $pengaduan->status }}</td>
                        <td>{{ $pengaduan->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>