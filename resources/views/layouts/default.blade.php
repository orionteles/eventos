<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Eventos</title>

    <link href="{{ asset('temas/default/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('temas/default/font-awesome/css/all.css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('temas/default/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('temas/default/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

    <link href="{{ asset('temas/default/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

    <link href="{{ asset('temas/default/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

    <!-- Chosen Select -->
    <link href="{{ asset('temas/default/css/plugins/chosen/chosen.css') }}" rel="stylesheet">

    <link href="{{ asset('temas/default/css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">

    <link href="{{ asset('temas/default/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('temas/default/css/style.css') }}" rel="stylesheet">

</head>

<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span>
                            <img alt="image" class="img-circle" src="{{ asset('img/logo1.png') }}" />
                        </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear">
                                <span class="block m-t-xs"> <strong class="font-bold"> </strong></span>
                            </span>
                        </a>
                    </div>
                    <div class="logo-element">
                        <img alt="image" class="img-circle" src="{{ asset('img/logo1_sm.png') }}" />
                    </div>
                </li>
                @include('layouts.menu')
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <div class="navbar-header" style="margin-top: 12px;">
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message"> </span>
                    </li>
                    <li>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Sair
                        </a>
                        <form id="logout-form" action="#" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li>
                        <a class="right-sidebar-toggle">
                            <i class="fa fa-tasks"></i>
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        @hasSection('titulo')
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-12">
                <h2>@yield('titulo')</h2>
            </div>
        </div>
        @endif

        <div class="wrapper wrapper-content animated fadeInRight">
            @yield('conteudo')
        </div>
    </div>
</div>

<!-- Mainly scripts -->
<script src="{{ asset('temas/default/js/jquery-2.1.1.js') }}"></script>
<script src="{{ asset('temas/default/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('temas/default/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('temas/default/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<script src="{{ asset('temas/default/js/plugins/dataTables/datatables.min.js') }}"></script>

<script src="{{ asset('temas/default/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

<!-- Chosen Select -->
<script src="{{ asset('temas/default/js/plugins/chosen/chosen.jquery.js') }}"></script>

<script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>

<!-- Date Picker -->
<script src="{{ asset('temas/default/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('temas/default/js/plugins/datapicker/bootstrap-datepicker.pt-BR.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('temas/default/js/inspinia.js') }}"></script>
<script src="{{ asset('temas/default/js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('js/init.js') }}"></script>

<script>
    $(function(){
        $('#sessao_edicao_id').change(function(){
            $.ajax({
                url: '/edicao/mudar-edicao/' + $(this).val(),
                success: function(){
                    window.location.reload();
                }
            })
        });
    })
</script>

@hasSection('js')
    @yield('js')
@endif

@hasSection('js-ajax')
    @yield('js-ajax')
@endif

</body>
</html>
