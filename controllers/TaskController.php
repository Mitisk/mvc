<?php 

include_once ROOT.'/models/Tasks.php';

class TaskController {

    public function actionIndex($page = 1, $sort = 'id', $status = Null) {
        // Сортировка        
        if ($sort == 'name' || $sort == 'email' || $sort == 'text' || $sort == 'status') {
            $tasksList = Tasks::getTasksListSort($page, $sort);
        } else {
            $tasksList = Tasks::getTasksListSort($page, $sort = 'id');
        }

        //Количестов страниц
        $total = Tasks::getTotalTask();
        $str_pag = ceil($total / 3);

        require_once(ROOT.'/views/tasks/index.php');

        return true;
    }

    public function actionAdd() {
        $result = false;
        
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $text = $_POST['text'];
            $result = Tasks::add($name, $email, $text);
            header("Location: /1/id/ok");
        }

        require_once(ROOT.'/views/tasks/add.php');

        return true;
    }


}