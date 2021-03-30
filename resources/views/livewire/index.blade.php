@extends('layout.frontend')
@section('content')

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
                        <h1>Pembelian bahan bangunan</h1>
                        <img src="{{url('frontend/assets/img/svg/Order Confirmation_Monochromatic (1).svg')}}"
                            class="img-fluid" alt="">
                        <p>Pembelian bahan bangunan dapat dilakukan di mitra prima secara langsung
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="400">
                        <h1>Pemesanan Secara Online</h1>
                        <img src="{{url('frontend/assets/img/svg/Customer Service_Monochromatic.svg')}}"
                            class="img-fluid" alt="">
                        <p>Pemesanan dapat dilakukan online tanpa harus datang ke toko
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="600">
                        <h1>Pengiriman Bahan</h1>
                        <img src="{{url('frontend/assets/img/svg/Logistics_Monochromatic.svg')}}" class="img-fluid"
                            alt="">
                        <p>Pemesanan dapat dilakukan online tanpa harus datang ke toko
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
                            <img src="{{ url('storage/photos/'.$data->foto)}}" class="img-fluid" alt="" width="400px">
                        </div>
                        <div class="member-info">
                            <h4>Rp. {{ number_format($data->harga) }}</h4>
                        </div>
                        <a href="/detail/{{$data->id}}">Detail</a>
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
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i></a>

@endsection
