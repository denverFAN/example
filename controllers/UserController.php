<?php
/**
 * Контроллер UserController
 */
class UserController
{
    /**
     * Экшен для регистрации пользователя
     */
    public function actionRegister()
    {
        $result = null;

        if (isset($_POST['submit'])) {
            $userData = $_POST;
            unset($userData['submit']);

            $errors = null;

            //Проверки правильности заполнения полей формы
//            if (!UserCheck::checkEmail($userData['email'])) {
//                $errors['email'] = 'Неправильный email';
//            }
//            if (!UserCheck::checkPassword($password)) {
//                $errors['password'] = 'Пароль не должен быть короче 6-ти символов';
//            }
//            if (!UserCheck::checkName($name)) {
//                $errors[] = 'Имя не должно быть короче 2-х символов';
//            }
//            if (UserCheck::checkEmailExists($email)) {
//                $errors[] = 'Такой email уже используется';
//            }

            if ($errors == null) {
                // Регистрация пользователя
                $result = UserDb::create($userData);
            }
        }

        require_once(ROOT . '/views/user/register.php');
        return true;
    }

    /**
     * Проверка правильности заполнения полей формы регистрации
     */
    public function actionValidation($email)
    {
            if (!UserCheck::checkEmail($email)) {
                echo "Error!!!";
            }
    }

    /**
     * Экшен для входа на сайт
     */
    public function actionLogin()
    {
        $email = $password = null;

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = null;

            // Проверка правильности заполнения полей формы входа
            if (!UserCheck::checkEmail($email)) {
                $errors['email'] = 'Неправильный email';
            }
            if (!UserCheck::checkPassword($password)) {
                $errors['password'] = 'Пароль не должен быть короче 3-х символов';
            }

            // Проверка существования пользователя
            $user = UserDb::find('one', array('conditions' => array('email = ? AND password = ?', $email, $password)));
            $userId = $user->id;

            if ($userId == false) {
                $errors['incorrect'] = 'Неправильные данные для входа на сайт';
            } else {
                // Авторизация пользователя (запись в сессию)
                $_SESSION['user'] = $userId;
                header("Location: /");
            }
        }

        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    /**
     * Удаление данных о пользователе из сессии
     */
    public function actionLogout()
    {
        unset($_SESSION["user"]);
        header("Location: /");
    }
}