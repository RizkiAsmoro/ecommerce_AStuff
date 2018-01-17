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

                @if(auth()->check())
                <a href="/logout"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">logout
                </a>

                <form id="logout-form" action="/logout" method="POST" style"display: none;">
                {{csrf_field() }}
                </form>
                @else
                <a href="/login">login</a>
                @endif
            </div>
            <div class="header-cart">
                <span class="glyphicon glyphicon-shopping-cart"></span>
                <span class="badge" id"cart_count">0</span>
            </div>  
        </div>
    <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">
            <li><a href="#">Category1</a></li>
            <li><a href="#">Category2</a></li>
            <li><a href="#">Category3</a></li>
    </nav>
</div>

    <div class="container">
    @yield('content')
    </div>
    <script src="/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function refreshCart(){
            $.get('/cart/content', function(data){
                $('#cart_count').html(data.length);
            });
        }
        refreshCart();
        </script>
    @yield('js')
</body>
</html>