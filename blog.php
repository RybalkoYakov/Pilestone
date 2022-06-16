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

<main class="blog_page">
    <div class="blog_page__main_screen">
        <h1>БЛОГ PILESTONE</h1>
        <p>
            Здесь мы публикуем видео и текстовые обзоры, статьи и рекомендации по использованию очков для дальтоников, публикации в СМИ
    </div>

    <div class="blog_page__posts">
        <div class="blog_page__post">
            <div style="display: flex; justify-content: center; align-items: center;">
                <img class="post_image" src="img/Logo.jpg" alt="post card image">
            </div>
            <p>14.06.2022 г.</p>
            <h5>Title</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div>
                <a href="#">Прочитать подробнее</a>
            </div>
        </div>
    </div>

    <?php include "components/form.php"; ?>
</main>


<!--FOOTER-->
<?php include "components/footer.php"; ?>

</body>
</html>