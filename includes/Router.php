<?php

/**
 * Класс Router для работы с маршрутами
 */
class Router
{
    /**
     * Конструктор
     */
    public function __construct()
    {

    }

    public static function run()
    {
        // Определение параметров и названия контроллера и экшена по умолчанию
        $controllerName = 'site';
        $actionName = 'index';

        // Преобразование строки запроса в массив
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1])) {
            $controllerName = $routes[1];
        }

        if (!empty($routes[2])) {
            $actionName = $routes[2];
        }

        // Определение параметров и названия контроллера и экшена
        $controllerName = ucfirst($controllerName) . 'Controller';
        $actionName = 'action' . ucfirst($actionName);

        // Подключение файла класса-контроллера
        $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
        if (file_exists($controllerFile)) {
            include_once($controllerFile);
        }

        // Создание объекта (контроллер)
        $controllerObject = new $controllerName;
        // Вызов метода (экшен) с заданными параметрами из запроса
        if (method_exists($controllerObject, $actionName)) {
            unset($routes[0]);
            unset($routes[1]);
            unset($routes[2]);
            if (empty($routes)) {
                $controllerObject->$actionName();
            } else {
                $parameters = $routes;
                call_user_func_array(array($controllerObject, $actionName), $parameters);
            }
        }
    }
}