<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/css/themes/lite-purple.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/libs/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/css/app.css') }}">
</head>

<body>
<div class="app-admin-wrap">
    <div class="main-header">




        <div class="d-flex align-items-center">

            <div class="logo">
                <a href="#" title="Retour à l'accueil">
                    <img src="{{ asset('images/logo.png') }}" class="logo-img" alt="">
                </a>
            </div>
            <!-- Mega menu -->
            <div id="titre-application">

                <div class="app-title"><a href="#"   title="Retour à l'accueil" style="color:#000 !important;">{{ env('APP_NAME') }}</a></div>


            </div>

        </div>

        <div style="margin: auto"></div>

        <div class="header-part-right">

        </div>

    </div>


    <!--=============== Left side End ================-->

    <!-- ============ Body content start ============= -->
    <div class="main-content-wrap sidenav-open d-flex flex-column login">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
    @endif
    @if ($errors->any())
        {!!  implode('', $errors->all('<div class="alert alert-danger">:message</div>'))  !!}
    @endif

    @yield('content')



    <!-- Footer Start -->
        <div class="flex-grow-1">
        </div>
        <div class="app-footer">
            <div class="row">
                <div class="col-md-9">

                </div>
            </div>

        </div>
        <!-- fotter end -->
    </div>
    <!-- ============ Body content End ============= -->
</div>
<!--=============== End app-admin-wrap ================-->



<script src="{{ asset('js/libs/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/libs/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/libs/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/libs/echarts.min.js') }}"></script>
<script src="{{ asset('js/es5/echart.options.min.js') }}"></script>
<script src="{{ asset('js/libs/pickadate/picker.js') }}"></script>
<script src="{{ asset('js/libs/pickadate/picker.date.js') }}"></script>
<script src="{{ asset('js/es5/dashboard.v3.script.min.js') }}"></script>
<script src="{{ asset('js/es5/script.min.js') }}"></script>

@stack('scripts')

</body>

</html>
