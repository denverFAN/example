<?php include ROOT . '/views/header-footer/header.php'; ?>

<?php if ($result): ?>
    <p>Ваша информация на сайте была отредактирована!</p>
<?php else: ?>
<?php if (isset($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li> <?php echo $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

    <div id="comment_form">
        <h3>Информация о себе</h3>
        <form method="post" action="">
            <div class="form_row">
                <label>Ваше полное Имя:</label>
                <br/>
                <input type="text" name="name" value="<?php echo $userData['name']; ?>">
            </div>
            <div class="form_row">
                <label>Пароль:</label>
                <br/>
                <input type="password" name="password">
            </div>
            <div class="form_row">
                <label>Возраст:</label>
                <br/>
                <select name="age" size="1">
                    <option selected="selected"><?php echo $userData['age']; ?></option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                </select>
            </div>
            <div class="form_row">
                <label>Пол:</label>
                <br/>
                <label><input type="radio" name="gender" value="Мужской" checked="<?php echo $userData['gender']; ?>">Мужской</label>
                <label><input type="radio" name="gender" value="Женский" checked="<?php echo $userData['gender']; ?>">Женский</label>
            </div>
            <div class="form_row">
                <label>Страна:</label>
                <br/>
                <select name="region" size="1">
                    <option selected="selected"><?php echo $userData['region']; ?></option>
                    <option value="Украина">Украина</option>
                    <option value="Россия">Россия</option>
                    <option value="США">США</option>
                    <option value="Англия">Англия</option>
                    <option value="Китай">Китай</option>
                </select>
            </div>
            <input type="submit" name="submit" id="submit" value="Редактировать" class="submit_btn">
            <p id="info"></p>
        </form>
    </div>

    <div class="cleaner"></div>

<?php endif; ?>

<?php include ROOT . '/views/header-footer/footer.php'; ?>


