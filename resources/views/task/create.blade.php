<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include ('layouts._head')

<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="jumbotron">
                <h1>Новая задача</h1>
                <hr class="my-4">
                <div class="lead">
                    @if (session('status'))
                        <div class="alert alert-info">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/task" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Имя:</label>
                            <input required
                                   type="name"
                                   name="name"
                                   class="form-control"
                                   id="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Электронный адрес:</label>
                            <input required
                                   type="email"
                                   class="form-control"
                                   name="email"
                                   id="email" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Статус задачи:</label>
                            <select required
                                    class="form-control"
                                    name="status"
                                    id="status">
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
                                      id="task" rows="3"></textarea>
                        </div>
                        <div class="form-group">

                            <label for="exampleFormControlFile1">Добавить изображение:</label>
                            <p>Укажите изображение в формате JPG, PNG или GIF</p>
                            <input type="file"
                                   name="file"
                                   class="form-control-file"
                                   id="exampleFormControlFile1"
                                   onchange="previewFile()">
                        </div>
                        <a href="#prev">
                            <button type="button" class="btn btn-primary" onclick="valueImput()">
                                Предварительный просмотр
                            </button>
                        </a>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </form>
                    <a href="/">
                        Вернуться в главное меню
                    </a>
                </div>
                @include('preview')
            </div>
        </div>
    </div>
</div>
<script>
    function previewFile() {
        var preview = document.querySelector('img');
        var file = document.querySelector('input[type=file]').files[0];
        var reader = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }

    function valueImput() {
        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let status = document.getElementById("status").value;
        let task = document.getElementById("task").value;

        document.getElementById("prevName").innerHTML = name;
        document.getElementById("prevEmail").innerHTML = email;
        document.getElementById("prevStatus").innerHTML = status;
        document.getElementById("prevTask").innerHTML = task;
    }
</script>
</body>
</html>
