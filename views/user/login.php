<?php include ROOT . '/views/header-footer/header.php'; ?>

<?php if (isset($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li> - <?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<div id="comment_form">
    <h3>Вход на сайт</h3>
    <form method="post" action="">
        <div class="form_row">
            <label>E-mail:</label>
            <br/>
            <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        </div>
        <div class="form_row">
            <label>Пароль:</label>
            <br/>
            <input type="password" name="password" value="<?php echo $password; ?>">
        </div>
        <input type="submit" name="submit" id="submit" value="Войти" class="submit_btn">
    </form>
</div>

<div class="cleaner"></div>

<?php include ROOT . '/views/header-footer/footer.php'; ?>