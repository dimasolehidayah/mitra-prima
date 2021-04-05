@section('title','Dashboard')
@section('header','Dashboard')
<div>
    <div class="card h-100">
        <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
            <div class="row align-items-center">
                <div class="col-xl-8 col-xxl-6">
                    <div class="text-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                        <h1 class="text-danger">Selamat Datang {{ Auth::user()->name }} !</h1>
                        <p class="text-gray-700 mb-0">
                            Saatnya memulai! Lihat peluang baru sekarang, atau lanjutkan pekerjaan Anda sebelumnya.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-6 text-center"><img class="img-fluid"
                        src="{{ 'template/assets/img/freepik/at-work-pana.svg' }}" style="max-width: 26rem;" />
                </div>
            </div>
        </div>
    </div>
    <br>
    @section('kotak')
    <div class="row">
        <div class="col-xxl-6 col-lg-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-3">
                            <div class="text-white-75 small">Jumlah Produk</div>
                            <div class="text-lg font-weight-bold">{{$produk}}</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="folder"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/produk">Lihat Produk</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-lg-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-3">
                            <div class="text-white-75 small">Jumlah Kategori</div>
                            <div class="text-lg font-weight-bold">{{$kategori}}</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="align-justify"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/kategori">Lihat Kategori</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-lg-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-3">
                            <div class="text-white-75 small">Jumlah Slider</div>
                            <div class="text-lg font-weight-bold">{{$slider}}</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="image"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/slider">Lihat Slider</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xxl-6 col-lg-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-3">
                            <div class="text-white-75 small">Jumlah Pengguna</div>
                            <div class="text-lg font-weight-bold">{{$user}}</div>
                        </div>
                        <i class="feather-xl text-white-50" data-feather="user"></i>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/user">Lihat Pengguna</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

</div>
