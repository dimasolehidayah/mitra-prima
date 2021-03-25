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

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                @foreach ($slider as $key => $data)
                <div class="carousel-item {{$key == 0 ? 'active' : ''}}"
                    style="background-image: url({{asset('storage/photos/'.$data->gambar)}})">
                    <div class="carousel-container">
                        <div class="container carousel-caption">
                            <div class="text">
                                <h2 class="animate__animated animate__fadeInDown">{{ $data->judul }}</h2>
                                <p class="animate__animated animate__fadeInUp">{{ $data->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>

            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>

            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Values Section ======= -->
        <section id="layanan" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header text-center">
                    <h2>Layanan</h2>
                </header>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="box" data-aos="fade-up" data-aos-delay="200">
                            <h1>Lorem, ipsum.</h1>
                            <img src="{{url('frontend/assets/img/svg/Order Confirmation_Monochromatic (1).svg')}}"
                                class="img-fluid" alt="">
                            <h3>Ad cupiditate sed est odio</h3>
                            <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="400">
                            <h1>Lorem, ipsum.</h1>
                            <img src="{{url('frontend/assets/img/svg/Customer Service_Monochromatic.svg')}}"
                                class="img-fluid" alt="">
                            <h3>Voluptatem voluptatum alias</h3>
                            <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="600">
                            <h1>Lorem, ipsum.</h1>
                            <img src="{{url('frontend/assets/img/svg/Logistics_Monochromatic.svg')}}" class="img-fluid"
                                alt="">
                            <h3>Fugit cupiditate alias nobis.</h3>
                            <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Values Section -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ff2929" fill-opacity="1"
                d="M0,160L30,176C60,192,120,224,180,224C240,224,300,192,360,160C420,128,480,96,540,117.3C600,139,660,213,720,245.3C780,277,840,267,900,240C960,213,1020,171,1080,160C1140,149,1200,171,1260,176C1320,181,1380,171,1410,165.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
            </path>
        </svg>

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">

            <div class="container" data-aos="fade-up">

                <header class="section-header text-center text-white mb-4">
                    <h2>Produk</h2>
                </header>


                <div class="row gy-4">
                    @foreach ($produk as $data)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="member">
                            <h4 class="mt-3 mb-3">{{ $data->nama_produk }}</h4>
                            <div class="member-img">
                                <img src="{{ url('storage/photos/'.$data->foto)}}" class="img-fluid" alt=""
                                    width="400px">
                            </div>
                            <div class="member-info">
                                <h4>Rp. {{ $data->harga }}</h4>
                                <p>{{ $data->deskripsi }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>

        </section><!-- End Team Section -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ff2929" fill-opacity="1"
                d="M0,224L30,208C60,192,120,160,180,154.7C240,149,300,171,360,197.3C420,224,480,256,540,261.3C600,267,660,245,720,218.7C780,192,840,160,900,165.3C960,171,1020,213,1080,240C1140,267,1200,277,1260,261.3C1320,245,1380,203,1410,181.3L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
            </path>
        </svg>
        <!-- ======= Services Section ======= -->
        <section id="contact" class="services section-bg">
            <div class="container" data-aos="fade-up">
                @foreach ($setting as $data)
                <div class="section-title text-center">
                    <p>Informasi</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class='bx bx-time-five'></i></div>
                            <h4 class="title"><a href="">Jam Buka</a></h4>
                            <p class="description">{{ $data->jam }}</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class='bx bx-map'></i></div>
                            <h4 class="title"><a href="">Lokasi</a></h4>
                            <p class="description">{{ $data->alamat }}</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class='bx bx-envelope'></i></div>
                            <h4 class="title"><a href="">Kontak</a></h4>
                            <p class="description">Email : {{ $data->email }}<br>No Hp : {{ $data->no_hp }}</p>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->

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
                            <a href="https://api.whatsapp.com/send?phone=62{{ $data->no_hp }}" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i></a>
    @foreach ($setting as $data)
    <div
<<<<<<< Updated upstream
        style="position:fixed;padding:5px;right:60px;bottom:2.4%;background-color:green;width:40px;border-radius: 10%;">
        <a href="https://api.whatsapp.com/send?phone=62{{ $data->no_hp }}&text=Halo saya tertarik membeli">
=======
        style="position:fixed;padding:5px;right:60px;bottom:2.5%;background-color:green;width:40px;border-radius: 10%;">
        <a href="https://api.whatsapp.com/send?phone=62{{ $data->no_hp }}&text={{ $data->pesan }}">
>>>>>>> Stashed changes
            <img width="30px;" src="{{url('frontend/assets/img/wa.png')}}"></a>
    </div>
    @endforeach

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
