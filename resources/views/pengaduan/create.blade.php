<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Donasi</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/johndoe.css') }}">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <header class="header-pengajuan">
        <div class="container">
            <div class="header-content">
                <h4 class="header-subtitle">Donasi</h4>
                <h6 class="header-mono">Sistem Informasi Penerimaan dan Pendistribusian Donasi</h6>
                <a href="{{ route('home') }}" class="btn btn-primary btn-rounded"><i class="ti-out pr-2"></i>Back
                    Home</a>
                <a href="{{ route('pengaduan.history') }}" class="btn btn-secondary btn-rounded"><i
                        class="ti-history pr-2"></i>History</a>
            </div>
        </div>
    </header>

    <div class="container mt-5">
        <h1 class="text-center">Form Donasi</h1>
        <p class="text-center">Silakan isi formulir di bawah ini untuk donasi.</p>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('pengaduan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="alamat">Tabel Donatur:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Donasi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="layanan_id">Pendistribusian:</label>
                <select class="form-control" id="layanan_id" name="layanan_id" required>
                    <option value="">Pilih Pendistribusian</option>
                    @foreach ($layanans as $layanan)
                        <option value="{{ $layanan->id }}">{{ $layanan->kategori_layanan }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
    <p></p>
    <p></p>
    <p></p>
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy;
                <script>document.write(new Date().getFullYear())</script> Created With <i
                    class="ti-heart text-danger"></i> By <a href="http://devcrud.com" target="_blank"><span
                        class="text-danger" title="Bootstrap 4 Themes and Dashboards">RonaIzy</span></a>
            </p>
        </div>
    </footer>
</body>

</html>