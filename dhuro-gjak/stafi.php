<?php include "inc/header.php"; ?>

<div class="tabelat">
    <div class="dhuruesit-text">
        <h1>Stafi Yne</h1>
        <p>Secili dhurues i gjakut ka dike qe eshte falenderues per sherbimin e tij ndaj atyre ne nevoj.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo facere ducimus quaerat cupiditate iure in.
            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit. Lorem, ipsum. Lorem ipsum dolor sit amet.
        </p>
    </div>
    <div class="table">
        <table class="tabela">
            <thead>
                <tr>
                    <th>Emri</th>
                    <th>Mbiemri</th>
                    <th>Email</th>
                    <th>Adresa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mjeket = merrStafin();
                while ($mjeku = mysqli_fetch_assoc($mjeket)) {

                ?>
                    <tr>
                        <td><?php echo $mjeku["emri"] ?></td>
                        <td><?php echo $mjeku["mbiemri"] ?></td>
                        <td><?php echo $mjeku["email"] ?></td>
                        <td><?php echo $mjeku["adresa"] ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php if (isset($_SESSION['mjekuID']) && $_SESSION['roli'] == 1) : ?>
        <a href="#" class="link">Shto Staf</a>
    <?php else : ?>
    <?php endif ?>
</div>

<?php include "inc/footer.php"; ?>