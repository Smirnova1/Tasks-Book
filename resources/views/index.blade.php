<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include ('layouts._head')

<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="jumbotron">
                <h1 class="display-4">Задачник</h1>
                <hr class="my-4">
                <p class="lead">
                    @if (Auth::guest())
                        <a class="btn btn-primary btn-lg" href="/login" role="button">Вход</a>
                    @endif

                    <a class="btn btn-primary btn-lg" href="/task/create" role="button">
                        Новая задача
                    </a>
                    <a class="btn btn-primary btn-lg" href="/task" role="button">Все задачи</a>

                    @if(Auth::check())
                        <a class="btn btn-primary btn-lg"
                           role="button"
                           href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"> Выход </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
