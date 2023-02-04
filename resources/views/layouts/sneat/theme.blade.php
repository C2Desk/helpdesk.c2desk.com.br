@include('layouts/sneat/header')

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts/sneat/sidebar')

            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts/sneat/navbar')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    @yield('content')
                    <!-- / Content -->
                    @include('layouts/sneat/footer')