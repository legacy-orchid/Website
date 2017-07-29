@extends('_includes.en.base')

@section('pageDescription')@yield('post::brief')@endsection

@section('body')





    <div class="container-fluid bg-white">

        <div class="row">
            <div class="container m-t-md m-b-md">
                <div class="col-sm-10 col-sm-offset-1">

                    <div class="col-md-3 b-r b-light hidden-xs">
                        <nav class="nav-docs">
                            <h4 class="text-orchid font-thin">Get Started</h4>
                            <ul class="toc-links">
                                <li><a href="@url('/en/docs/')">Introduction</a></li>
                                <li><a href="@url('/en/docs/requirements')">Requirements</a></li>
                                <li><a href="@url('/en/docs/installation')">Installation</a></li>
                                <li><a href="@url('/en/docs/contributors')">Guidelines</a></li>
                                <li><a href="@url('/en/docs/license')">License</a></li>
                            </ul>

                            <h4 class="text-orchid font-thin">Content</h4>
                            <ul class="toc-links">
                                <li><a href="@url('/en/docs/post')">Post</a></li>
                                <li><a href="@url('/en/docs/behaviors')">Behaviors</a></li>
                                <li><a href="@url('/en/docs/tags')">Tags</a></li>
                            </ul>

                            <h4 class="text-orchid font-thin">Control Panel</h4>
                            <ul class="toc-links">
                                <li><a href="@url('/en/docs/form')">Form</a></li>
                                <li><a href="@url('/en/docs/field')">Field</a></li>
                                <li><a href="@url('/en/docs/menu')">Menu</a></li>
                                <li><a href="@url('/en/docs/settings')">Settings</a></li>
                            </ul>

                            <h4 class="text-orchid font-thin">Other Things</h4>
                            <ul class="toc-links">
                                <li><a href="@url('/en/docs/active')">Active</a></li>
                                <li><a href="@url('/en/docs/alert')">Alert</a></li>
                                <li><a href="@url('/en/docs/widget')">Widget</a></li>
                                <li><a href="@url('/en/docs/access')">Permissions</a></li>
                            </ul>

                            <h4 class="text-orchid font-thin">Service</h4>
                            <ul class="toc-links">
                                <li><a href="@url('/en/docs/backups')">Backups</a></li>
                                <li><a href="@url('/en/docs/defender')">Defender</a></li>
                                <li><a href="@url('/en/docs/logs')">Logs</a></li>
                                <li><a href="@url('/en/docs/monitor')">Monitor</a></li>
                            </ul>


                            <h4 class="text-orchid font-thin">Packages</h4>
                            <ul class="toc-links">
                                <li><a href="@url('/en/docs/socket')">Socket</a></li>
                            </ul>
                        </nav>

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
