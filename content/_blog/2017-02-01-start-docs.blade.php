@extends('_includes.blog_post_base')

@section('post::title', 'Запуск документации')
@section('post::date', '1 Февраля, 2017')
@section('post::image','/assets/img/post/docs.jpg')
@section('post::brief', 'Начата работа по написанию документации')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
        Каждый сайт должен нести пользу и этот сайт не исключение.
        Он предназначен для публикации документации. Вы можете присоединиться к написанию или внести свои правки через систему git

        `https://github.com/TheOrchid/Website`
    @endmarkdown

@stop