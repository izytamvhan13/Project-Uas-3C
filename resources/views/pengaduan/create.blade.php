<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengaduan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Sesuaikan dengan file CSS Anda -->
</head>
<body>
    <div class="container">
        <h1>Form Pengaduan</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('pengaduan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="layanan_id">Layanan:</label>
                <select name="layanan_id" id="layanan_id" class="form-control" required>
                    <option value="">Pilih Layanan</option>
                    @foreach($layanans as $layanan)
                        <option value="{{ $layanan->id }}">{{ $layanan->kategori_layanan }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Kirim Pengaduan</button>
        </form>
    </div>
</body>
</html>
