@extends('layouts.app')
@section('content')
<form method="POST" class="form-horizontal">
    {{ csrf_field() }}

    Укажите свой e-mail и сообщение, которое хотите отправить.
    <br>
    <div class="form-group">
        <input type="text" class="col-lg-2" name="email" placeholder="E-mail" required><br>
    </div>
    <br>
    <div class="form-group">
        <textarea name="message" class="col-lg-4" placeholder="Сообщение" required></textarea><br>
    </div>
    <input type="submit" value="Отправить">
</form>
@endsection