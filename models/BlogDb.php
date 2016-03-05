<?php

require_once(ROOT . '/includes/database.php');

/**
 * Класс BlogDb - модель для записи в БД данных о новостях на основе ActiveRecord
 */
class BlogDb extends ActiveRecord\Model
{

    // Название таблицы для записи новостей
    static $table_name = 'news';
}