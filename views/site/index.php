<?php include ROOT . '/views/header-footer/header.php'; ?>

    <div id="tooplate_main">
        <div class="col_w300 float_l">
            <h2>Последняя новость</h2>
            <div class="image_wrapper">
                <img src="<?php echo BlogImage::getImage($news->id); ?>" width="300px" alt="image" />
            </div>
            <p><a href="/blog/post/<?php echo $news->id; ?>"><em><?php echo $news->title; ?></em></a></p>
            <p align="justify"><?php echo mb_substr($news->text, 0, 300, 'UTF-8'); ?>...</p>
            <a href="/blog/index" class="more">В блог</a>
        </div>

        <div class="col_w600 float_r">
            <div class="content_box">
                <h2>Галлерея</h2>
                <p><em>Последние загруженные изображения</em></p>
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
                </div>
                <div class="cleaner"></div>
                <a href="/gallery/index" class="more float_r">В галлерею</a>
            </div>
        </div>
        <div class="cleaner"></div>
    </div> <!-- end of tooplate_main -->


<?php include ROOT . '/views/header-footer/footer.php'; ?>