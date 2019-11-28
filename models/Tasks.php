<?php 

class Tasks {

	public static function add($name, $email, $text) {
		$db = Db::getConnection();

        $sql = 'INSERT INTO tasks (name, email, text) '
                . 'VALUES (:name, :email, :text)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':text', $text, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function getTaskItemById($id) {

        $id = intval($id);

		if ($id) {
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM tasks WHERE id=' . $id);

            //Оставляем индексами только названия
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$newsItem = $result->fetch();

			return $newsItem;
		}

	}
	
	public static function edit($id, $text, $status) {
        $db = Db::getConnection();
        
        $sql = "UPDATE tasks 
            SET text = :text, status = :status 
            WHERE id = :id";
        
        $result = $db->prepare($sql);                                  
        $result->bindParam(':id', $id, PDO::PARAM_INT);       
        $result->bindParam(':text', $text, PDO::PARAM_STR);    
        $result->bindParam(':status', $status, PDO::PARAM_INT); 
        return $result->execute();
    }

    public static function getTasksListSort($page, $sort) {
        //пагинация
        $perpage = 3;
        $page = intval($page);
        $offset = ($page - 1) * $perpage;

        $db = Db::getConnection();
        $tList = array();

		$result = $db->query('SELECT * FROM tasks ORDER BY '.$sort.' ASC LIMIT '.$perpage.' OFFSET '.$offset);

		$i = 0;
		while($row = $result->fetch()) {
			$tList[$i]['id'] = $row['id'];
			$tList[$i]['name'] = $row['name'];
			$tList[$i]['email'] = $row['email'];
			$tList[$i]['text'] = $row['text'];
			$tList[$i]['status'] = $row['status'];
			$i++;
		}

		return $tList;
    }

    public static function getTotalTask() {
        $db = Db::getConnection();
        $result = $db->query('SELECT count(id) AS count FROM tasks');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
		return $row['count'];
    }



}