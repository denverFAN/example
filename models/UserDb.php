<?php

require_once(ROOT . '/includes/database.php');

/**
 * Класс UserDb - модель для записи в БД данных о пользователях на основе ActiveRecord
 */
class UserDb extends ActiveRecord\Model
{

    // Название таблицы для записи пользователей
    static $table_name = 'users';
}