<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?=Route('home')?>">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?=Route('home')?>">Все товары</a></li>
                <li ><a href="<?=Route('home')?>/categories">Категории</a>
                </li>
                <li ><a href="<?=Route('cart')?>">В корзину</a></li>
                <li><a href="<?=Route('home')?>/locale/en">en</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=Route('home')?>/currency/RUB">₽</a></li>
                        <li><a href="<?=Route('home')?>/currency/USD">$</a></li>
                        <li><a href="<?=Route('home')?>/currency/EUR">€</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?=Route('home')?>/login">Войти</a></li>

            </ul>
        </div>
    </div>
</nav>
@yield('content')
