<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="description" content="@yield('pageDescription', $siteDescription)">
    <link rel="stylesheet" href="@url('assets/css/app.css')">
    <title>{{$siteName}} @yield('pageTitle')</title>
    <meta name="keywords" content="laravel, laravel cms, laravel platform, laravel cmf, laravel crm, php laravel cms, laravel orchid">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ac5ca0">
    <meta name="theme-color" content="#ffffff">

</head>


<body>


<header id="header" class="navbar bg-white-only box-shadow-lg">
    <div class="container">
        <div class="navbar-header">
            <a href="@url('/')" class="brand navbar-brand">
                <img src="@url('assets/img/orchid.svg')" width="150px">
            </a>
        </div>
    </div>
</header>


@yield('body')


<footer id="footer">
    <div class="bg-white b-t">
        <div class="container padder-v">


            <div class="row">

                <div class="col-md-6 col-md-offset-6">
                    <div class="pull-right text-right">
                        <span class="text-md block">The Orchid</span>
                        <small>Код приложения опубликован под лицензией MIT</small>
                    </div>
                </div>
            </div>


        </div>
    </div>
</footer>



<script src="@url('/assets/js/app.js')"></script>



<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter42925369 = new Ya.Metrika({ id:42925369, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/42925369" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</body>
</html>
