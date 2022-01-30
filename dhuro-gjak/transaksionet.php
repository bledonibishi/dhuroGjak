<?php include "inc/header.php"; ?>





<div class="trans-container">

    <?php
    $transaksionet = merrTransaksionet();
    while ($transaksioni = mysqli_fetch_assoc($transaksionet)) {

    ?>
        <div class="trans-card">
            <div class="register-header">
                <h3>TRANSAKSIONI</h1>
            </div>
            <div class="dhuruesi">
                <h4>Dhuruesi</h4>
                <h2>
                    <?= $transaksioni["dhuruesi"]; ?>
                </h2>

            </div>
            <div class="marresi">
                <h4>Marresi</h4>
                <h2>
                    <?= $transaksioni["marresi"]; ?>
                </h2>
            </div>
            <div class="dataa">
                <h4>Data</h4>
                <h3>
                    <?= $transaksioni["dataa"]; ?>
                </h3>
            </div>
        </div>
    <?php } ?>
</div>

<?php include "inc/footer.php"; ?>