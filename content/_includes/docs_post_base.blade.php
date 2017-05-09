@extends('_includes.base')

@section('pageDescription')@yield('post::brief')@endsection

@section('body')

    <div class="container-fluid bg-white">

        <div class="row m-t-xxl m-b-xxl">
            <div class="container m-t-xl m-b-xl">
                <div class="col-sm-10 col-sm-offset-1">

                    <div class="col-md-3">
                        @include('_includes.sidebar')
                    </div>

                    <div class="col-md-9 b-l b-light wrapper-lg">

                        <main>
                            @yield('post_body')
                        </main>

                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
