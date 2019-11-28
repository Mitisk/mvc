<?php

class Router {

    //Массив маршрутов
    private $routers;

    public function __construct() {
        $path = ROOT.'/config/routers.php';
        // Присваиваем свойству routers массив из файла
        $this->routers = include($path);
    }

    //Получаем строку запросов
    private function getURI() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run() {

        // Получаем строку запроса
        $uri = $this->getURI();

        // Проверяем наличие такого запроса в маршрутах
        foreach ($this->routers as $pattern => $path) {

            // Сравниваем строку запроса и данные в routers
            if (preg_match("~$pattern~", $uri)) {

                // Путь с get параметрами в строке
                $internalRoute = preg_replace("~$pattern~", $path, $uri);
                
                // Определяем, какой контроллер и экшн будут обрабатывать строку

                // Разделяем строку
                $segments = explode('/', $internalRoute);

                // Получаем имя контроллера
                $controllerName = array_shift($segments).'Controller';
                // Первая буква - заглавная
                $controllerName = ucfirst($controllerName);

                // Получаем Экшн
                $actionName = 'action'.ucfirst(array_shift($segments));

                // Получаем параметры 
                $parameters = $segments;
                
                // Подключаем файл класса-контроллера
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // Создаем объект, вызываем экшн
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                
                if ($result != null) {
                    break;
                }

            }


        }
        


        
    }
}