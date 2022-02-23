<!doctype html>
<html lang="zxx">

<!-- Mirrored from baston.laborasyon.com/demos/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jan 2022 08:55:01 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://baston.laborasyon.com/assets/media/image/favicon.png"/>

    <!-- Main css -->
    <link rel="stylesheet" href="https://baston.laborasyon.com/vendors/bundle.css" type="text/css">

    <!-- Google font -->
    <link href="../../../fonts.googleapis.com/css2ae9f.css?family=Fira+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Slick -->
    <link rel="stylesheet" href="https://baston.laborasyon.com/vendors/slick/slick.css" type="text/css">
    <link rel="stylesheet" href="https://baston.laborasyon.com/vendors/slick/slick-theme.css" type="text/css">

    <!-- Daterangepicker -->
    <link rel="stylesheet" href="https://baston.laborasyon.com/vendors/datepicker/daterangepicker.css" type="text/css">

    <!-- DataTable -->
    <link rel="stylesheet" href="https://baston.laborasyon.com/vendors/dataTable/datatables.min.css" type="text/css">

<!-- App css -->
    <link rel="stylesheet" href="https://baston.laborasyon.com/assets/css/app.min.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"  /></head>
<body>

    <!-- Preloader -->
    <div class="preloader">
    <h3>Monalhost</h3>
        {{-- <img class="logo" src="https://baston.laborasyon.com/assets/media/image/logo/logo.png" alt="logo"> --}}
        {{-- <img class="dark-logo" src="https://baston.laborasyon.com/assets/media/image/logo/dark-logo.png" alt="logo dark"> --}}
        <div class="preloader-icon"></div>
    </div>

    @include('admin.dashboard.body.sidebar-group')

    <!-- Layout wrapper -->
    <div class="layout-wrapper">

        @include('admin.dashboard.body.header')

            <!-- Content wrapper -->
            <div class="content-wrapper">

                @include('admin.dashboard.body.navigation')

                <!-- Content body -->
                <div class="content-body">

                    @yield('content')

                    @include('admin.dashboard.body.footer')

                </div>
                <!-- ./ Content body -->

            </div>
            <!-- ./ Content wrapper -->

    </div>
    <!-- ./ Layout wrapper -->

    <!-- Main scripts -->
    <script src="https://baston.laborasyon.com/vendors/bundle.js"></script>

    <!-- Apex chart -->
    <script src="../../../apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="https://baston.laborasyon.com/vendors/charts/apex/apexcharts.min.js"></script>

    <!-- Daterangepicker -->
    <script src="https://baston.laborasyon.com/vendors/datepicker/daterangepicker.js"></script>

    <!-- DataTable -->
    <script src="https://baston.laborasyon.com/vendors/dataTable/datatables.min.js"></script>

    <!-- Dashboard scripts -->
    <script src="https://baston.laborasyon.com/assets/js/examples/pages/ecommerce-dashboard.js"></script>

    <!-- App scripts -->
    <script src="https://baston.laborasyon.com/assets/js/app.min.js"></script>

</body>
</html>
