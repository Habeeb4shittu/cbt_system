<?php require_once __DIR__ . '/head.php' ?>
<link rel="stylesheet" href="./assets/styles/css/login.css">
<img src="./assets/images/admin-login.jpg" alt="">
<form method='post'>
    <h1>Student Login</h1>
    <div class="inputs">
        <label for="email">Username</label>
        <input type="email" name="email" id="email">
    </div>
    <div class="inputs">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <span class="show">
            <i class="fa fa-eye ico" aria-hidden="true"></i>
        </span>
    </div>
    <button type="submit">Login</button>
</form>
<?php require_once __DIR__ . '/foot.php' ?>