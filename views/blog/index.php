<?php include ROOT . '/views/header-footer/header.php'; ?>

<div id="tooplate_main">
    <?php foreach ($blog as $news): ?>
    <div class="post_box">
        <h2><?php echo $news->title; ?></h2>
        <img src="<?php echo BlogImage::getImage($news->id); ?>" width="400px" alt="image" />
        <p><span class="cat">Posted <?php echo $news->time; ?> | <a href="#">186 comments</a></p>
        <p><?php echo mb_substr($news->text, 0, 400, 'UTF-8'); ?>...</p>
        <a class="more" href="/blog/post/<?php echo $news->id; ?>">Читать далее</a>
        <div class="cleaner"></div>
    </div>
    <?php endforeach; ?>

    <div class="cleaner"></div>

    <div class="pagging">
        <ul>
            <?php if($pagination->total_pages() > 1) : ?>
                <?php if($pagination->has_previous_page()) : ?>
                    <li><a href="/blog/index/<?php echo $pagination->previous_page(); ?>">Previous</a></li>
                <?php endif; ?>
                <?php for($i=1; $i <= $pagination->total_pages(); $i++) : ?>
                    <li><a href="/blog/index/<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
                <?php if($pagination->has_next_page()) : ?>
                    <li><a href="/blog/index/<?php echo $pagination->next_page(); ?>">Next</a></li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>
        <div class="cleaner"></div>
    </div>

    <div class="cleaner"></div>
</div> <!-- end of tooplate_main -->

<?php include ROOT . '/views/header-footer/footer.php'; ?>
