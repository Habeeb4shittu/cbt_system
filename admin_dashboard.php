<title>Admin Dashboard</title>
<?php
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/./src/Controllers/loginContoller.php';
session_start();
$details = ((new loginController())->check_exist($_SESSION))[0];
// print_r($details);
$username = $details['username'];
if (!isset($_SESSION['email'])) {
    header('location: ./index.php');
}
?>
<link rel="stylesheet" href="./assets/styles/css/admin.css">
<aside>
    <span class="close">
        <i class="fa fa-times ico" aria-hidden="true"></i>
    </span>
    <div class="top">
        <div class="details">
            <img src="./assets/images/<?= $details['gender'] ?>.jpeg" alt="">
            <h3><?= strtoupper($username) ?></h3>
        </div>
        <div class="menu">
            <div class="menu-item">
                <a href="./admin_dashboard.php" class="menu-toggler">
                    Dashboard
                </a>
            </div>
            <div class="menu-item">
                <button class="menu-toggler">
                    Student
                    <span>
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </span>
                </button>
                <div class="links-wrapper">
                    <div class="menu-links">
                        <a>Add Student</a>
                        <a>View Students</a>
                    </div>
                </div>
            </div>
            <div class="menu-item">
                <button class="menu-toggler">
                    Exam
                    <span>
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </span>
                </button>
                <div class="links-wrapper">
                    <div class="menu-links">
                        <a>Add Exam</a>
                        <a>View Ongoing Exams</a>
                        <a>View Scores</a>
                        <a>Delete Exam</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="settings">
        <button>
            Settings
            <i class="fa fa-wrench" aria-hidden="true"></i>
        </button>
        <button class="logout">
            Logout
            <i class="fas fa-sign-out-alt"></i>
        </button>
    </div>
</aside>
<header>
    <div class="toggler">
        <img src="./assets/images/<?= $details['gender'] ?>.jpeg" alt="">
        <i class="fa fa-angle-down angle" aria-hidden="true"></i>
    </div>
    <h2><?= $details['organisation'] ?></h2>
    <a href="./admin_dashboard.php"><i class="fa fa-graduation-cap logo" aria-hidden="true"></i></a>
</header>
<main>
    <!-- <input type="range" max="255" class="r">
    <input type="range" max="255" class="g">
    <input type="range" max="255" class="b"> -->
</main>
<?php require_once __DIR__ . '/foot.php' ?>
<script src="./assets/scripts/admin.js"></script>