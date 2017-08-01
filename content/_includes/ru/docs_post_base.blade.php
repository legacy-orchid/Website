@extends('_includes.ru.base')

@section('pageDescription')@yield('post::brief')@endsection

@section('body')






    <div class="container-fluid bg-white">

        <div class="row">
            <div class="container m-t-md m-b-md">
                <div class="col-sm-10 col-sm-offset-1">

                    <div class="col-md-3 b-r b-light hidden-xs">

                        <nav class="nav-docs">
                            <h4 class="text-orchid font-thin">C чего начать</h4>
                            <ul class="toc-links">
                                <li><a href="@url('/ru/docs/')">Введение</a></li>
                                <li><a href="@url('/ru/docs/requirements')">Требования</a></li>
                                <li><a href="@url('/ru/docs/installation')">Установка</a></li>
                                <li><a href="@url('/ru/docs/contributors')">Рекомендации</a></li>
                                <li><a href="@url('/ru/docs/license')">Лицензия</a></li>
                            </ul>

                            <h4 class="text-orchid font-thin">Основаное</h4>
                            <ul class="toc-links">
                                <li><a href="@url('/ru/docs/post')">Записи</a></li>
                                <li><a href="@url('/ru/docs/behaviors')">Поведения</a></li>
                                <li><a href="@url('/ru/docs/filters')">Фильтры</a></li>
                                <li><a href="@url('/ru/docs/tags')">Теги</a></li>
                            </ul>

                            <h4 class="text-orchid font-thin">Панель управления</h4>
                            <ul class="toc-links">
                                <li><a href="@url('/ru/docs/form')">Формы</a></li>
                                <li><a href="@url('/ru/docs/field')">Поля</a></li>
                                <li><a href="@url('/ru/docs/menu')">Меню</a></li>
                                <li><a href="@url('/ru/docs/settings')">Настройки</a></li>
                            </ul>

                            <h4 class="text-orchid font-thin">Другие вещи</h4>
                            <ul class="toc-links">
                                <li><a href="@url('/ru/docs/active')">Активные ссылки</a></li>
                                <li><a href="@url('/ru/docs/alert')">Уведомления</a></li>
                                <li><a href="@url('/ru/docs/widget')">Виджеты</a></li>
                                <li><a href="@url('/ru/docs/access')">Права доступа</a></li>
                            </ul>

                            <h4 class="text-orchid font-thin">Сервисы</h4>
                            <ul class="toc-links">
                                <li><a href="@url('/ru/docs/backups')">Резервные копии</a></li>
                                <li><a href="@url('/ru/docs/defender')">Защитник</a></li>
                                <li><a href="@url('/ru/docs/logs')">Журналирование</a></li>
                                <li><a href="@url('/ru/docs/monitor')">Монитор</a></li>
                            </ul>


                            <h4 class="text-orchid font-thin">Пакеты</h4>
                            <ul class="toc-links">
                                <li><a href="@url('/ru/docs/socket')">Веб сокет</a></li>
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
