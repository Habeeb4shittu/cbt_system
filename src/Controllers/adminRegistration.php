<?php
require_once __DIR__ . '/../Models/Database.php';
class adminRegistration
{
    public function __construct()
    {
    }
    public function check_email($email)
    {
        $user = ((new Database())->check_email("admin", $email));
        return $user;
    }
    public function add_organisation($organisation)
    {
        $insert = ((new Database())->insert_organisation($organisation));
        return $insert;
    }
    public function check_organisation($organisation)
    {
        $check = ((new Database())->check_organisation($organisation));
        return $check;
    }
    public function insert($data)
    {
        $insert = ((new Database())->admin_insert($data));
        return $insert;
    }
}
