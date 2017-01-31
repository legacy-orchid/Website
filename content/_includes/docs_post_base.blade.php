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
                            @yield('post_body')
                        </main>

                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
