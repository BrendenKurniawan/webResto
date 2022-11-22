<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Warung Millenial - Resto Masa Kini</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Warung Millenial</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="/welcome" class="nav-item nav-link">Beranda</a>
                        {{-- Navbar Layanan --}}
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                            <div class="dropdown-menu m-0">
                                <a href="/cf_room" class="dropdown-item">Comfort Room</a>
                                <a href="/quality" class="dropdown-item">Quality Food</a>
                                <a href="/order" class="dropdown-item">Online Order</a>
                                <a href="/chat" class="dropdown-item">24/7 Service</a>
                            </div>
                        </div>
                        {{-- End Navbar Layanan --}}
                        <!-- <a href="/menu" class="nav-item nav-link">Menu</a> -->
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                            <div class="dropdown-menu m-0">
                                <a href="/wedding" class="dropdown-item">Wedding</a>
                                <a href="/party" class="dropdown-item">Party</a>
                                <a href="/meeting" class="dropdown-item">Meeting</a>
                            </div>
                        </div> -->
                    </div>
                    <a href="/login" class="btn btn-primary py-2 px-4">Login </a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Quality Food</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        
        {{-- comfort room --}}
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="https://agromixlestarigroup.com/wp-content/uploads/2021/09/juicy-steak-medium-rare-beef-with-spices-grilled-vegetables.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="data:image/jpeg;base64,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">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="http://cdn.shopify.com/s/files/1/0528/5173/6769/articles/Spices_920x650_b-1-min.jpg?v=1625116404">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- <h5 class="section-title ff-secondary text-start text-primary fw-normal">Tentang Kami</h5> -->
                        <h1 class="mb-4">Quality Food</h1>
                        <p class="mb-4">Resto kami selalu menyediakan makanan dengan bahan berkualitas. Semua bahan di toko kami merupakan bahan lokal yang berkualitas sama dengan bahan import.</p>
                        <p class="mb-4">Kami selalu memastikan untuk memberikan makanan sesuai standar restauran kami.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Restoran</h4>
                        <a class="btn btn-link" href="">Tentang Kami</a>
                        <a class="btn btn-link" href="">Hubungi</a>
                        <a class="btn btn-link" href="">Reservasi</a>
                        <a class="btn btn-link" href="">Kebijakan Privasi</a>
                        <a class="btn btn-link" href="">Maksud & Tujuan</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Kontak</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>JL. Pucang Anom Timur, Semarang, Indonesia</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+062 3754 34855</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@warmill.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Jam Buka</h4>
                        <h5 class="text-light fw-normal">Senin - Jumat</h5>
                        <p>08:00 - 20:00</p>
                        <h5 class="text-light fw-normal">Sabtu - Minggu</h5>
                        <p>10:00 - 00:00</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Berita</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Email Anda">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Warung Millenial</a>, All Right Reserved. 
							
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>