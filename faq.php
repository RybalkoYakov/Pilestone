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

<main class="faq_page">
    <div class="faq_page__main_screen">
        <h1>ПОМОЩЬ</h1>
        <p style="white-space: pre-line">Если у Вас возникли вопросы, найдите на них
            ответы ниже:
        </p>
    </div>

    <div class="faq_page__cards">
        <?php
            $faq_page__cards = file_get_contents('data/tips/tips.json');
            $faq_page__cards_json = json_decode($faq_page__cards);

            foreach ($faq_page__cards_json as $card) {
                $color = $card->{'tip_color'};
                $title = $card->{'tip_title'};
                $content = $card->{'tip_content'};

                echo "
                    <div class=\"faq_page__card\" style=\"--card_color: ${color}\">
                        <h4>${title}</h4>
                        <p>${content}</p>
                    </div>
                ";
            }
        ?>
    </div>

    <div class="faq_page__call_to_action">
        <h4>Подберите себе очки, которые сделают вашу жизнь ярче!
        </h4>
        <a href="index.php#pilestone_catalog">Перейти к просмотру моделей</a>
    </div>

</main>

<!--FOOTER-->
<?php include "components/footer.php"; ?>

</body>
</html>