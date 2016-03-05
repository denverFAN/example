<?php include ROOT . '/views/header-footer/header.php'; ?>

<div id="tooplate_main">
    <h2>Website Image Gallery</h2>

    <?php if ($_SESSION): ?>

        <?php if ($result): ?>
            <p>Изображение загружено успешно!</p>
            <p><a href="/galley/index">Загрузить ещё...</a></p>
        <?php else: ?>
            <?php if (isset($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div id="comment_form">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form_row">
                        <label>Описание к изображению:</label>
                        <br/>
                        <textarea name="caption"></textarea>
                    </div>
                    <div class="form_row">
                        <input type="file" name="image">
                    </div>
                    <input type="submit" name="submit" id="submit" value="Загрузить" class="submit_btn">
                </form>
            </div><br/>
        <?php endif; ?>

    <?php endif; ?>

    <div id="gallery">
        <ul>
            <?php foreach ($image as $images): ?>
                <li>
                    <a href="/gallery/view/<?php echo $images->id; ?>" title="<?php echo $images->caption; ?>">
                        <img src="<?php echo GalleryImage::getImage($images->id); ?>" width="200px" alt="image" />
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="cleaner"></div>

    </div>

    <div class="pagging">
        <ul>
            <?php if($pagination->total_pages() > 1) : ?>
                <?php if($pagination->has_previous_page()) : ?>
                    <li><a href="/gallery/index/<?php echo $pagination->previous_page(); ?>">Previous</a></li>
                <?php endif; ?>
                <?php for($i=1; $i <= $pagination->total_pages(); $i++) : ?>
                    <li><a href="/gallery/index/<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
                <?php if($pagination->has_next_page()) : ?>
                    <li><a href="/gallery/index/<?php echo $pagination->next_page(); ?>">Next</a></li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>
        <div class="cleaner"></div>
    </div>

    <div class="cleaner"></div>

</div> <!-- end of tooplate_main -->

<?php include ROOT . '/views/header-footer/footer.php'; ?>

