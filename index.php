<?php

// FRONT CONTROLLER

// Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

// Запуск сессии
session_start();

// Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/includes/autoload.php');

// Вызов Router
$router = new Router();
$router->run();

