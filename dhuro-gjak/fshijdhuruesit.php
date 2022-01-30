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
        }
    }
    if (isset($_POST['fshij'])) {
        $dhuruesiid = $_POST['dhuruesiid'];
        fshijDonatoret($dhuruesiid);
    }
    ?>
    <form id="regjister" class="box2" action="" method="post">
        <input type="hidden" id="dhuruesiid" name="dhuruesiid" value="<?php if (!empty($dhuruesiID)) echo $dhuruesiID; ?>">
        <label>Emri: </label>
        <input type="text" id="emri" name="emri" readonly value="<?php if (!empty($emri)) echo $emri; ?>">
        <label>Mbiemri: </label>
        <input type="text" id="mbiemri" name="mbiemri" readonly value="<?php if (!empty($mbiemri)) echo $mbiemri; ?>">
        <label>Telefoni: </label>
        <input type="text" id="telefoni" name="telefoni" readonly value="<?php if (!empty($telefoni)) echo $telefoni; ?>">
        <label>Email: </label>
        <input type="email" id="email" name="email" readonly value="<?php if (!empty($email)) echo $email; ?>">
        <input type="submit" name="fshij" id="fshij" value="Fshij">
    </form>
</div>
<?php include "inc/footer.php"; ?>