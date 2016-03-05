<?php
/**
 * Контроллер для раздела "ЛИЧНЫЙ КАБИНЕТ"
 */
class CabinetController
{
    public function actionIndex()
    {
        // Получение ID пользователя из сессии
        $userId = UserCheck::checkLogin();

        // Поиск пользователя в БД по ID
        $user = UserDb::find($userId);

        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }

    public function actionEdit()
    {
        // Получение ID пользователя из сессии
        $userId = UserCheck::checkLogin();

        // Поиск пользователя в БД по ID
        $user = UserDb::find($userId);

        $userData = $user->to_array();

        $result = null;

        if (isset($_POST['submit'])) {
            $userData = $_POST;
            unset($userData['submit']);

            $errors = null;

            //Проверки правильности заполнения полей формы


            if ($errors == null) {
                // Обновление данных в БД
                $user->update_attributes($userData);
                $result = true;
            }
        }

        require_once(ROOT . '/views/cabinet/edit.php');
        return true;
    }
}