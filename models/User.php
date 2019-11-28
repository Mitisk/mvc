<?php

class User {

    /*
     * Проверяем, существует ли пользователь с заданными $login и $password
     */
    public static function checkUser($login, $password) {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE login = :login AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }

        return false;
    }

    /*
     * Запоминаем пользователя
     */
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /login");
    }

    public static function isGuest()
    {
        if (isset($_SESSION["user"])) {
            return false;
        }
        return true;
    }

}
