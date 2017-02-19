@extends('_includes.base')

@section('body')




    <section class="container-fluid">

        <div class="row b-b box-shadow bg-white">

            <div class="container">

                <div class="row">

                    <div class="col-md-6">


                        <div class="page-header">
                            <p class="h1 l-h-1x text-dark font-thin">Основа твоего проекта</p>
                        </div>

                        <p class="h1 l-h-1x m-t-md padder-v ">
                            <small>
                                Мы хотим подарить мощную и гибкую платформу способную<br> на решение не стандартных задач
                            </small>
                        </p>


                    </div>

                    <div class="col-md-6">

                        <div class='pageOption pull-right'>
                            <div class='option'>
                                <img src='@url('assets/img/main.jpeg')'>
                            </div>
                        </div>
                    </div>



                </div>
            </div>




        </div>

    </section>





    <section class="container-fluid">

        <div class="row  bg-white">
    <div class="container m-t-xxl m-b-xxl">

        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-4 col-md-offset-2 wrapper-md">
                        <div class="panel panel-default b-light box-shadow">
                            <div class="panel-hover">
                                <a href="@url('docs')" class="block wrapper-lg">
                                    <div class="panel-hover-title b-b">
                                        <p class="h4">Документация</p>
                                    </div>
                                    <div class="panel-hover-body">
                                        Мы собрали подробную документацию и постоянно дополняем её новыми материалами
                                    </div>
                                    <div class="panel-hover-icon">
                                        <i class="icon-book-open"></i>
                                    </div>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wrapper-md">
                        <div class="panel panel-default b-light box-shadow">
                            <div class="panel-hover">
                                <a href="https://github.com/TheOrchid/Platform" target="_blank" class="block wrapper-lg">
                                    <div class="panel-hover-title b-b">
                                        <p class="h4">GitHub</p>
                                    </div>
                                    <div class="panel-hover-body">
                                        Код проекта публикуется под свободной лицензией MIT
                                        и доступен на сервисе github.com
                                    </div>
                                    <div class="panel-hover-icon">
                                        <i class="icon-social-github"></i>
                                    </div>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
        </div>
    </section>







    <section class="container-fluid bg-white b-t box-shadow-lg">

        <div class="container">


            <div class="row padder-v v-center">
                <div class="col-md-6 col-xs-12">
                    <p class="h3 font-thin">Последние <span class="text-orchid">Новости</span></p>
                </div>
                <div class="col-md-6 text-right hidden-xs">
                    <a href="@url('blog')" class="text-center h5  btn-more font-thin"><span
                                class="text-muted">Смотреть все</span>
                    </a>
                </div>

            </div>

            <div class="row">
                @foreach($blogPosts as $key => $blogPost)

                    @if($key < 2)
                        <article class="col-md-6 col-md-12 padder-v">
                            <div class="panel panel-default box-shadow-lg">

                                <div>
                                    <a href="@url($blogPost->path)"><img src="{{ $blogPost->image }}"
                                                                         class="img-responsive"></a>
                                </div>

                                <div class="wrapper-md">
                                    <p class="h4 m-b-xs"><a href="@url($blogPost->path)">{{ $blogPost->title }}</a></p>
                                    <p class="text-xs">
                                        {{$blogPost->brief}}
                                    </p>
                                    <div class="line line-lg b-b b-light"></div>
                                    <p class="text-right">
                                        <time class="small text-muted font-thin">{{$blogPost->date}}</time>
                                    </p>
                                </div>
                            </div>
                        </article>
                    @endif
                @endforeach
            </div>

        </div>

    </section>


@stop