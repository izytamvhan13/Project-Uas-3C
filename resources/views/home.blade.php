<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>PROJECT UAS</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + JohnDoe main styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/johndoe.css') }}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
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
                <button class="btn btn-primary btn-rounded"><i class="ti-out pr-2"></i>Log Out</button>
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
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Resume</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="{{ asset('assets/imgs/man.jpeg') }}" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">Sistem informasi layanan pengaduan masyarakat</h5>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item last-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Sistem Informasi Layanan Masyarakat Pada Kelurahan</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">Sistem Informasi Layanan Masyarakat pada kelurahan bertujuan untuk mempermudah pengelolaan layanan publik di tingkat kelurahan, meningkatkan efisiensi, transparansi, dan responsivitas dalam memberikan pelayanan kepada masyarakat.</h5>
                <p class="mt-20">1. Pengaduan Masyarakat
                Masyarakat dapat mengajukan pengaduan terkait masalah di lingkungan kelurahan, seperti kebersihan, keamanan, atau fasilitas umum.</p>
                <p>2. Pengajuan Surat
                Warga dapat mengajukan permohonan surat resmi, seperti surat keterangan domisili atau surat izin.</p>
                <p>3. Layanan Administrasi
                Pengelolaan data kependudukan dan administrasi keluarga yang lebih terstruktur dan mudah diakses.</p>
                <p>4. Notifikasi dan Tracking Proses
                Masyarakat dapat melacak status pengaduan atau permohonan mereka secara real-time dan menerima pemberitahuan terkait perkembangan proses.

                Sistem ini membantu kelurahan dalam memberikan pelayanan yang lebih cepat dan terorganisir kepada masyarakat.</p>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Personal Info</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Nama</span> : Jamilatul Azkia Putri</li>
                    <li><span>NIM</span> : C030323091</li>
                    <li><span>Program Studi</span> : Teknik Informatika</li>
                    <li><span>Mata Kuliah</span> : Desain Web </li>
                    <li><span>Jenis Tugas</span> : Ujian Akhir Semester</li>
                </ul>
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                </ul>  
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Personal Info</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Nama</span> : M.Rizky</li>
                    <li><span>NIM</span> : C030323094</li>
                    <li><span>Program Studi</span> : Teknik Informatika</li>
                    <li><span>Mata Kuliah</span> : Desain Web </li>
                    <li><span>Jenis Tugas</span> : Ujian Akhir Semester</li>
                </ul>
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                </ul>  
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">My Expertise</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>UX Design</h6>
                        <p class="subtitle">exercitat Repellendus, corrupt.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Web Development</h6>
                        <p class="subtitle">Lorem ipsum dolor sit consectetur.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Digital Marketing</h6>
                        <p class="subtitle">voluptate commodi illo voluptatib.</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Resume Section -->
    <section class="section" id="resume">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger"></span> Dashboards</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                       <div class="card-header">
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="mt-2">
                                <h4>Pengaduan</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">Pengaduan Masyarakat</h6>
                            <div class="container text-left mt-5">
                            <hr>
                            <p class="subtitle">Fasilitas ini memungkinkan warga untuk melaporkan berbagai keluhan atau permasalahan di lingkungan kelurahan, seperti infrastruktur, keamanan, atau kebersihan. Proses pengaduan dilakukan secara terstruktur dengan notifikasi status untuk memastikan transparansi dan memberikan solusi yang cepat bagi masyarakat.</p>
                            <div class="row justify-content-right">
                                <!-- Kolom untuk Tombol Buat Pengaduan -->
                                <div class="col-auto">
                                    <a href="{{ route('pengaduan.create') }}" class="btn btn-outline-danger mt-3">
                                        <i class="icon-down-circled2"></i> Buat Pengaduan
                                    </a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                       <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Penilaian</h4>
                                <span class="line"></span>  
                            </div>
                        </div>
                        <div class="card-body pb-2">
                           <h6>★★★★★</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 97%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>★★★★</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>★★★</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>★★</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>★</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p>3.786.980 Penilaian</p>
                        </div>
                    </div>
                    <div class="card">
                       <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Ulasan</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                        <h6>Tulis Ulasan Anda</h6>
                        <h6><span style="font-size:400%;color:black;">☆☆☆☆☆</span></h6>
                        <p>Ketuk untuk Menilai</p>
                        <hr>
                        <h6><span style="font-size:200%;color:yellow;">★★★★★</span></h6>
                        <p>Sangat membantu untuk menyampaikan keluhan masyarakat!!!</p>
                        <hr>
                        <h6><span style="font-size:200%;color:yellow;">★★★★</span></h6>
                        <p>Bagus deh ga repot lagi pergi ke kelurahan hahaha</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-dark text-center">
        <div class="container">
            <h2 class="text-light mb-5 font-weight-normal">I Am Available For FreeLance</h2>
            <button class="btn bg-primary w-lg">Hire me</button>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
            <div class="portfolio">
                <div class="filters">
                    <a href="#" data-filter=".new" class="active">New</a>
                    <a href="#" data-filter=".advertising">Advertising</a>
                    <a href="#" data-filter=".branding">Branding</a>
                    <a href="#" data-filter=".web">Web</a>
                </div>
                <div class="portfolio-container"> 
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/web-1.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/web-1.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>   
                        </div>             
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/web-2.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/web-2.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div> 
                        </div>                         
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/advertising-2.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                         
                            <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/advertising-2.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSTISING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>    
                        </div>              
                    </div> 
                    <div class="col-md-6 col-lg-4 web">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/web-4.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/web-4.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div>

                    <div class="col-md-6 col-lg-4 advertising"> 
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/advertising-1.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                               
                            <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/advertising-1.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSITING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                       
                    </div> 
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/web-3.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                           <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/web-3.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">WEB</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div>
                    <div class="col-md-6 col-lg-4 advertising new">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/advertising-3.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">       
                           <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/advertising-3.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERSITING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                       
                    </div> 
                    <div class="col-md-6 col-lg-4 advertising new"> 
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/advertising-4.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">            
                            <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/advertising-4.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">ADVERTISING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/branding-1.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                        
                            <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/branding-1.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div> 
                        </div>
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/branding-2.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">  
                            <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/branding-2.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div> 
                    <div class="col-md-6 col-lg-4 branding new">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/branding-3.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">   
                            <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/branding-3.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                    
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/branding-4.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">                      
                            <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/branding-4.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                      
                    </div> 
                    <div class="col-md-6 col-lg-4 branding">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/branding-5.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">          
                            <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/branding-5.jpg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">BRANDING</h6>
                                    <p class="subtitle">Expedita corporis doloremque velit in totam!</p>
                                </div>
                            </div>
                        </div>                                                   
                    </div>
                </div> 
            </div>  
        </div>            
    </section>
    <!-- End of portfolio section -->

    <section class="section" id="blog">
        <div class="container">
            <h2 class="mb-5">Latest <span class="text-danger">News</span></h2>
            <div class="row">
                <div class="blog-card">
                    <div class="img-holder">
                        <img src="{{ asset('assets/imgs/blog1.jpg') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates">
                    </div>
                    <div class="content-holder">
                        <h6 class="title">Consectetur adipisicing elit</h6>

                        <p class="post-details">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 234</a>
                            <a href="#"><i class="ti-comment"></i> 123</a>
                        </p>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nesciunt qui sit velit delectus voluptates, repellat ipsum culpa id deleniti. Rerum debitis facilis accusantium neque numquam mollitia modi quasi distinctio.</p>

                        <p><b>Necessitatibus nihil impedit! Ex nisi eveniet, dolor aliquid consequuntur repudiandae.</b></p>
                        <p>Magnam in repellat enim harum omnis aperiam! Explicabo illo, commodi, dolor blanditiis cupiditate harum nisi vero accusamus laudantium voluptatibus dolores quae obcaecati.</p>

                        <a href="#" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
                    </div>
                </div><!-- end of blog wrapper -->

                <!-- blog-card -->
                <div class="blog-card">
                    <div class="img-holder">
                        <img src="{{ asset('assets/imgs/blog2.jpg') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates">
                    </div>
                    <div class="content-holder">
                        <h6 class="title">Explicabo illo</h6>

                        <p class="post-details">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 456</a>
                            <a href="#"><i class="ti-comment"></i> 264</a>
                        </p>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit excepturi laborum enim, vitae ipsam atque eum, ad iusto consequuntur voluptas, esse doloribus. Perferendis porro quisquam vitae exercitationem aliquid, minus eos laborum repudiandae, cumque debitis iusto omnis praesentium? Laborum placeat sit adipisci illum tempore maxime, esse qui quae? Molestias excepturi corporis similique doloribus. Esse vitae earum architecto nulla non dolores illum at perspiciatis quod, et deleniti cupiditate reiciendis harum facere, delectus eum commodi soluta distinctio sit repudiandae possimus sunt. Ipsum, rem.</p>

                        <a href="#" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
                    </div>
                </div><!-- end of blog wrapper -->
                <!-- blog-card -->
                <div class="blog-card">
                    <div class="img-holder">
                        <img src="{{ asset('assets/imgs/blog3.jpg') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates">
                    </div>
                    <div class="content-holder">
                        <h4 class="title">Porro Quisqua</h4>

                        <p class="post-details">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 431</a>
                            <a href="#"><i class="ti-comment"></i> 312</a>
                        </p>
                        
                        <p>consectetur adipisicing elit. Impedit excepturi laborum enim, vitae ipsam atque eum, ad iusto consequuntur voluptas, esse doloribus. Perferendis porro quisquam vitae exercitationem aliquid, minus eos laborum repudiandae, cumque debitis iusto omnis praesentium? Laborum placeat sit adipisci illum tempore maxime, esse qui quae? Molestias excepturi corporis similique doloribus. Esse vitae earum architecto nulla non dolores illum at perspiciatis quod, et deleniti cupiditate reiciendis harum facere, delectus eum commodi soluta distinctio sit repudiandae possimus sunt. Ipsum, rem.</p>

                        <a href="#" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
                    </div>
                </div><!-- end of blog wrapper -->

            </div>
        </div>
    </section>

    <div class="section contact" id="contact">
        <div id="map" class="map"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <h4 class="contact-title">Send a message</h4>
                        <form action="">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Name *" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email *" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message *" rows="7" required></textarea>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="form-control btn btn-primary">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h4 class="contact-title">Get in touch</h4>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-mobile icon-md"></i>
                            </div>
                            <div class="col-10 ">
                                <h6 class="d-inline">Phone : <br> <span class="text-muted">+ (123) 456-789</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-map-alt icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Address :<br> <span class="text-muted">12345 Fake ST NoWhere AB Country.</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-envelope icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Email :<br> <span class="text-muted">info@website.com</span></h6>
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
        </div>
    </div>
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">DevCRUD</span></a> 
            </p>
        </div>
    </footer>

    <!-- core  -->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- Isotope  -->
    <script src="{{ asset('assets/vendors/isotope/isotope.pkgd.js') }}"></script>
    
    <!-- Google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="{{ asset('assets/js/johndoe.js') }}"></script>

</body>
</html>
