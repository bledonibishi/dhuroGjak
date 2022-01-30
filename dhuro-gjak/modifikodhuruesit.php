<?php include "inc/header.php"; ?>

<div class="fshij">
    <?php
    if (isset($_GET['did'])) {
        $did = $_GET['did'];
        $dhuruesi = merrDhuruesin($did);
        if ($dhuruesi) {
            $dhuruesii = mysqli_fetch_assoc($dhuruesi);
            $dhuruesiID = $dhuruesii['dhuruesiID'];
            $emri = $dhuruesii['emri'];
            $mbiemri = $dhuruesii['mbiemri'];
            $telefoni = $dhuruesii['telefoni'];
            $email = $dhuruesii['email'];
            $adresa = $dhuruesii['adresa'];
            $dtl = $dhuruesii['dtl'];
            $tipigjakut = $dhuruesii['tipiGjakut'];
            $password = $dhuruesii['password'];
        }
    }
    if (isset($_POST['modifiko'])) {
        $dhuruesiid = $_POST['dhuruesiid'];
        modifikoDhuruesin($_POST['dhuruesiid'], $_POST['emri'], $_POST['mbiemri'], $_POST['adresa'], $_POST['email'], $_POST['telefoni'], $_POST['dtl'], $_POST['tipigjakut'], $_POST['password']);
    }

    ?>
    <form id="regjister" class="box2" action="" method="post">
        <input type="hidden" id="dhuruesiid" name="dhuruesiid" value="<?php if (!empty($dhuruesiID)) echo $dhuruesiID; ?>">
        <label>Emri: </label>
        <input type="text" id="emri" name="emri" value="<?php if (!empty($emri)) echo $emri; ?>">
        <label>Mbiemri: </label>
        <input type="text" id="mbiemri" name="mbiemri" value="<?php if (!empty($mbiemri)) echo $mbiemri; ?>">
        <label>Telefoni: </label>
        <input type="text" id="telefoni" name="telefoni" value="<?php if (!empty($telefoni)) echo $telefoni; ?>">
        <label>Email: </label>
        <input type="email" id="email" name="email" value="<?php if (!empty($email)) echo $email; ?>">
        <label>Adresa: </label>
        <input type="text" id="adresa" name="adresa" value="<?php if (!empty($adresa)) echo $adresa; ?>">
        <label>Data Lindjes: </label>
        <input type="date" id="dtl" name="dtl" value="<?php if (!empty($dtl)) echo $dtl; ?>">
        <label>Tipi Gjakut: </label>
        <input type="text" id="tipigjakut" name="tipigjakut" value="<?php if (!empty($tipigjakut)) echo $tipigjakut; ?>">
        <label>Password: </label>
        <input type="password" id="password" name="password" value="<?php if (!empty($password)) echo $password; ?>">

        <input type="submit" name="modifiko" id="modifiko" value="Modifiko">
    </form>
</div>
<?php include "inc/footer.php"; ?>