<?php

require_once(ROOT . '/includes/database.php');

/**
 * Модель для записи в БД комментариев на новости на основе ActiveRecord
 */
class CommentBlog extends ActiveRecord\Model
{

    // Название таблицы для записи комментариев
    static $table_name = 'comments_blog';
}