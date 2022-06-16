<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://api-maps.yandex.ru/2.1/?apikey=1c294468-1465-4eb0-9113-14a3dd29ca2d&lang=ru_RU" type="text/javascript">
    </script>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Pilestone - оптика для дальтоников</title>
</head>
<body>
<!--HEADER-->
<?php include "components/header.php"; ?>

    <main class="page_contacts">
        <div class="contacts__map">
            <h1>Где примерить и протестировать очки Pilestone:</h1>

            <div>
                <div id="map" style="width: 600px; height: 400px"></div>

                <script>
                    // Функция ymaps.ready() будет вызвана, когда
                    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
                    ymaps.ready(init);
                    function init(){
                        // Создание карты.
                        var myMap = new ymaps.Map("map", {
                            // Координаты центра карты.
                            // Порядок по умолчанию: «широта, долгота».
                            // Чтобы не определять координаты центра карты вручную,
                            // воспользуйтесь инструментом Определение координат.
                            center: [55.76, 37.64],
                            // Уровень масштабирования. Допустимые значения:
                            // от 0 (весь мир) до 19.
                            zoom: 7
                        });
                    }
                </script>
            </div>
        </div>
    </main>

<!--FOOTER-->
<?php include "components/footer.php"; ?>

</body>
</html>