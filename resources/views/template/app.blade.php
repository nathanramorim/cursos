<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  CSS  --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
{{--  JS  --}}
<script src="js/jquery-3.2.1.min.js" async></script>
<script src="js/bootstrap.min.js" async></script>
<script src="js/jquery.mask.js" async></script>
</html>
