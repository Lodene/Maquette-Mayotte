<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') • {{ env('APP_NAME') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="csrf-token"content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('styles/css/themes/lite-purple.css') }}" media="all">

    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png"/>
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
 
<script type="text/javascript" src="DataTables/datatables.min.js"></script>

    <link rel="stylesheet" href="{{ asset('styles/libs/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/libs/pickadate/classic.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/libs/pickadate/classic.date.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/libs/datatables.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('styles/libs/toastr.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('styles/css/app.css') }}" media="all">
    <link rel="stylesheet" href="{{ asset('styles/libs/fontawesome.css') }}" crossorigin="anonymous" media="all">

    <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
    <!-- Chosen Jquery -->
    <link href="{{ asset('styles/css/chosen.min.css') }}" rel="stylesheet">

    <style>
        .select2-container--default {
            width:200px !important;
            text-align:center;
            display:block;
        }
        body {
            overflow:visible !important;
        }
        .pj .dataTables_wrapper {
            padding:0 !important;
        }
    </style>

    @stack('styles')
</head>

<body style="background-color:#fbfcfc;">
<div class="app-admin-wrap">
    <div class="main-header row ml-2 fixed-top" style="background-color:#fbfcfc !important;">
        <div>
            <button id="modalAide" target="_blank" style="color:#1d3d74;" class="btn btn-dark mt-4">
                <i title="Demande de support" class="fa fa fa-question"></i>
            </button>
        </div>
        <div class="menu-toggle">
            <button title="Basculer le menu" style="color:#1d3d74;" class="btn btn-primary mt-4 ml-2"><i class="fa fa fa-bars"></i></button>
        </div>
        <div class="logo ml-5">
            <a href="#" title="Retour à l'accueil">
                <h1 style="font-size: 30px; width: 400px; margin-bottom: 0;">Rectorat Mayotte - </h1>
                <h1 style="font-size: 30px; width: 400px">pôle immobilier et logistique</h1>
            </a>
        </div>
        <h1 class="mt-4 reduceMobile" style="margin-left: 300px">{{ env('APP_NAME') }}</h1>
        <p style="color:#1d3d74; right:30px; top:10px; text-align:center;" class="position-absolute mt-4 pseudoHidden">
            <span class="hiddenMobile">Connecté en tant que</span>
            {{-- <strong>{{ auth()->user()->name }}</strong> --}}
            <br>
            <small>
                {{-- {{ auth()->user()->roles()->pluck('name')->implode(', ') }} --}}
            </small>
        </p>
    </div>

    @include('layouts.menu')
    <!--=============== Left side End ================-->

    <!-- ============ Body content start ============= -->
    <div class="main-content-wrap sidenav-open d-flex flex-column">

        @include('layouts.session-message')

        @yield('content')

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
<script src="{{ asset('js/sweetalert.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap-maxlength.js') }}"></script>
<script src="{{ asset('js/datatables.min.js') }}" type="text/javascript"></script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.19/sorting/date-uk.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset( 'js/libs/toastr.min.js') }}"></script>
<script src="{{ asset( 'js/libs/moment.min.js') }}"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.20/sorting/datetime-moment.js"></script>

<script src="/js/popper/popper.min.js"></script>
<script src="/js/tippy/tippy-bundle.umd.js"></script>

<!-- Chosen Jquery -->
<script src="{{ asset('js/chosen.jquery.min.js') }}"></script>

<script>
    $(document).ready(function(){
        $('.maxlength').maxlength(  { alwaysShow: true } );
        $('.selectpicker').select2({
            closeOnSelect: false
        });
        tippy('.description', {
            content: '[...]'
        });
        if (location.hash) {
            $("a[href='" + location.hash + "']").tab("show");
        }
        $(document.body).on("click", "a[data-toggle='tab']", function(event) {
            location.hash = this.getAttribute("href");
        });
        getMoment();
        $('#modalAide').on('click', function() {
            $('.support_btn').on('click', function() {
                window.open('mailto:support@isdea.fr?subject='. env('APP_NAME'), '_blank').focus();
            })
            swal({
                title: "Demande d'aide",
                text: "Une question ou une anomalie à signaler ?",
                icon: "info",
                button: 'Contacter le support par email',
                // dangerMode: true,
            }).then((willDelete) => {
                if (willDelete)  {
                    window.open('mailto:support@isdea.fr?subject='. env('APP_NAME'), '_blank').focus();
                } else {
                    //window.open('/manuel_utilisateur.pdf', '_blank').focus();
                }
            });
        })
    });

    function getMoment() {
        $.each($('.momentJs'), function(index, value) {
            if(!$(value).html().includes("("))
                $(value).html(moment($(value).html()).format('DD/MM/Y'));
        });
    }

    function getMomentTable(el) {
        el.find('.momentJs').each(function(index, value) {
            if(!$(value).html().includes("("))
                $(value).html("<p>" + moment($(value).html()).format('DD/MM/Y') + "</p>");
        });
        el.find('.momentJsHour').each(function(index, value) {
            if(!$(value).html().includes("("))
                $(value).html("<p>" + moment($(value).html()).format('HH:mm') + "</p>");
        });
    }
</script>

@stack('scripts')

</body>

</html>
