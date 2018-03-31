<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <script type="text/javascript" src="{{ url('js/app.js') }}"></script>
</head>

<body class='md-skin fixed-sidebar fixed-nav'>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side ng-scope" role="navigation">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
                @section('sidebar')
                @show
                <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 0px; position: absolute; top: 20px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 45.5276px;"></div>
                <div class="slimScrollRail" style="width: 0px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg">
            <nav class="navbar navbar-fixed-top">
                <div class="navbar-header">
                    <span minimaliza-sidebar=""><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="" ng-click="minimalize()"><i class="fa fa-bars"></i></a></span>
                    <form role="search" class="navbar-form-custom ng-pristine ng-valid" method="post" action="views/search_results.html">
                        <div class="form-group"></div>
                    </form>
                </div>
                <ul class='nav navbar-top-links navbar-right'>
                    <li>
                        <a href="">
                            <i class="fa fa-sign-out"></i> Desconectarse
                        </a>
                    </li>
                </ul>
            </nav>
            @section('content')
            @show
        </div>
    </div>
    <!-- Toastr messages-->
    <script type="text/javascript">
        @if (session('successful_message'))
            toastr.success("{{ session('successful_message') }}", null, {"positionClass": "toast-bottom-right"});
        @endif

        @if (session('danger_message'))
            toastr.error("{{ session('danger_message') }}", null, {"positionClass": "toast-bottom-right"});
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}", null, {"positionClass": "toast-bottom-right"});
            @endforeach
        @endif
        
    </script>
    <!--Toastr messages-->
    @yield('javascript')
</body>

</html>