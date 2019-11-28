<?php

/*
*Самый главный контроллер сайта
*/


/*
* Настройки
*/

// Отображение ошибок
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

/*
* Подключение файлов системы
*/

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
include_once(ROOT.'/models/User.php');

/*
* Установка соединения с базой данных
*/

require_once(ROOT.'/components/Db.php');


/*
* Роутинг и его вызов
*/

$router = new Router();
$router->run();
