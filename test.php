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

<main class="test_page">
    <div>
        <h1>Тест на дальтонизм</h1>
        <p style="white-space: pre-line">
            Правила прохождения теста:
            1. Если вы видите цифру на картинке, то выбираете соответствующую цифру на панели с числами.
            2. Если не видите ничего, то нажимаете Nothing.
            3. Если сомневаетесь, то нажимаете Not sure .
            4. После прохождения, пришлите результат теста в ответном письме на почту <span>pilestone@mail.com</span>
            Обязательно укажите контактный номер и имя для Вашей идентификации.
        </p>
        <a href="https://pilestone.com/pages/color-blind-test" target="_blank">Начать тест</a>
    </div>
    <div>
        <img src="img/test_img.webp" alt="phone_daltone">
    </div>
</main>

<!--FOOTER-->
<?php include "components/footer.php"; ?>

</body>
</html>