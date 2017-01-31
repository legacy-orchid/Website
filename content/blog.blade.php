@extends('_includes.base')

@section('pageTitle', '- Blog')

@section('body')



    <div class="container-fluid">

        <div class="row  bg-white">
            <div class="container m-t-xl m-b-xl">
                <div class="row">

                    <div class="col-md-3">
                        @include('_includes.sidebar')
                    </div>

                    <div class="col-md-9 b-l b-light wrapper-lg">

                        @foreach($paginatedBlogPosts as $post)

                            <article class="padder-v">
                                <div class="panel panel-default box-shadow-lg">

                                    <div>
                                        <a href="@url($post->path)"><img src="{{ $post->image }}"
                                                                         class="img-responsive"></a>
                                    </div>

                                    <div class="wrapper-md">
                                        <p class="h4 m-b-xs"><a href="@url($post->path)">{{ $post->title }}</a></p>
                                        <p class="text-xs">
                                            {{$post->brief}}
                                        </p>
                                        <div class="line line-lg b-b b-light"></div>
                                        <p class="text-right">
                                            <time class="small text-muted font-thin">{{$post->date}}</time>
                                        </p>
                                    </div>
                                </div>
                            </article>


                        @endforeach
                            @include('_includes.blog_paginator')

                    </div>
                </div>
            </div>
        </div>
    </div>









@stop