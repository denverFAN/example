<?php include ROOT . '/views/header-footer/header.php'; ?>

<?php if ($result): ?>
    <p>Новость опубликована успешно!</p>
    <p><a href="/blog/addnews">Загрузить ещё...</a></p>
<?php else: ?>
    <?php if (isset($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li> - <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <div id="comment_form">
        <h3>Публикация новости на сайте</h3>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="form_row">
                <label>Оглавление:</label>
                <br/>
                <input type="text" name="title" id="title" onblur="checkEmail()">
            </div>
            <div class="form_row">
                <label>Текст новости:</label>
                <br/>
                <textarea name="text"></textarea>
            </div>
            <div class="form_row">
                <input type="file" name="image">
            </div>
            <input type="submit" name="submit" id="submit" value="Опубликовать" class="submit_btn">
        </form>
    </div><br/>
<?php endif; ?>

    <div class="cleaner"></div>

<?php include ROOT . '/views/header-footer/footer.php'; ?>