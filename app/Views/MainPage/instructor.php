<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BMC : Instruktur</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('brem/img/icon bmc.png') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('brem/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('brem/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('brem/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('brem/css/style.css') ?>" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Memuat...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <p class="m-0 fw-bold" style="font-size: 25px;"><img src="<?= base_url('brem/img/icon bmc.png') ?>" alt="" height="50px"><span
                    style="color: #fb873f;"></span></p>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            style="border: none;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?= base_url() ?>" class="nav-item nav-link active">Beranda</a>
                <a href="<?= site_url('about') ?>" class="nav-item nav-link">Tentang</a>
                <a href="<?= site_url('courses') ?>" class="nav-item nav-link">Kursus</a>
                <?php if(true) {  //PHP BELUM BERFUNGSI KARNA LOGIN PHP BELUM JADI ?>
                <a href="<?= site_url('#') ?>" class="nav-item nav-link">Simulasi</a>
                <?php } ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Halaman</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="<?= site_url('team') ?>" class="dropdown-item">Tim Kami</a>
                        <a href="<?= site_url('testimonial') ?>" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="<?= site_url('contact') ?>" class="nav-item nav-link">Kontak</a>
                <a href="<?= site_url('login') ?>" class="nav-item nav-link">Masuk</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Jadilah Seorang Instruktur</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="<?= base_url() ?>">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Jadilah Seorang Instruktur</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Instructor Page Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5 bg-white text-center px-3" style="color: #fb873f;">Daftar Sebagai Instruktur</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Selamat datang di SecretCoder - Tempat Pengetahuan Bertemu Inovasi</h5>
                    <p class="mb-4">Apakah Anda bersemangat membagikan keahlian Anda dan memberikan dampak nyata bagi para pelajar di seluruh dunia? Jika iya, kami mengundang Anda untuk menjadi instruktur di platform pembelajaran online kami yang dinamis! Bergabunglah dengan komunitas pengajar yang berdedikasi untuk menumbuhkan kecintaan terhadap belajar dan memberdayakan individu mencapai tujuan mereka.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- More sections here as needed -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Tautan Cepat</h4>
                    <p><a class="text-light" href="<?= site_url('about') ?>">Tentang Kami</a></p>
                    <p><a class="text-light" href="<?= site_url('contact') ?>">Kontak Kami</a></p>
                    <p><a class="text-light" href="#">Kebijakan Privasi</a></p>
                    <p><a class="text-light" href="#">Syarat & Ketentuan</a></p>
                    <p><a class="text-light" href="#">FAQ & Bantuan</a></p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Kontak</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> Jalan Farrel Pasaribu, Simpang GG. Rambutan Daerah, Jl. Lapangan Sepak Bola, Kec. Siantar Marihat, Kota Pematang Siantar, Sumatera Utara 21121</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0821-6329-9216</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>kursuonline.moracollege@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="<?= base_url() ?>">BMC</a>, 2025.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('brem/lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('brem/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('brem/lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('brem/lib/owlcarousel/owl.carousel.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('brem/js/main.js') ?>"></script>
</body>

</html>