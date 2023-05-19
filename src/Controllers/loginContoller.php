<?php
require_once __DIR__ . '/../Models/Database.php';
class loginController
{
    public function __construct()
    {
    }
    public function check_exist($data)
    {
        $user = ((new Database())->select("admin", $data));
        return $user;
    }
}
