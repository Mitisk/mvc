<?php 

include_once ROOT.'/models/Tasks.php';
include_once ROOT.'/models/User.php';

class AdminController {

    public function actionUpdate($id) {

        // Проверяем, авторизован ли администратор
        $userId = User::checkLogged();
        // Получаем задание
        $task = Tasks::getTaskItemById($id);

        $result = false;        
        if (isset($_POST['submit'])) {
            $text = $_POST['text'];
            if (isset($_POST['status'])) {$status = $_POST['status'];} else {$status = $task['status'];};
            $result = Tasks::edit($id, $text, $status);
            header("Location: /1/id/ok");
        }

        require_once(ROOT.'/views/tasks/update.php');

        return true;
    }

    public function actionLogin() {

        if (isset($_POST['submit'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $errors = false;

            // Проверка на существование пары логин/пароль
            $check = User::checkUser($login, $password);

            if ($check == false) {
                $errors[] = 'Неверный логин или пароль.';
            } else {
                User::auth($check);
                header("Location: /");
            }

        }
        require_once(ROOT.'/views/tasks/login.php');
        return true;
    }
    
    public function actionLogout() {
        unset($_SESSION["user"]);
        header("Location: /");
    }

}