<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>news</title>
</head>
<body>
<a href="/home">На главную</a><br>
<h5>ДТП с участием Ефремова произошло вечером 8 июня на Садовом кольце в центре Москвы.</h5>
<div id="news" style="display: none">
    <h6>В Иркутской области поймали сбежавших заключенных</h6>
    <h6>Мишустин поддержал идею об упрощении резидентства в Арктической зоне для малого бизнеса</h6>
    <h6>Мишустин призвал активнее увеличивать присутствие России в Арктике</h6>
    <h6>Фурсенко: изменение климата приведет к масштабным пандемиям</h6>
    <h6>Сноуден получил бессрочный вид на жительство в России</h6>
</div>
<a class="button" href="#">Больше новостей</a><br>
<script>
    let button = document.querySelector('.button');
    let news = document.getElementById('news');
    button.addEventListener('click', function () {
       if(button.innerHTML == 'Больше новостей') {
                      button.innerHTML = 'Скрыть новости';
           news.style.display = "block";
       } else {
           news.style.display = "none";
           button.innerHTML = 'Больше новостей';

       }

    })

</script>
</body>
</html>
