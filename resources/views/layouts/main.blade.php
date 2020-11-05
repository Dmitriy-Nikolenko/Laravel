<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .module {
            width: 250px;
            overflow: hidden;
        }

        .line-clamp {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
        }

        .footer {
            width: 100%;
            bottom: 0;
            color: white;
            text-align: center;
            padding-top: 15px;
            height: 60px;
             }

    </style>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">
            <i class="fa fa-globe fa-2x" aria-hidden="true"></i>
        </a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category">Категории</a>
                </li>
             </ul>
        </div>
        <ul class="navbar-nav">
           <li class="nav-item">
                <a class="nav-link" href="/order">Заказ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/feedback">Обратная свзь</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-light" href="{{ route('news.index') }}">Войти</a>
            </li>
        </ul>
    </nav>
    <br>
    @yield('content')
    <div class="footer navbar-expand-lg navbar-dark bg-dark">
        <p>&copy; Выполнил Дмитрий Николенко курс Laravel <?php echo date("Y")?></p>
    </div>
</div>
</body>
</html>
