<?php include ROOT . '/views/header-footer/header.php'; ?>

<?php if ($result): ?>
    <p>Вы зарегистрированы!</p>
<?php else: ?>
<?php if (isset($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li> <?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

    <div id="comment_form">
        <h3>Регистрация на сайте</h3>
        <form method="post" action="">
            <div class="form_row">
                <label>E-mail:</label>
                <br/>
                <input type="text" name="email" id="email" onblur="checkEmail()"><span id="info"></span>
            </div>
            <div class="form_row">
                <label>Пароль:</label>
                <br/>
                <input type="password" name="password">
            </div>
            <div class="form_row">
                <label>Ваше полное Имя:</label>
                <br/>
                <input type="text" name="name">
            </div>
            <div class="form_row">
                <label>Возраст:</label>
                <br/>
                <select name="age" size="1">
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                </select>
            </div>
            <div class="form_row">
                <label>Пол:</label>
                <br/>
                <label><input type="radio" name="gender" value="Мужской">Мужской</label>
                <label><input type="radio" name="gender" value="Женский">Женский</label>
            </div>
            <div class="form_row">
                <label>Страна:</label>
                <br/>
                <select name="region" size="1">
                    <option value="Украина">Украина</option>
                    <option value="Россия">Россия</option>
                    <option value="США">США</option>
                    <option value="Англия">Англия</option>
                    <option value="Китай">Китай</option>
                </select>
            </div>
            <input type="submit" name="submit" id="submit" value="Зарегистрироваться" class="submit_btn">
        </form>
    </div>

    <div class="cleaner"></div>

<?php endif; ?>

<?php include ROOT . '/views/header-footer/footer.php'; ?>