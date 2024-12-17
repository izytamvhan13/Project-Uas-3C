<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>PROJECT UAS</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/johndoe.css') }}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
            <div class="header-content">
                <h4 class="header-subtitle">Selamat Datang</h4>
                <h1 class="header-title">Sistem Informasi</h1>
                <h6 class="header-mono">Layanan Masyarakat Pada Kelurahan</h6>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-rounded"><i class="ti-out pr-2"></i>Log Out</button>
                </form>
            </div>
        </div>
    </header>
    
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="{{ asset('assets/imgs/man.jpeg') }}" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title font-weight-bold">Sistem informasi layanan pengaduan masyarakat</h5>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="#portfolio" class="nav-link">Layanan</a></li>
                    <li class="nav-item"><a href="#blog" class="nav-link">Blog</a></li>
                    <li class="nav-item last-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="about" class="row about-section flex-column">
        <div class="container-fluid">
            <div class="col-12 about-card mb-5">
                <h3 class="font-weight-bold">Selamat Datang di Sistem Informasi Layanan Masyarakat Kelurahan</h3>
                <span class="line mb-4"></span>
                <h5 class="mb-3">Sistem Informasi Layanan Masyarakat pada kelurahan bertujuan untuk mempermudah pengelolaan layanan publik di tingkat kelurahan...</h5>
                <div class="row">
                    <div class="col-12">
                        <p style="font-weight: bold; font-size: 24px;">Apa yang Bisa Anda Lakukan di Sini?</p>
                        <ul style="font-size: 18px;">
                            <li><strong>Pengaduan Masyarakat:</strong> ...</li>
                            <li><strong>Pengajuan Surat Resmi:</strong> ...</li>
                            <li><strong>Layanan Administrasi Kependudukan:</strong> ...</li>
                        </ul>
                        <p style="font-weight: bold; font-size: 24px;">Mengapa Memilih Sistem Kami?</p>
                        <p style="font-size: 20px;">Sistem Informasi Layanan Masyarakat Kelurahan dirancang untuk menghadirkan layanan yang lebih baik...</p>
                    </div>
                </div>
            </div>
            <hr style="border: 0; height: 2px; background-color: #e74c3c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center" style="padding-top: 20px;">
                        <h3 class="font-weight-bold" style="font-size: 40px;">Pengaduan</h3>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="title text-danger" style="font-size: 25px;">Pengaduan Masyarakat</h6>
                        <div class="container text-center mt-5">
                            <p class="subtitle" style="font-size: 20px;">Fasilitas ini memungkinkan warga untuk melaporkan berbagai keluhan...</p>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <a href="{{ route('pengaduan.create') }}" class="btn btn-outline-danger mt-3" style="font-size: 18px;">
                                        <i class="icon-down-circled2" style="font-size: 20px;"></i> Buat Pengaduan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h3 class="font-weight-bold" style="font-size: 40px;">Layanan</h3>
            <div class="portfolio">
                <div class="portfolio-container">
                    <div class="row">
                        @foreach($layanans as $layanan)
                        <div class="col-md-6 col-lg-4">
                            <div class="portfolio-item">
                                <img src="{{ Storage::url($layanan->foto) }}" class="img-fluid" alt="{{ $layanan->kategori_layanan }}">
                                <div class="content-holder">
                                    <a class="img-popup" href="{{ asset($layanan->foto) }}"></a>
                                    <div class="text-holder">
                                        <h6 class="title">{{ $layanan->kategori_layanan }}</h6>
                                        <p class="subtitle">{{ $layanan->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="blog">
        <div class="container">
            <h2 class="mb-5">Latest <span class="text-danger">News</span></h2>
            <div class="row">
                <!-- Blog cards here -->
            </div>
        </div>
    </section>

    <div class="section contact" id="contact">
        <div id="map" class="map"></div>
        <div class="container">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-8 mb-4">
                    <div class="contact-form-card">
                        <h4 class="contact-title">Send a message</h4>
                        <form action="{{ route('feedback.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Name *" name="nama" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email *" name="email" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message *" name="message" rows="7" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4 mb-4">
                    <div class="contact-info-card">
                        <h4 class="contact-title">Get in touch</h4>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-mobile icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Phone : <br> <span class="text-muted">+ (62) 89000000000</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-map-alt icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Address :<br> <span class="text-muted">Lab Axioo Politeknik.</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-envelope icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Email :<br> <span class="text-muted">info@websitelayananmasyarakat.com</span></h6>
                            </div>
                        </div>
                        <ul class="social-icons pt-4">
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Personal Info Section -->
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="font-weight-light">Personal Info</h3>
                            <span class="line mb-5"></span>
                        </div>
                        <div class="card-body">
                            <ul class="info list-unstyled">
                                <li><span>Nama</span>: Jamilatul Azkia Putri</li>
                                <li><span>NIM</span>: C030323091</li>
                                <li><span>Program Studi</span>: Teknik Informatika</li>
                                <li><span>Mata Kuliah</span>: Desain Web</li>
                                <li><span>Jenis Tugas</span>: Ujian Akhir Semester</li>
                            </ul>
                            <span class="line mb-5"></span>
                            <ul class="info list-unstyled">
                                <li><span>Nama</span>: M.Rizky</li>
                                <li><span>NIM</span>: C030323094</li>
                                <li><span>Program Studi</span>: Teknik Informatika</li>
                                <li><span>Mata Kuliah</span>: Desain Web</li>
                                <li><span>Jenis Tugas</span>: Ujian Akhir Semester</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Ulasan Section -->
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mt-2">Ulasan</h4>
                            <span class="line"></span>
                        </div>
                        <div class="card-body pb-2">
                            <h6>Feedback Pengguna</h6>
                            @foreach($feedbacks as $feedback)
                                <div class="feedback-item">
                                    <h6><strong>{{ $feedback->nama }}</strong> ({{ $feedback->email }})</h6>
                                    <p>{{ $feedback->message }}</p>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">AzkiaRizky</span></a> 
            </p>
        </div>
    </footer>

    <script src="{{ asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.pkgd.js') }}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>
    <script src="{{ asset('assets/js/johndoe.js') }}"></script>
</body>
</html>
