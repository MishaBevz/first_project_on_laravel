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
</div>

</body>
</html>