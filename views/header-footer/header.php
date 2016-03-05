<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--
        Template 2048 Floral Design
        by www.tooplate.com
    -->
    <title>Название сайта</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="/template/css/tooplate_style.css" rel="stylesheet" type="text/css"/>

    <!-- Arquivos utilizados pelo jQuery lightBox plugin -->
    <script type="text/javascript" src="/template/scripts/jquery.js"></script>
    <script type="text/javascript" src="/template/scripts/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="/template/css/jquery.lightbox-0.5.css" media="screen"/>
    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<!--    <!-- Ativando o jQuery lightBox plugin -->
<!--    <script type="text/javascript">-->
<!--        $(function () {-->
<!--            $('#gallery a').lightBox();-->
<!--        });-->
<!--    </script>-->
<!---->
<!--    <!-- Ativando o jQuery lightBox plugin -->
<!--    <script type="text/javascript">-->
<!--        $(function () {-->
<!--            $('#map a').lightBox();-->
<!--        });-->
<!--    </script>-->

    <!-- AJAX запрос  -->
    <script type="text/javascript">
        function checkEmail() {
           var email = $("#email").val();
            $.post("/user/validation/"+email, {}, function(data) {
                $("#info").html(data);
            });
        }
    </script>

</head>
<body>

<div id="tooplate_wrapper">
    <div id="tooplate_header">
        <div id="site_title"><h1><a href="/">Название сайта</a></h1></div>
    </div> <!-- end of header -->
    <div id="tooplate_menu">
        <ul>
            <li><a href="/" class="current">Главная</a></li>
            <li><a href="/blog/">Блог</a></li>
            <li><a href="/gallery/">Галлерея</a></li>
            <li><a href="/site/contacts/">Контакты</a></li>
            <?php if ($_SESSION == null): ?>
                <li style="float: right"><a href="/user/register/">Регистрация</a></li>
                <li style="float: right"><a href="/user/login/">Вход</a></li>
            <?php else: ?>
                <li style="float: right"><a href="/user/logout/">Выход</a></li>
                <li style="float: right"><a href="/cabinet/">Личный кабинет</a></li>
            <?php endif; ?>
        </ul>
    </div> <!-- end of tooplate_menu -->

    <div id="tooplate_middle">
        Что тут будет???
    </div> <!-- end of middle -->

