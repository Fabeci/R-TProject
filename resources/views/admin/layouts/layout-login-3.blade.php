<!DOCTYPE html>
<html>
<head>
    <title>Laraspace - Laravel Admin</title>
    <link href="{{ mix('/assets/admin/css/laraspace.css') }}" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('admin.layouts.partials.favicons')
</head>
<body class="login-page skin-tyrell login-3 ">

    <div id="app" class="site-wrapper">
        <div class="login-box">
            <div class="box-wrapper">
                @include('admin.layouts.partials.laraspace-notifs')
                <div class="logo-main">
                    <h1>R-TPROJECT</h1>
                    <!--<a href="/"><img src="/assets/admin/img/logo-login.png" alt="Laraspace Logo"></a>-->
                </div>
                @yield('content')
                <div class="page-copyright">
                    <p>Développer par Djerabe Fabrice et Mavoungou Amice. Nous contacter sur <a href="http://developpeurs.com" target="_blank"> Developpeur.com</a></p>
                    <p>r-tproject © {{ date('Y') }}</p>
                </div>
            </div>
        </div>
        <div class="content-box">
            <h1><b>R-TPROJECT </b> gère vos projets <br>
            </h1>
        </div>
    </div>

<script src="{{mix('/assets/admin/js/core/plugins.js')}}"></script>
<script src="{{mix('/assets/admin/js/core/app.js')}}"></script>
@yield('scripts')
</body>
</html>
