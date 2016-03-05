<?php

require_once(ROOT . '/includes/database.php');

/**
 * Класс GalleryDb - модель для записи в БД данных об изображениях на основе ActiveRecord
 */
class GalleryDb extends ActiveRecord\Model
{

    // Название таблицы для записи изображений
    static $table_name = 'images';
}