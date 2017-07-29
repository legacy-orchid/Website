@extends('_includes.ru.base')

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
">Создавайте гибкие веб-сайты</h1>
                        <p class="lead">Создай свой сайт на Orchid используя всю мощь Laravel
                        </p>

                        <div class="btn-group btn-group-lg btn-group-justified m-t-lg">
                            <a href="https://github.com/TheOrchid/Platform" target="_blank" class="btn">
                                <i class="icon-social-github"></i> Скачать</a>
                        </div>

                    </div>
                </div>
            </div>



            <div class="row m-b-xxl">
                <div class="col-md-8 col-md-offset-2">
                    <div class="block-media m-t-lg m-b-lg page">
                        <div class="b box-shadow-lg">
                            <a href="https://www.youtube.com/watch?v=e9B5eVw7yss"
                               target="_blank"><img src="/assets/img/index.png" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>



        <div class="bg-white b-t">
        <div class="container m-b-lg">
            <div class="row m-t-xxl m-b-lg">
                        <div class="col-md-12 col-sm-12 col-xs-12"><p class="h2 text-black font-thin">Спонсоры</p>
                            <p class="text-muted">
                                Компании, которые нас поддерживают
                            </p>
                        </div>
            </div>

            <div class="row m-b-xxl v-center">
                        <div class="col-sm-3">
                            <a href="https://m.do.co/c/16c90d96a00c"
                               target="_blank"><img src="/assets/img/sponsors/do.png" class="img-responsive"></a>
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
                    <h1 class="h2 text-black font-thin">Часто задаваемые вопросы</h1>
                </div>
                <div class="col-md-12  m-t-md ">
                    <div class="block-faq m-b-lg">
                        <h4 class="m-b-md text-black">Что такое Orchid?</h4>
                        <p style="line-height: 25px;">
                            Orchid - это пакет для Laravel, который помогает при администрировании приложения,
                            предоставляя только хороший набор инструментов, который будет востребован практически в каждом проекте.
                        </p>
                    </div>
                    <div class="block-faq  m-b-lg">
                        <h4 class="m-b-md text-black">Нужно ли использовать встроенные записи?</h4>
                        <p style="line-height: 25px;">
                            Мы предполагаем, что большинство ваших записей будут сохранены в json, что позволит вам сделать перевод и универсальную структуру,
                            но если есть жёсткие условия то, вы можете использовать классический CRUD самостоятельно , Orchid не остановит вас.
                        </p>
                    </div>
                    <div class="block-faq  m-b-lg">
                        <h4 class="m-b-md text-black">Существуют дополнительные системные требования?</h4>
                        <p style="line-height: 25px;">Да, вам нужно расширение PHP для обработки изображений и поддержка json-типа выбранной базы данных.</p>
                    </div>

                    <div class="block-faq  m-b-lg">
                        <h4 class="m-b-md text-black">Сколько это стоит?</h4>
                        <p style="line-height: 25px;">Orchid бесплатна, но мы ценим пожертвования.</p>
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
                    <h2 class="title font-thin text-black">Сделать вклад</h2>
                    <p class="lead large not-mb">
                      Я призываю всех внести свой вклад в проект Orchid. <br>Вы можете найти последнюю версию кода GitHub на странице
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
