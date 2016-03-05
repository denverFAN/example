<?php include ROOT . '/views/header-footer/header.php'; ?>

<div id="tooplate_main">
    <div class="post_box">
        <h2><?php echo $news->title; ?></h2>
        <img src="<?php echo BlogImage::getImage($news->id); ?>" width="500px" alt="image" />
        <p><span class="cat">Posted in <?php echo $news->time; ?> | <a href="#">136 comments</a></p>
        <p><?php echo $news->text; ?></p>
    </div>

    <div id="comment_form">
        <h3>Комментарии:</h3>
        <ol class="comment_list">
            <?php foreach ($comments as $comment) : ?>
                <li>
                    <div class="comment_box">
                        <img src="/template/images/avator.jpg" alt="avator 1" class="img_fl img_border"/>
                        <div class="comment_content">
                            <div class="comment_meta"><strong><a href="#"><?php echo $comment->username; ?></a> </strong><?php echo $comment->time; ?>
                            </div>
                            <p><?php echo $comment->comment; ?></p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>

        <?php if ($_SESSION): ?>

            <?php if (isset($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <form action="" method="post">
                <div class="form_row">
                    <label>Comment</label>
                    <br/>
                    <textarea name="comment" rows="" cols="" id="comment"></textarea>
                </div>
                <input type="submit" name="submit" id="submit" value="Отправить" class="submit_btn">
            </form>

        <?php else: ?>
        <div class="form_row">
            <p>Только зарегистрированные пользователи могут оставлять комментарии!</p>
        </div>
    </div>
    <?php endif; ?>

    <div class="cleaner"></div>
</div> <!-- end of tooplate_main -->

<?php include ROOT . '/views/header-footer/footer.php'; ?>
