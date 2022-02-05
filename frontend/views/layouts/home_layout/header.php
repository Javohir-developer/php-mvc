<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muhtoj.uz</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link rel="stylesheet" href="/assets/css/styles-merged.css">
    <link rel="stylesheet" href="/assets/css/style.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css">
    <link rel = "icon" type = "image/png" href = "/assets/files/img/muhtoj2.png">
    <script src="/assets/js/vendor/html5shiv.min.js"></script>
    <script src="/assets/js/vendor/respond.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default probootstrap-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" title="ProBootstrap:Muhtoj.uz">Muhtoj.uz</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Все случаи</a></li>
                <li><a href="/helped">Кому Помогли</a></li>
                <li><a href="/news">Новости</a></li>
                <li><a href="/faq">Вопросы</a></li>
                <li><a href="/testimonials">Отзывы</a></li>
                <li>
                    <a href="<?php echo !empty($_COOKIE['email']) ? '/user/logout' : '/user/login'?>" title="выход">
                        <?php echo !empty($_COOKIE['email']) ? 'Выход' : 'Вход'?>
                    </a>
                </li>
                <li class="probootstra-cta-button last"><a href="/attention" class="btn btn-primary">Добавить Случай</a></li>
            </ul>
        </div>
    </div>
</nav>

