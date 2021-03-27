<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    @foreach ($setting as $s)
    <title>{{$s->nama_website}}</title>
    @endforeach

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    @foreach ($setting as $s)
    <link href="{{ url('storage/photos/'.$s->logo)}}" rel="shortcut icon">
    <link href="{{ url('storage/photos/'.$s->logo)}}" rel="apple-touch-icon">
    @endforeach

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('frontend/assets/vendor/animate.css/animate.min.css')}} " rel="stylesheet">
    <link href=" {{url('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href=" {{url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}} " rel="stylesheet">
    <link href="{{url('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href=" {{url('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href=" {{url('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href=" {{url('frontend/assets/vendor/swiper/swiper-bundle.min.css')}} " rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('frontend/assets/css/style.css')}}" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            @foreach ($setting as $s)
            <img src="{{ url('storage/photos/'.$s->logo)}}" width="100px">
            @endforeach

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#layanan">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#team">Produk</a></li>
                    <li><a class="nav-link scrollto " href="#contact">Kontak Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section id="team" class="team">

        <div class="container" data-aos="fade-up">

            <header class="section-header text-center text-white mb-4">
                <h2>Produk</h2>
            </header>
            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="member">
                        <h4 class="mt-3 mb-3">{{ $data->nama_produk }}</h4>
                        <div class="member-img">
                            <img src="{{ url('storage/photos/'.$data->foto)}}" class="img-fluid" alt=""
                                width="400px">
                        </div>
                        <div class="member-info">
                            <h4>Rp. {{ number_format($data->harga) }}</h4>
                            <p>{{ $data->deskripsi }}</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section><!-- End Team Section -->
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    @foreach ($setting as $data)
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <img src="{{ url('storage/photos/'.$data->logo)}}" width="200px">
                    </div>
                    @endforeach


                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Menu</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#layanan">Layanan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#team">Produk</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Kontak kami</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Support</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Team</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Email</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Get Help</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Social Media Kami</h4>
                        <p>Ikuti sosial media kami untuk mendapatkan setiap informasi terbaru dari kami</p>
                        <div class="social-links mt-3">
                            @foreach ($setting as $data)
                            <a href="{{ $data->fb }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="{{ $data->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="{{ $data->youtube }}" class="youtube"><i class="bx bxl-youtube"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=62{{ $data->no_hp }}" class="whatsapp"><i
                                    class="bx bxl-whatsapp"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{url('frontend/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('frontend/assets/js/main.js')}}"></script>
    <script src="{{url('frontend/assets/js/main2.js')}}"></script>
    <script src="{{url('frontend/assets/js/main3.js')}}"></script>

</body>

</html>
