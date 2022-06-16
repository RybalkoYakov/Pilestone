<div class="header__burger_menu">
    <div class="burger">
        <span></span>
    </div>
    <div class="burger_close">
        <span></span>
    </div>
</div>
<header>
    <div class="logo">
        <img src="../img/Logo.jpg" alt="logo">
    </div>
    <nav class="header__nav">
        <ul>
            <li>
                <a href="index.php#pilestone_catalog">Каталог</a>
            </li>
            <li>
                <a href="about_tech.php">О технологии</a>
            </li>
            <li>
                <a href="test.php">Тест</a>
            </li>
            <li>
                <a href="faq.php">FAQ</a>
            </li>
            <li>
                <a href="for_opticians.php">Оптикам</a>
            </li>
            <li>
                <a href="blog.php">Блог</a>
            </li>
            <li>
                <a href="index.php#index_page__reviews_screen">Отзывы</a>
            </li>
            <li>
                <a href="contacts.php">Контакты</a>
            </li>
            <li>
                <a href="tel:+375296464408">+375(29) 646-44-08</a>
            </li>
        </ul>
    </nav>
</header>


<style>
    * {
        list-style: none;
        text-decoration: none;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }

    header {
        z-index: 99999;
        border-bottom: 1px solid #ffffff;
        box-shadow: 0 0 3px 3px rgba(255, 255, 255, .5);
    }

    .header__burger_menu {
        display: none;
        justify-content: flex-end;
        width: 100%;
        height: 5em;
        background-color: #000000;
        align-items: center;
        cursor: pointer;
        z-index: 1;
    }

    .header__burger_menu .burger{
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        background-color: #000000;
        margin-right: 30px;
    }

    .burger_close {
        position: relative;
        display: none;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
        background-color: #000000;
        margin-right: 30px;
        cursor: pointer;
    }

    .burger_close span {
        position: absolute;
        width: 30px;
        height: 3px;
        background-color: #ffffff;
        transform: rotateZ(45deg);
    }

    .burger_close span:before {
        content: "";
        position: absolute;
        width: 30px;
        height: 3px;
        background-color: #ffffff;
        transform: rotateZ(90deg);
    }

    .header__burger_menu .burger span {
        position: absolute;
        width: 30px;
        height: 3px;
        background-color: #ffffff;

    }
    .header__burger_menu .burger span:before,  .header__burger_menu .burger span:after{
        content: "";
        position: absolute;
        width: 30px;
        height: 3px;
        background-color: #ffffff;
    }

    .header__burger_menu .burger span:before {
        transform: translateY(-10px);
    }

    .header__burger_menu .burger span:after {
        transform: translateY(10px);
    }

    header {
        position: fixed;
        width: 100%;
        background-color: #f0f0f0;
        display: flex;
        justify-content: space-between;
    }

    .logo {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logo img{
        width: 100px;
        height: 100%;
        margin-left: 2em;
        cursor: pointer;
    }

    .header__nav {
        display: flex;
        align-items: center;
        padding-right: 1em;
    }

    .header__nav ul{
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .header__nav ul li {
        padding:10px  .5em 0 .5em;
    }

    .header__nav ul li a {
        position: relative;
        font-size: 1.1em;
        font-weight: 600;
        text-decoration: none;
        color: #363636;
        transition: .2s;
        letter-spacing: .005em;
    }

    .header__nav ul li a:after {
        display: block;
        position: absolute;
        content: '';
        background-color: #f37d7d;
        width: 0;
        height: 2px;
    }

    .header__nav ul li a:hover {
        color: #f37d7d;
        animation: hover_text_underline .2s;
     }

    .header__nav ul li a:hover:after {
        animation: text_underline_hover .5s;
        width: 100%;
    }

    @keyframes text_underline_hover {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }

    @media all and (max-width: 1000px){
        header {
            display: none;
            position: relative;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .header__nav {
            padding-right: 0;
        }

        .header__nav ul {
            padding: 2em 0 0 0;
            flex-direction: column;
        }

        .logo img {
            margin: 0;
        }

        .header__burger_menu {
            display: flex;
        }

        header {
            top: -100%;
        }
    }

</style>

<script>
    const burger = document.querySelector('.burger');
    const burgerClose = document.querySelector('.burger_close');
    const header = document.querySelector('header');
    const logo = document.querySelector('.logo');

    burger.addEventListener('click', () => {
        burger.style.display = 'none';
        burgerClose.style.display = 'flex';
        header.style.display = 'flex';
    })

    burgerClose.addEventListener('click', () => {
        burger.style.display = 'flex';
        burgerClose.style.display = 'none';
        header.style.display = 'none';
    })

    logo.addEventListener('click', () => {
        window.location.href = 'index.php'
    })

</script>