<?php
require_once __DIR__ . '/./Controllers/loginContoller.php';
require_once __DIR__ . '/./Controllers/adminRegistration.php';
session_start();
if (isset($_POST["admin_login"])) {
    array_pop($_POST);
    $email = $_POST['email'];
    $exist = ((new loginController())->check_exist($_POST));
    // print_r($exist);
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $err = "Input fields Cant be empty";
    } else if (empty($exist)) {
        $err = "Invalid email";
    } else if (!password_verify($_POST['password'], $exist[0]['password'])) {
        $err = "Incorrect Password";
    } else {
        $_SESSION['email'] = $_POST['email'];
        header('location: ../admin_dashboard.php');
    }
} elseif (isset($_POST["admin_register"])) {
    array_pop($_POST);
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $organisation = $_POST['organisation'];
    $exist = ((new adminRegistration())->check_email($_POST["email"]));
    if (
        empty($firstname) ||
        empty($lastname) ||
        empty($username) ||
        empty($email) ||
        empty($organisation) ||
        empty($_POST['gender']) ||
        empty($password)
    ) {
        $err = "Input fields cant be empty";
    } else if (!(empty($exist))) {
        $err = "Email already exists";
    } else {
        $check_org = $org_insert = ((new adminRegistration())->check_organisation($_POST["organisation"]));
        if (!(empty($check_org))) {
            $err = "Organisation already exists";
        } else {
            $org_insert = ((new adminRegistration())->add_organisation($_POST["organisation"]));
            $admin_insert = ((new adminRegistration())->insert($_POST));
            header('location: ../index.php');
        }
        // echo $org_insert;
    }
}
