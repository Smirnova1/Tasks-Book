<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include ('layouts._head')

<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="jumbotron">
                <h3>Все задачи</h3>
                <hr class="my-4">
                <div class="lead">
                    <a class="btn btn-primary" href="/task/create" role="button">
                        Новая задача
                    </a>
                    <a class="btn btn-primary" href="/" role="button">
                        Главное меню
                    </a>
                </div>
                <hr class="my-4">
                <div>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>@sortablelink('name', 'Сортировать по имени')</td>
                            <td>@sortablelink('email', 'Сортировать по почте')</td>
                            <td>
                                <select onchange="window.location.href = this.value">
                                    <option disabled selected>Cтатус</option>
                                    <option value="?status=new">new</option>
                                    <option value="?status=progress">progress</option>
                                    <option value="?status=review">review</option>
                                    <option value="?status=testing">testing</option>
                                    <option value="?status=feedback">feedback</option>
                                    <option value="?status=passed">passed</option>
                                    <option value="/task">Все задачи</option>
                                </select></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="my-4">
                <div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($tasks as $task)
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <b>Имя:</b> {{$task->name}}
                                <br>
                                <b>E-mail:</b> {{$task->email}}
                            </div>
                            <div class="card-body">
                                <img src="{{url('storage/'.$task->images)}}" alt="pictures" class="size">
                                <p class="card-text"><b>Статус:</b>{{$task->status}}</p>
                                <p class="card-text"><b>Задача:</b> {{$task->task}}</p>
                                @if($task->status == 'passed')
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked
                                               disabled="disabled">
                                        <label class="custom-control-label" for="customCheck1">Выполнено</label>
                                    </div>
                                @else
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1"
                                               disabled="disabled">
                                        <label class="custom-control-label" for="customCheck1">Выполнено</label>
                                    </div>
                                @endif
                                @if (Auth::check() && Auth::user()->role_id == 1)
                                    <a href="{{ URL::to('task/' . $task->id . '/edit') }}">
                                        <button type="button" class="btn btn-outline-primary">Редактировать</button>
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    <br>
                    <div>{{$tasks->appends(\Request::except('page'))->render()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
