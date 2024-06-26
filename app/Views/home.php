<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SI-KOMET</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=base_url()?>assets/freeuser/img/logo.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url()?>assets/freeuser/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/freeuser/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url()?>assets/freeuser/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url()?>assets/freeuser/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="#" class="navbar-brand">
                    <h1 class="text-white">SI<span class="text-dark">.</span>KOMET</h1>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="#beranda" class="nav-item nav-link active">Beranda</a>
                        <a href= "#tentang" class="nav-item nav-link">Tentang</a>
                        <a href="#alur" class="nav-item nav-link">Alur</a>
                        <a href="#media_patner" class="nav-item nav-link">Media Patner</a>
                        <!-- <a href="#contact" class="nav-item nav-link">Contact</a> -->
                        <a href="<?=base_url()?>auth/login" class="nav-item nav-link">Login</a>
                    </div>
                    <!-- <butaton type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> -->
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5" id="beranda">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">SI-KOMET</div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Sistem Informasi Komunikasi Media Secara Elektronik</h1>
                    <p class="text-white mb-4 animated slideInRight">Tempor rebum no at dolore lorem clita rebum rebum ipsum
                        rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit</p>
                    <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">Read More</a>
                    <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="<?=base_url()?>assets/freeuser/img/journalist.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Tentang Start -->
    <div class="container-fluid py-5" id="tentang">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="<?=base_url()?>assets/freeuser/img/media.png">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Tentang</div>
                    <h1 class="mb-4">Apa itu SIKOMET?</h1>
                    <p class="mb-4">SIKOMET (Sistem Informasi Komunikasi Media Secara Elektronik) merupakan inovasi dari Dinas Komunikasi Informatika
                            Statistik & Persandian Kabupaten Banjar, dalam rangka menjalankan tugas kerjasama media Pemerintah Kabupaten Banjar
                            dengan media partner, secara transparan, efektif dan efisien.</p>                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5" id="alur">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Alur Aplikasi</div>
                    <h1 class="mb-4">Bagaimana Cara Kerja Aplikasi Ini?</h1>
                    <p class="mb-">Kamu bisa bikin surat kerja sama dengan mudah di aplikasi ini. Selain itu, aplikasi ini juga bisa lihat langsung bagaimana berita dari media penyiaran sesuai dengan perjanjian atau tidak. Jadi, lebih simpel, lebih cepat, dan semua jadi lebih jelas!</p>
                    <!-- <a class="btn btn-primary rounded-pill px-4" href="">Read More</a> -->
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-user-circle fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">STEP 1</h5>
                                        <p>Registrasia akun dengan nama media, username, dan password.</p>
                                         <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                            <i class="fa fa-file-import fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">STEP 3</h5>
                                        <p>Upload berkas-berkas pendukung untuk perjanjian kerjasama, setelah itu tunggu konfirmasi dari admin dan lanjut ajukan kerjasama.</p>
                                         <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                            <i class="fa fa-edit fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">STEP 2</h5>
                                        <p>Login dengan username dan password yang telah dibuat, lalu lengkapi porfile media anda.</p>
                                         <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-arrow-circle-up fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">STEP 4</h5>
                                        <p>Perjanjian kerjasama disetjui, lalu anda dapat mengupload berita-berita sesuai dengan perjanjian kerjasama.</p>
                                         <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Case Start -->
    <div class="container-fluid bg-light py-5" id="media_patner">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Media Patner</div>
                <h1 class="mb-4">Media Yang Bekerja Sama</h1>
            </div>
            <div class="row g-4">
                <?php 
                $delay = 0.0;
                foreach($media as $m):?>
                <div class="col-lg-3 wow fadeIn" data-wow-delay="<?php echo $delay+= 0.1; ?>s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="<?=base_url()?>uploads/logo_media/<?=$m['logo_media']?>">
                        <a class="case-overlay text-decoration-none" href="<?php echo $m['link_media']?>">
                            <h5 class="lh-base text-white mb-3"><?php echo $m['nama_media']?></h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <!-- Case End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="#" class="d-inline-block mb-3">
                        <h1 class="text-white">SI<span class="text-primary">.</span>KOMET</h1>
                    </a>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor</p>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>infoexample.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-white mb-4">Popular Link</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Career</a>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4">Our Services</h5>
                    <a class="btn btn-link" href="">Robotic Automation</a>
                    <a class="btn btn-link" href="">Machine learning</a>
                    <a class="btn btn-link" href="">Predictive Analysis</a>
                    <a class="btn btn-link" href="">Data Science</a>
                    <a class="btn btn-link" href="">Robot Technology</a>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/freeuser/lib/wow/wow.min.js"></script>
    <script src="<?=base_url()?>assets/freeuser/lib/easing/easing.min.js"></script>
    <script src="<?=base_url()?>assets/freeuser/lib/waypoints/waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/freeuser/lib/counterup/counterup.min.js"></script>
    <script src="<?=base_url()?>assets/freeuser/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url()?>assets/freeuser/js/main.js"></script>
</body>

</html>