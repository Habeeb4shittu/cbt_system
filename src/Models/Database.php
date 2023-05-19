<?php

class Database
{
    protected $table;
    protected $connection;
    public function __construct()
    {
        $this->connect();
    }
    public function connect()
    {
        try {
            $db_connect = new PDO("mysql:dbname=cbt;host=localhost;", "root", "");
            $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection = $db_connect;
        } catch (PDOException $e) {
            echo "Error During connection {$e->getMessage()}";
        }
    }
    public function select($table_name, $data)
    {
        $query = "SELECT * FROM $table_name where email = :email";
        $stmt = $this->connection->prepare($query);
        $stmt->execute([
            ":email" => $data['email']
        ]);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function check_email($table_name, $email)
    {
        $query = "SELECT * FROM $table_name where email = :email";
        $stmt = $this->connection->prepare($query);
        $stmt->execute([
            ":email" => $email
        ]);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function check_organisation($data)
    {
        $query = "SELECT * FROM organisations where organisation_name = :org";
        $stmt = $this->connection->prepare($query);
        $stmt->execute([
            ":org" => $data
        ]);
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function insert_organisation($data)
    {
        $query = "INSERT INTO organisations(organisation_name) VALUES(:organisation_name)";
        $stmt = $this->connection->prepare($query);
        $stmt->execute([
            ":organisation_name" => $data
        ]);
        $res = $stmt;
        return $res;
    }
    public function admin_insert($data)
    {
        $query = "INSERT INTO admin(firstname, lastname, username, email, gender, password, organisation) VALUES(:firstname, :lastname, :username, :email, :gender, :password, :organisation)";
        $stmt = $this->connection->prepare($query);
        $stmt->execute([
            ":firstname" => $data["firstname"],
            ":lastname" => $data["lastname"],
            ":username" => $data["username"],
            ":email" => $data["email"],
            ":gender" => $data["gender"],
            ":password" => password_hash($data["password"], PASSWORD_DEFAULT),
            ":organisation" => $data["organisation"],
        ]);
        $res = $stmt;
        return $res;
    }
}
