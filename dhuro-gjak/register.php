<?php include "inc/header.php"; ?>
<div class="register-form">
    <div class="register-header">
        <h1>Register</h1>
    </div>
    <?php
    if (isset($_POST['regjistrohu'])) {
        shtoDonator($_POST['emri'], $_POST['mbiemri'], $_POST['adresa'], $_POST['email'], $_POST['telefoni'], $_POST['dtl'], $_POST['tipigjakut'], $_POST['password']);
    }
    ?>
    <form id="regjister" class="box2" action="" method="post">
        <div class="input-pair">
            <div class="input">
                <label>Emri: </label>
                <input type="text" id="emri" name="emri">
            </div>
            <div class="input">
                <label>Mbiemri: </label>
                <input type="text" id="mbiemri" name="mbiemri">
            </div>
        </div>
        <div class="input-pair">
            <div class="input">
                <label>Adresa: </label>
                <input type="text" id="adresa" name="adresa">
            </div>
            <div class="input">
                <label>Email: </label>
                <input type="email" id="email" name="email">
            </div>

        </div>
        <div class="input-pair">
            <div class="input">
                <label>Telefoni: </label>
                <input type="text" id="telefoni" name="telefoni">
            </div>
            <div class="input">
                <label>Date Lindja: </label>
                <input type="date" id="dtl" name="dtl">
            </div>

        </div>
        <div class="input-pair">
            <div class="input">
                <label>Tipi i Gjakut: </label>
                <select id="tipigjakut" name="tipigjakut">
                    <option value="A-">A-</option>
                    <option value="A+">A+</option>
                    <option value="B-">B-</option>
                    <option value="B+">B+</option>
                    <option value="0-">0-</option>
                    <option value="0+">0+</option>
                </select>
            </div>
            <div class="input">
                <label>Password: </label>
                <input type="password" id="password" name="password">
            </div>
        </div>
        <div class="regjistrohu">
            <input type="submit" name="regjistrohu" id="regjistrohu" value="Regjistrohu">
        </div>
    </form>
</div>
<?php include "inc/footer.php"; ?>