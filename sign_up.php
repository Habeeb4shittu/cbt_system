<?php
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/src/request.php';
?>
<link rel="stylesheet" href="./assets/styles/css/register.css">
<form method='post'>
    <?php if (isset($err)) { ?>
        <div class="alert alert-danger err alert-dismissible fade show" role="alert">
            <?= $err ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <h1>Admin Login</h1>
    <div class="inputs">
        <input type="text" name="firstname" id="firstname" value="<?= isset($firstname) ? $firstname : "" ?>" placeholder="">
        <label for="firstname">Firstname</label>
    </div>
    <div class="inputs">
        <input type="text" name="lastname" id="lastname" value="<?= isset($lastname) ? $lastname : "" ?>" placeholder="">
        <label for="lastname">Lastname</label>
    </div>
    <div class="inputs">
        <input type="text" name="username" id="username" value="<?= isset($username) ? $username : "" ?>" placeholder="">
        <label for="username">Username</label>
    </div>
    <div class="inputs">
        <input type="email" name="email" id="email" value="<?= isset($email) ? $email : "" ?>" placeholder="">
        <label for="email">Email</label>
    </div>
    <div class="gender">
        <div class="male">
            <input type="radio" checked name="gender" id="male" value="male">
            <label for="male"><img src="./assets/images/male.jpeg" alt=""></label>
        </div>
        <div class="female">
            <input type="radio" name="gender" id="female" value="female">
            <label for="female"><img src="./assets/images/female.jpeg" alt=""></label>
        </div>
    </div>
    <div class="inputs">
        <input type="text" name="organisation" id="organisation" value="<?= isset($organisation) ? $organisation : "" ?>" placeholder="">
        <label for="organisation">Organisation Name</label>
    </div>
    <div class="inputs">
        <input type="password" name="password" id="password">
        <span class="show">
            <i class="fa fa-eye ico" aria-hidden="true"></i>
        </span>
        <label for="password">Password</label>
    </div>
    <button type="submit" name="admin_register">Sign Up</button>
</form>
<?php require_once __DIR__ . '/foot.php' ?>