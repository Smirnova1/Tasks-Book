<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include ('layouts._head')

<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <form action="{{url('task', [$task->id])}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$task->id}}" name="id">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Имя:</label>
                            <input required
                                   type="name"
                                   value="{{$task->name}}"
                                   name="name"
                                   class="form-control"
                                   id="exampleFormControlInput1"
                                   disabled="disabled">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Электронный адрес:</label>
                            <input required
                                   type="email"
                                   value="{{$task->email}}"
                                   class="form-control"
                                   name="email"
                                   id="exampleFormControlInput1"
                                   disabled="disabled">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Статус задачи:</label>
                            <select required
                                    class="form-control"
                                    name="status"
                                    id="exampleFormControlSelect1">
                                @foreach($statuses as $status)
                                    <option>{{$status->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Описание задачи:</label>
                            <textarea required
                                      name="task"
                                      class="form-control"
                                      id="exampleFormControlTextarea1" rows="3">{{$task->task}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                        <a href="/task">
                            <button type="button" class="btn btn-light">Назад</button>
                        </a>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
