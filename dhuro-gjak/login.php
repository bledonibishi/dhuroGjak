<?php include "inc/header.php"; ?>
<div class="login-form">
    <?php
    if (isset($_POST['login'])) {
        $username = $_POST['email'];
        $password = $_POST['password'];
        login($username, $password);
    }
    ?>
    <form id="login" class="box" action="" method="post">
        <h1>Login</h1>
        <label>Email: </label>
        <input type="email" id="email" name="email">
        <label>Fjalekalimi: </label>
        <input type="password" id="password" name="password">
        <input type="submit" name="login" id="login" value="Kycu">
        <a href="register.php">Regjistrohu Ketu!</a>
    </form>
</div>

<?php include "inc/footer.php"; ?>