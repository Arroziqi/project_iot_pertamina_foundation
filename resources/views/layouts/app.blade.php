<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if (isset($title))
            {{ $title }}
        @else
            Dashboard - EMS-Uper
        @endif
    </title>

    <!-- Favicons -->
    <link href="/vendor/assets/img/logo1.png" rel="icon">
    <link href="/vendor/assets/img/logo1.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/vendor/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/vendor/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/vendor/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="/vendor/assets/css/style.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.topbar')

        @include('layouts.sidebar')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @include('layouts.footer')

    </div>


    <!-- Vendor JS Files -->
    <script src="/vendor/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/vendor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/assets/vendor/chart.js/chart.min.js"></script>
    <script src="/vendor/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/vendor/assets/vendor/quill/quill.min.js"></script>
    <script src="/vendor/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/vendor/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/vendor/assets/vendor/php-email-form/validate.js"></script>
    {{-- <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase-database.js"></script> --}}

    <!-- Template Main JS File -->
    <script src="/vendor/assets/js/main.js"></script>
    <!-- <script src="/vendor/assets/js/data.js"></script> -->
    {{-- <script src="/vendor/assets/js/station.js"></script> --}}

</body>

</html>
