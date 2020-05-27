<?php
require_once 'database.php';
class Task
{
    public function insert($todolist_id, $taskText)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->exec('INSERT INTO task SET taskText="' . $taskText . '", todolist_id="' . $todolist_id . '"');
    }

    public function select($id)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT * FROM task WHERE todolist_id="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function update($id, $taskText)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('UPDATE task SET taskText="' . $taskText . '" WHERE id="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function statue($id, $statue)
    {
        $db = new Database;
        $pdo = $db->connect();
        if ($statue == 1) {
            $req = $pdo->query('UPDATE task SET done=0 WHERE id="' . $id . '"');
            $data = $req->fetchAll(PDO::FETCH_OBJ);
        } else {
            $req = $pdo->query('UPDATE task SET done=1 WHERE id="' . $id . '"');
            $data = $req->fetchAll(PDO::FETCH_OBJ);
        }
        return $data;
    }

    public function delete($id)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->prepare('DELETE FROM task WHERE id="' . $id . '"');
        $req->execute();
    }
}
