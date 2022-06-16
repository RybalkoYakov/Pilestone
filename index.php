<!doctype html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Pilestone - Очки для дальтоников</title>
</head>
<body>
    <!--HEADER-->
    <?php include "components/header.php"; ?>

    <main>
        <div class="main_screen">
            <h1 class="">Оптика для дальтоников</h1>
            <span>Pilestone</span>
            <p>
                Ваша персональная модель очков здесь, осталось пройти </p>
            <p>
                тест для определения типа дальтонизма
            </p>
            <a href="test.php" target="_blank">Тест</a>
        </div>


        <div class="about_colorblindness_screen">
            <h3>О дальтонизме</h3>
            <div class="about_colorblindness_screen__content">
                <div class="about_colorblindness_screen__cards">

                    <div class="about_colorblindness_screen__card">
                        <img src="img/world_icon.svg" alt="card_image">
                        <div class="d-flex flex-column">
                            <h4 style="--color: #fe3367">>5000 000 человек</h4>
                            <p>По данным МинЗдрава РФ - дальтоники, из них 95% мужчины и 5% женщины. Большинство людей получили это нарушение при  ождении.           </p>
                        </div>
                    </div>

                    <div class="about_colorblindness_screen__card">
                        <img src="img/half_world.png" alt="card_image">
                        <div class="d-flex flex-column">
                            <h4 style="--color:#11995e">ОГРАНИЧЕНИЯ</h4>
                            <p>С которыми дальтоники сталкиваются в повседневной жизни - это запрет на получение водительских прав, ограничения по воинской службе и трудовой деятельности.</p>
                        </div>
                    </div>

                </div>
                <div class="about_colorblindness_screen__logo">
                    <img src="img/about_colorblindness_screen_logo.webp" alt="logo">
                </div>
            </div>
        </div>


        <div class="glasses_pilestone">
            <h3>Очки для дальтоников</h3>
            <span>Pilestone</span>
            <div class="glasses_pilestone__cards">

                <div class="glasses_pilestone__card">
                    <div class="card_icon">
                        <img src="img/eye.svg" alt="eye">
                    </div>
                    <h6 class="card_header" style="--color: #fe3354">
                        Доказанная эффективность
                    </h6>

                    <div class="card_text">
                        Линзы Pielstone корректируют все три типа нарушения цветового зрения.
                    </div>
                </div>

                <div class="glasses_pilestone__card">
                    <div class="card_icon">
                        <img src="img/touragency_group.svg" alt="touragency_group">
                    </div>
                    <h6 class="card_header" style="--color: #278f07">
                        Более 8500
                    </h6>

                    <div class="card_text">
                        Столько пар очков было продано с начала 2017 года. Эта цифра, лучшее подтверждение качества и эффективности очков Pilestone.
                    </div>
                </div>

                <div class="glasses_pilestone__card">
                    <div class="card_icon">
                        <img src="img/hostel_stars.svg" alt="stars">
                    </div>
                    <h6 class="card_header" style="--color: #efc200">
                        Номер 1 в Беларуси
                    </h6>

                    <div class="card_text">
                        Мы первая компания в Беларуси, официально предоставляющая своим клиентам очки для дальтоников.
                    </div>
                </div>

            </div>
        </div>


        <div class="test_screen">
            <h3>Тест на дальтонизм</h3>
            <p>Нажав на кнопку, вы сможете пройти тест и узнать есть ли у вас нарушения цветовосприятия.
                Не забудьте поделиться своим результатом в социальных сетях!</p>
            <a href="test.php" target="_blank">Пройти тест</a>
        </div>

        <div class="video_screen">
            <h3>
                Видео: Как работают очки для дальтоников!
            </h3>

            <div>
                <iframe width="1160" height="600" src="https://www.youtube.com/embed/CjJ2vUgmwxk" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <div class="tech_screen">
            <h3>О технологии</h3>
            <p>
                Очки Pilestone - продукт, соединяющий науку о цветовом зрении и оптические технологии. Это единственный доступный оптический метод, который облегчает цветовую слепоту без изменения точности цветопередачи.
            </p>
            <a href="about_tech.php" target="_blank">Подробнее</a>
        </div>

        <div class="lens_table">
            <h3>Модели</h3>
            <p>
                Выберите подходящий вариант линзы из нашего каталога
            </p>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Тип дальтонизма</th>
                    <th scope="col">Тип линзы</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Лёгкая дейтеранопия</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Средняя дейтеранопия</td>
                    <td>A, B</td>
                </tr>
                <tr>
                    <td>Сильная и экстрасильная дейтеранопия</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>Лёгкая протанопия</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Средняя протанопия</td>
                    <td>D,A</td>
                </tr>
                <tr>
                    <td>Сильная и экстрасильная протанопия</td>
                    <td>D</td>
                </tr>
                <tr>
                    <td>Лёгкая, средняя и сильная тританопия</td>
                    <td>E</td>
                </tr>
                </tbody>
            </table>

            <p>
                Таблица соответствия линзы к типу дальтонизма
            </p>
        </div>


        <div id="pilestone_catalog" class="catalog">

            <?php
            $data = file_get_contents('data/catalog/items/items.json');
            $jsonData = json_decode($data);

            foreach ($jsonData as $item) {
                $header = $item->{'item_header'};
                $type = $item->{'item_type'};
                $price = $item->{'item_price'};
                $card_img = $item->{'item_card_img'};

                echo "
                    <div class=\"catalog_item\">
                        <div class=\"catalog_item__novelty display_none\">
                            NEW
                        </div>
                        <img src=\"{$card_img}\" alt=\"glasses\">
                        <h5 class=\"catalog_item__header\">
                            {$header}
                        </h5>
                        <p class=\"catalog_item__type\">
                            {$type}
                        </p>
                        <p class=\"catalog_item__price\">
                            {$price}
                        </p>
                        <a href=\"#\" class=\"catalog_item__details\">Подробнее</a>
                    </div>
                ";
            }
            ?>

        </div>



        <div class="glasses_pilestone" style="background-color: #ebebeb">
            <h3>Наши гарантии</h3>
            <div class="glasses_pilestone__cards">

                <div class="glasses_pilestone__card">
                    <div class="card_icon">
                        <img src="img/ecommerce_dollar.svg" alt="dollar">
                    </div>
                    <h6 class="card_header">
                        Возврат денег
                    </h6>

                    <div class="card_text">
                        Если очки не подойдут, мы вернём Вам деньги. Протестировать очки можно в течение 14 дней с момента приобретения
                    </div>
                </div>

                <div class="glasses_pilestone__card">
                    <div class="card_icon">
                        <img src="img/FDA.png" alt="FDA">
                    </div>
                    <h6 class="card_header">
                        Лицензия
                    </h6>

                    <div class="card_text">
                        Агентство FDA выдало нам официальную лицензию, подтверждающую безупречное качество и безопасность наших очков.
                        Номер: 3011870764 штат Пенсильвания
                    </div>
                </div>

                <div class="glasses_pilestone__card">
                    <div class="card_icon">
                        <img src="img/Amazon.png" alt="Amazon">
                    </div>
                    <h6 class="card_header">
                        Отличные отзывы
                    </h6>

                    <div class="card_text">
                        Мы первая компания в Беларуси, официально предоставляющая своим клиентам очки для дальтоников.
                    </div>
                </div>

            </div>
        </div>


        <div class="reviews_screen" id="index_page__reviews_screen">
            <h3>Отзывы клиентов</h3>
            <p>Напишите отзыв, мы будем очень признательны Вам!</p>

            <div id="reviews_screen_carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#reviews_screen_carouselreviews_screen_carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#reviews_screen_carouselreviews_screen_carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#reviews_screen_carouselreviews_screen_carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <p>
                            Покупала очки в подарок на день рождения мужу.
                            С возрастом у него заметнее стала проблема дальтонизма, особенно когда ездит за рулём в тёмное время суток, сигналы светофора сливаются и стоп сигналы плохо заметны.
                            В очках говорит, что стало гораздо увереннее ему ездить.
                            <span>Светлана</span>
                            <span>Модель очков GM-2</span>
                        </p>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <p>
                            Купил сыну TP 018 - он очень доволен.
                            Заказ выполнили в срок, с доставкой проблем не было.
                            Спасибо.
                            <span>Ильюша</span>
                            <span>Модель очков TP-018</span>
                        </p>
                    </div>
                    <div class="carousel-item">
                        <p>
                            У меня сильная протанопия, посмотрел в очки и удивился, очки и в правду работают, лучше всего при дневном освещении, тест прошёл с 2 ошибками, до этого делал 50/50 с ошибками, доставили очень быстро 1 классом, рекомендую :)
                            <span>Михаил</span>
                            <span>Модель очков GM-2</span>
                        </p>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#reviews_screen_carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#reviews_screen_carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <a href="index.php#index_page__connecting_form">Оставить отзыв</a>
        </div>
    </main>

    <?php include "components/form.php"; ?>

    <!--FOOTER-->
    <?php include "components/footer.php"; ?>

</body>
</html>