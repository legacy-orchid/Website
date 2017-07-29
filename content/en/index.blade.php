@extends('_includes.en.base')

@section('pageTitle','Orchid - Laravel admin panel')
@section('pageDescription','Laravel Platform application provides a very flexible and extensible way of building your custom application')

@section('body')



<div id="content" class="bg-white-only">

    <div class="bg-white-only">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <div class="m-t-xxl  padder-v">
                        <h1 class="font-thin m-t-n l-h-1x padder-v text-black" style="font-size: 56px;
">Creating very flexible <br> Web sites using Orchid</h1>
                        <p class="lead">Create your website on Orchid and using the full power of Laravel
                        </p>

                        <div class="btn-group btn-group-lg btn-group-justified m-t-lg">
                            <a href="https://github.com/TheOrchid/Platform" target="_blank" class="btn">
                                <i class="icon-social-github"></i> Download</a>
                        </div>

                    </div>
                </div>
            </div>



            <div class="row m-b-xxl">
                <div class="col-md-8 col-md-offset-2">
                    <div class="block-media m-t-lg m-b-lg page">
                        <div class="b box-shadow-lg">
                            <a href="https://www.youtube.com/watch?v=e9B5eVw7yss" target="_blank"><img src="/assets/img/index.png" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>




    <div class="bg-white b-t">
        <div class="container m-b-lg">
            <div class="row m-t-xxl m-b-lg">
                        <div class="col-md-12 col-sm-12 col-xs-12"><p class="h2 text-black font-thin">Sponsors</p>
                            <p class="text-muted">
                                Companies that support us
                            </p>
                        </div>
            </div>

            <div class="row m-b-xxl v-center">
                        <div class="col-sm-3">
                            <a href="https://m.do.co/c/16c90d96a00c" target="_blank"><img src="/assets/img/sponsors/do.png" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-3">
                            <a href="https://www.jetbrains.com/phpstorm/"
                               target="_blank"><img src="/assets/img/sponsors/JetBrains.png" class="img-responsive"></a>
                        </div>
            </div>

        </div>
    </div>



    <section id="features" class="features b-t" style="background: #fafafa">
        <!--Container-->
        <div class="container m-t-xxl">
            <!--Row-->
            <div class="row vertical-align v-center m-t-xxl m-b-xxl">
                <div class="hidden-xs col-md-5 col-sm-5 m-b-xxl">
                    <div class="block-shot b box-shadow-lg">
                        <img src="/assets/img/monitor.png" class="img-responsive" alt="" style="
height: 600px;
    object-fit: none;
    object-position: top left;
">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-md-offset-1 col-sm-8 col-sm-offset-1  m-b-xxl">

                <div class="col-md-12">
                    <h1 class="h2 text-black font-thin">Some frequently asked <br> questions for you</h1>
                </div>
                <div class="col-md-12  m-t-md ">
                    <div class="block-faq m-b-lg">
                        <h4 class="m-b-md text-black">What is Orchid?</h4>
                        <p style="line-height: 25px;">Orchid is a package for Laravel which helps with the administration of the application on Laravel, allowing you to write code as you want, control of routing/themes/plugins/etc - none of this and will not be! The package only gives a good set of tools that will be in demand in almost every project.</p>
                    </div>
                    <div class="block-faq  m-b-lg">
                        <h4 class="m-b-md text-black">Is it necessary to use the built-in recordings?</h4>
                        <p style="line-height: 25px;">We assume that most of your records will be stored in json, which will allow you to do the translation and the universal structure, but if the rails have goals like a CRM system with harsh conditions, then of course you can use the classic CRUD yourself, orchids will not stop you.</p>
                    </div>
                    <div class="block-faq  m-b-lg">
                        <h4 class="m-b-md text-black">Are there any additional system requirements from Laravel?</h4>
                        <p style="line-height: 25px;">Yes, you need a PHP extension for image processing and support for json type your database.</p>
                    </div>

                    <div class="block-faq  m-b-lg">
                        <h4 class="m-b-md text-black">How much does it cost?</h4>
                        <p style="line-height: 25px;">Orchid is free, but we appreciate donations.</p>
                    </div>
                </div>

                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </section>



    <section id="contact" class="socials text-center b-t">
        <!--Container-->
        <div class="container">
            <!--Row-->
            <div class="row m-t-xxl m-b-xxl">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                    <h2 class="title font-thin text-black">Make a contribution</h2>
                    <p class="lead large not-mb">
                        I encourage everyone to contribute to the Orchid project. You can find the latest version of the GitHub code at
                        <a class="blue-link" href="https://github.com/TheOrchid/Platform" target="_blank">https://github.com/TheOrchid/Platform</a>.
                    </p>
                </div>
            </div>
            <!--End row-->
        </div>
        <!--End container-->
    </section>


</div>


@stop
