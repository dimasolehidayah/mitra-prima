<div>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <br>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Detail Produk</li>
            </ol>
            <h2>Detail Produk</h2>
        </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper-container">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ url('storage/photos/'.$data->foto)}}" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">

                        <h3>Informasi Produk</h3>
                        <ul>
                            <li><strong>Nama Produk</strong>: {{ $data->nama_produk }}</li>
                            <li><strong>Harga</strong>: {{ $data->harga }}</li>
                            <li><strong>Stok</strong>: {{ $data->stok }}</li>
                            @foreach ($setting as $s)
                            <a
                                href="https://api.whatsapp.com/send?phone=62{{ $s->no_hp }}&text={{$s->pesan}} {{ $data->nama_produk }}">Pesan</a>
                            @endforeach
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Deskripsi Produk</h2>
                        <p>{{ $data->deskripsi }}</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
</div>
