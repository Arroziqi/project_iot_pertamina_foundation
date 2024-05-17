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
            EMS-Uper
        @endif
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Favicons -->
    <link href="/vendor/assets/img/favicon.png" rel="icon">
    <link href="/vendor/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
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
</head>

<body class="font-sans text-gray-900 antialiased">

    {{ $slot }}

    <!-- Vendor JS Files -->
    <script src="/vendor/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/vendor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="/vendor/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/vendor/assets/vendor/quill/quill.min.js"></script>
    <script src="/vendor/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/vendor/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/vendor/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/vendor/assets/js/main.js"></script>
</body>

</html>
