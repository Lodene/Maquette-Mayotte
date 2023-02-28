<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/css/themes/lite-purple.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/vendor/perfect-scrollbar.css') }}">
</head>

<body>
<div class="app-admin-wrap">
    <div class="main-header">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>



        <div class="d-flex align-items-center">
            <!-- Mega menu -->
            <div id="titre-application">

                <div class="app-title test"> Audit</div>


            </div>

        </div>

        <div style="margin: auto"></div>



    </div>


    <!--=============== Left side End ================-->

    <!-- ============ Body content start ============= -->
    <div class="main-content-wrap sidenav-open d-flex flex-column">

        <div class="separator-breadcrumb border-top"></div>

    @yield('content')



    <!-- Footer Start -->
        <div class="flex-grow-1"></div>
        <div class="app-footer">
            <div class="row">
                <div class="col-md-9">
                    <p><strong>{{ env('APP_NAME') }} &copy; {{ date('Y') }} Algoé Consultants</strong></p>

                </div>
            </div>

        </div>
        <!-- fotter end -->
    </div>
    <!-- ============ Body content End ============= -->
</div>
<!--=============== End app-admin-wrap ================-->



<script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/vendor/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/vendor/echarts.min.js') }}"></script>

<script src="{{ asset('js/es5/echart.options.min.js') }}"></script>
<script src="{{ asset('js/es5/dashboard.v3.script.min.js') }}"></script>
<script src="{{ asset('js/es5/script.min.js') }}"></script>
</body>

</html>
