@extends('_includes.base')

@section('pageDescription')@yield('post::brief')@endsection

@section('body')


    <div class="container padder-v">
        <div class="row">

            <div class="col-md-3">
                @include('_includes.sidebar')
            </div>

            <div class="col-md-9 panel b box-shadow-lg wrapper-lg">

                <main>
                    @yield('post_body')
                </main>

            </div>
        </div>
    </div>



@stop
