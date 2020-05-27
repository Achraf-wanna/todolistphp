<?php

require_once 'database.php';
class Todolist
{
    private $id;

    public function insert($name, $color, $id)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->exec('INSERT INTO todolist SET name="' . $name . '", color="' . $color . '", user_id="' . $id . '"');
    }

    public function select($id)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT * FROM todolist WHERE user_id="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function update($id, $name)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('UPDATE todolist SET name="' . $name . '" WHERE id="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function color($id, $color)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('UPDATE todolist SET color="' . $color . '" WHERE id="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function delete($id)
    {
        echo $id;
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->prepare('DELETE FROM todolist WHERE id="' . $id . '"');
        $req->execute();
    }
}
