<?php include "inc/sqlFunctions.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <title>Dhuro Gjak</title>
</head>

<body>
    <header>
        <div class="sm-hd">
            <div class="container">
                <div class="small-nav">
                    <div class="contact">
                        <i class="far fa-address-book"></i>
                        <strong>Contact: </strong>
                        <p>Vushtrri, Avni Rrustemi</p>
                        <i class="fas fa-phone-alt"></i>
                        <strong>Call us:</strong>
                        <p>+383442321</p>
                    </div>
                    <div class="social-icons">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <div class="nav-items">
                    <div class="logo">DHURO <strong>GJAK</strong></div>
                    <div class="links">
                        <a href="index.php" class="link">Ballina</a>
                        <?php ?>
                        <?php if (isset($_SESSION['mjekuID']) && $_SESSION['roli'] == 1) : ?>
                            <a href="dhuruesit.php" class="link">Donatoret</a>
                            <a href="pranuesit.php" class="link">Pranuesit</a>
                            <a href="stafi.php" class="link">Stafi</a>
                            <a href="transaksionet.php" class="link">Transaksionet</a>
                            <a href="logout.php" class="link">Logout</a>
                        <?php elseif (isset($_SESSION['mjekuID'])) : ?>
                            <a href="dhuruesit.php" class="link">Donatoret</a>
                            <a href="pranuesit.php" class="link">Pranuesit</a>
                            <a href="stafi.php" class="link">Stafi</a>
                            <a href="logout.php" class="link">Logout</a>
                        <?php else : ?>
                            <a href="stafi.php" class="link">Stafi</a>
                            <a href="login.php" class="link">Login</a>
                            <a href="register.php" class="link">Register</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>