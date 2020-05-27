<?php
require_once 'database.php';

class User
{
    private $id;
    public function insert($firstname, $lastname, $username, $email, $photo, $password)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->exec('INSERT INTO user SET username="' . $username . '", password="' . $password . '", email="' . $email . '", firstname="' . $firstname . '", lastname="' . $lastname . '", photo="' . $photo . '"');
        var_dump($req);
    }

    public function fetch($email, $psw)
    {
        $id = 0;

        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT id FROM user WHERE email="' . $email . '" and password="' . $psw . '"');
        $data = $req->fetchColumn();

        if ($data != "") {
            $id = $data;
        }
        return $id;
    }

    public function select($id)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('SELECT * FROM user WHERE id="' . $id . '"');
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    }

    public function update($id, $username, $email, $firstname, $lastname)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('UPDATE user SET username="' . $username . '" WHERE id="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        $req = $pdo->query('UPDATE user SET email="' . $email . '" WHERE id="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        $req = $pdo->query('UPDATE user SET firstname="' . $firstname . '" WHERE id="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        $req = $pdo->query('UPDATE user SET lastname="' . $lastname . '" WHERE id="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function password($id, $password)
    {
        var_dump($password);
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('UPDATE user SET password="' . $password . '"WHERE id="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function photo($id, $photo)
    {
        $db = new Database;
        $pdo = $db->connect();
        $req = $pdo->query('UPDATE user SET photo="' . $photo . '"WHERE id="' . $id . '"');
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
}
