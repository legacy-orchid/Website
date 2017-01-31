@extends('_includes.base')

@section('pageDescription')@yield('post::brief')@endsection

@section('body')


    <div class="container-fluid">

        <div class="row  bg-white">
            <div class="container m-t-xl m-b-xl">
                <div class="row">

                    <div class="col-md-3">
                        @include('_includes.sidebar')
                    </div>

                    <div class="col-md-9 b-l b-light wrapper-lg">

                        <main>
                            <div class="page-header">
                                <h1>@yield('post::title')</h1>
                                <small>@yield('post::date')</small>
                            </div>

                            @yield('post_body')
                        </main>

                        <p class="padder-v b-t b-light"><a href="@url('blog')">  <i class="icon-arrow-left" aria-hidden="true"></i> Вернуться в блог</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
