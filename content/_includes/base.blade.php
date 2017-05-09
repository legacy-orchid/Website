<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.rawgit.com/TheOrchid/Platform/master/resources/assets/dist/css/orchid.css">
    <link rel="stylesheet" href="@url('assets/css/app.css')">


    <title>@yield('pageTitle') - {{$siteName}} </title>
    <meta name="description" content="@yield('pageDescription', $pageDescription)">
    <meta name="keywords" content="laravel, laravel cms, laravel platform, laravel cmf, laravel admin panel, php laravel cms, laravel orchid">
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


<header id="header" class="bg-white-only wrapper">
       <nav class="navbar">
        <div class="navbar-header v-center">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <i class="icon-menu"></i>
            </button>
            <a href="/" class="navbar-brand m-r-lg">
                <img src="https://theorchid.github.io/assets/img/orchid.svg" style="
    height: 20px;
">
            </a>
        </div>


        <div class="collapse navbar-collapse m-n w-full" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right  font-thin">
                    {{--
                    <li><a class="scroll" href="#about">About</a></li>
                    <li><a class="scroll" href="#features">Features</a></li>
                    <li><a class="scroll" href="#faq">FAQ</a></li>
                    <li><a class="scroll" href="#contact">Contact us</a></li>
                    --}}


                    <li><a href="https://github.com/TheOrchid/Platform" target="_blank">GitHub</a></li>
                    <li><a href="@url('/docs/screenshot')">Gallery</a></li>
                    <li><a href="@url('/docs/')">Documentation</a></li>
            </ul>
        </div>
       </nav>
</header>

@yield('body')



<footer class="footer text-center b-t bg-white">
    <!--Container-->
    <div class="container ">
        <!--Row-->
        <div class="row m-t-xxl m-b-xxl">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center ">
                <p><a class="logo scroll" href="#hero">
                        <img src="https://theorchid.github.io/assets/img/orchid.svg" style="
    height: 20px;
    margin-bottom: 15px;
">
                    </a>
                </p>
                <small>The application code is published under the MIT license</small>

            </div>
        </div>
        <!--End row-->
    </div>
    <!--End container-->
</footer>





<script src="@url('/assets/js/app.js')"></script>
<script src="https://cdn.rawgit.com/TheOrchid/Platform/0b4993c7/resources/assets/dist/js/orchid.js"></script>

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter42925369 = new Ya.Metrika({ id:42925369, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/42925369" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39757298-4', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html>
