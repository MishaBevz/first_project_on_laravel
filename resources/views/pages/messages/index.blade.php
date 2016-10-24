<!DOCTYPE HTML>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга на Lavarel 5x </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />

</head>
<body>
    <div class="container">
        <h1 class="text-center">Гостевая книга на Lavarel</h1><hr/>

        <form method="POST" id="id_form_messages">

            <div class="form-group">
                <label for="name">Имя:</label>
                <input class="form-control" placeholder="Имя" name="name" type="text" id="name">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" placeholder="E-mail" name="email" type="email" id="email">
            </div>

            <div class="form-group">
                <label for="message">Сообщение:</label>
                <textarea class="form-control" rows="5" placeholder="Текст сообщения" name="message" cols="50" id="message" />
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Добавить">
            </div>
        </form>

        <div class="text-right"><b>Всего сообщений:</b><i class="badge">0</i></div><br/>

        <div class="messages">
            <div class="panel panel-default">
        <div class="panel-heading">
                <h3 class="panel-title">
                    <span>Карлсон</span>
                    <span class="pull-right label label-info">17:15:00 / 03.07.2015</span>
                </h3>
        </div>

            <div class="panel-body">
                Текст
                Текст
                Текст
                Текст
                Текст
                <hr/>
            <div class="pull-right">
                <a class="btn btn-info" href="#">
                    <i class="glyphicon glyphicon-pencil"></i>
                </a>
                <button class="btn btn-danger">
                    <i class="glyphicon glyphicon-trash"></i>
                </button>
            </div>
        </div>

    </div>
        </div>
        </div>
</body>
</html>