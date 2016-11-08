<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link href="/css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="js/bootstrap.js"></script>
<body>


<div class="tabbable"> <!-- Only required for left/right tabs -->
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Раздел 1</a></li>
        <li><a href="{{url('/newcategory')}}" data-toggle="tab">Раздел 2</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab1">
            <p>Я в Разделе 1.</p>
        </div>
        <div class="tab-pane" id="tab2">
            <p>Привет, я в Разделе 2.</p>
        </div>
    </div>
</div>

</body>
</html>