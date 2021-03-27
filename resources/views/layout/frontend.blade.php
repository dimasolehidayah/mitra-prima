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

    @yield('content')

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
