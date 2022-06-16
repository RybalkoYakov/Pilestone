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

    <title>Pilestone - оптика для дальтоников</title>
</head>
<body>
<!--HEADER-->
<?php include "components/header.php"; ?>

<main class="opticians_page">
    <div class="opticians_page__main_screen">
        <h1>Партнёры</h1>
        <p>Сделайте Вашу оптику уникальной, расширив ассортимент очками для дальтоников PIlestone!</p>
    </div>

    <div class="uniq_product_screen">
        <h4>Уникальный продукт</h4>
        <p>
            Очки для дальтоников Pilestone действительно инновационный продукт,
            который практически не имеет конкуренции.
            Присоединившись к числу дистрибьюторов Вы получите:
        </p>
        <p>
            1) Право эксклюзивной продажи очков в вашем регионе.
            2) Полное сопровождение и поддержку при запуске продаж.
            3) Выгодные условия и индивидуальную дистрибьюторскую скидку.
        </p>
    </div>

    <div class="partnership_screen">
        <h4>Как стать партнёром?</h4>
        <div class="partnership_screen__container">
            <div class="partnership_screen__item">
                <h6>Оставьте заявку</h6>
                <p>Наш менеджер свяжется с Вами и ответит на все необходимые вопросы. Подготовит коммерческое предложение.</p>
            </div>
            <div class="partnership_screen__item">
                <h6>Пройдите обучение</h6>
                <p>Перед началом работы мы обязаны обучить продукту Ваших сотрудников,, этим мы можем гарантировать качественный и правильный подбор очков для дальтоников.</p>
            </div>
            <div class="partnership_screen__item">
                <h6>Начните продавать</h6>
                <p>Мы бесплатно окажем маркетинговую поддержку в формате контекстной рекламы и POS-материалов.</p>
            </div>

            <a href="about_tech.php#index_page__connecting_form">Отправить заявку</a>
        </div>
    </div>

    <div class="partners_screen">
        <h4>Оптики-партнёры</h4>
        <div class="partners_cards">

            <?php
                $partners = file_get_contents('data/partners/partners.json');
                $partners_json = json_decode($partners);

                foreach ($partners_json as $card) {
                    $title = $card->{'title'};
                    $description = $card->{'description'};
                    $link = $card->{'link'};

                    echo "
                        <div class=\"partners_card\">
                            <h6 class=\"partners_card__header\">
                                ${title}
                            </h6>
                            <div class=\"partners_card__description\">
                                ${description}
                            </div>
                            <a class=\"partners_card__link\" href=\"${link}\">Перейти на сайт</a>
                        </div>
                    ";
                }
            ?>

        </div>
    </div>

    <?php include "components/form.php"; ?>
</main>

<!--FOOTER-->
<?php include "components/footer.php"; ?>

</body>
</html>