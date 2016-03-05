<?php

require_once(ROOT . '/includes/database.php');

/**
 * Модель для записи в БД комментариев на изображения на основе ActiveRecord
 */
class CommentGallery extends ActiveRecord\Model
{

    // Название таблицы для записи комментариев
    static $table_name = 'comments_gallery';
}