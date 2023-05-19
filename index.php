<?php
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/src/request.php';
if (isset($_SESSION['email'])) {
    header('location: ./admin_dashboard.php');
}
?>
<link rel="stylesheet" href="./assets/styles/css/login.css">
<img src="./assets/images/pexels-kampus-production-5940845.jpg" alt="">
<form method='post'>
    <?php if (isset($err)) { ?>
        <div class="alert alert-danger err alert-dismissible fade show" role="alert">
            <?= $err ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <h1>Admin Login</h1>
    <div class="inputs">
        <input type="text" name="email" id="email" value="<?= isset($email) ? $email : "" ?>" placeholder="">
        <label for="email">Email</label>
    </div>
    <div class="inputs">
        <input type="password" name="password" id="password">
        <span class="show">
            <i class="fa fa-eye ico" aria-hidden="true"></i>
        </span>
        <label for="password">Password</label>
    </div>
    <button type="submit" name="admin_login">Login</button>
</form>
<?php require_once __DIR__ . '/foot.php' ?>