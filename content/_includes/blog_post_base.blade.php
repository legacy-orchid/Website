@extends('_includes.base')

@section('pageDescription')@yield('post::brief')@endsection

@section('body')


    <div class="container padder-v">
        <div class="row">

            <div class="col-md-3">
                @include('_includes.sidebar')
            </div>

            <div class="col-md-9 panel b box-shadow-lg wrapper-lg">
                <div class="page-header">
                    <h1>@yield('post::title')</h1>
                    <small>@yield('post::date')</small>
                </div>

                <main>
                    @yield('post_body')
                </main>

                <a href="@url('blog')">Вернуться в блог</a>
            </div>
        </div>
    </div>



@stop
