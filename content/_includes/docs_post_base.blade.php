@extends('_includes.base')

@section('pageDescription')@yield('post::brief')@endsection

@section('body')

    <div class="container-fluid bg-white">

        <div class="row">
            <div class="container m-t-md m-b-md">
                <div class="col-sm-10 col-sm-offset-1">

                    <div class="col-md-3 b-r b-light hidden-xs">
                        @include('_includes.sidebar')
                    </div>

                    <div class="col-md-9 col-xs-12 wrapper-lg">

                        <main>
                            @yield('post_body')
                        </main>

                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
