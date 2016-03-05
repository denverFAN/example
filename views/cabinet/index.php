<?php include ROOT . '/views/header-footer/header.php'; ?>

<h3>Кабинет пользователя</h3>

<h4>Привет, <?php echo $user->name;?>!</h4>

<div>
        E-mail: <?php echo $user->email;?><br/>
        Имя: <?php echo $user->name;?><br/>
        Возраст: <?php echo $user->age;?><br/>
        Пол: <?php echo $user->gender;?><br/>
        Страна: <?php echo $user->region;?><br/>
</div>

<ul>
    <li><a href="/cabinet/edit">Редактировать данные</a></li>
</ul>

<?php include ROOT . '/views/header-footer/footer.php'; ?>
