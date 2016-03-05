<?php

/**
 * Класс UserCheck - модель для проверки правильности заполнения полей форм
 */
class UserCheck
{
    /**
     * Проверка email
     */
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    /**
     * Проверка пароля (не короче 3 символов)
     */
    public static function checkPassword($password)
    {
        if (strlen($password) >= 3) {
            return true;
        }
        return false;
    }

    /**
     * Проверка авторизации (вошел ли пользователь на сайт?)
     */
    public static function checkLogin()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }

    /**
     * Поиск в БД пользователя из сессии
     */
    public static function fromSession()
    {
        if ($_SESSION) {
            $userId = $_SESSION['user'];
            $user = UserDb::find($userId);
            return $user;
        }
        return false;
    }

}