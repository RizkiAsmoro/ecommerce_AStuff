<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AStuff</title>
</head>
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet" type"text/css">
<link href="/css/frontend_layout.css" rel="stylesheet" type"text/css">
@yield('css')
<body>
    <div class="container">
        <div class="clearfix">
            <h1 class="header-title">AStuff</h1> 
            <div class="header-login">
            <a hreff="">login</a>
            </div>
        </div>
    <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">
            <li><a href="#">Category1</a></li>
            <li><a href="#">Category2</a></li>
            <li><a href="#">Category3</a></li>
    </nav>
    <div class="container">
    @yield('content')
    </div>
</body>
</html>