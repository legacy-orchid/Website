@extends('_includes.blog_post_base')

@section('post::title', 'Запуск веб-сайта')
@section('post::date', '1 Февраля, 2017')
@section('post::image','/assets/img/post/start.jpg')
@section('post::brief', 'Место где, каждый найдёт что то для себя')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
        Для популизирации и совместной написании документации, нами было принято запустить небольшой сайт.
        Мы сделали его спомощью замечательного приложения [Katana](https://github.com/themsaid/katana)

        ![Katana static site & blog generator](http://s14.postimg.org/a1gqg2zs1/katana.jpg)
    @endmarkdown

@stop