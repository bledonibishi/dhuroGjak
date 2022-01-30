<?php include "inc/header.php"; ?>

<div class="tabelat">
    <div class="dhuruesit-text">
        <h1>Marresit</h1>
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
                    <th>Tipi i Gjakut</th>
                    <th>Modifiko</th>
                    <th>Fshij</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $dhuruesit = merrDonatoret();
                while ($dhuruesi = mysqli_fetch_assoc($dhuruesit)) {

                ?>
                    <tr>
                        <td><?php echo $dhuruesi["emri"] ?></td>
                        <td><?php echo $dhuruesi["mbiemri"] ?></td>
                        <td><?php echo $dhuruesi["email"] ?></td>
                        <td><?php echo $dhuruesi["tipiGjakut"] ?></td>
                        <td>
                            <a href="modifikodhuruesit.php?did=<?php echo $dhuruesi["dhuruesiID"] ?>">Edit</a>
                        </td>
                        <td><a href="fshijdhuruesit.php?did=<?php echo $dhuruesi["dhuruesiID"] ?>">Fshij</a></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php if (isset($_SESSION['mjekuID']) && $_SESSION['roli'] == 1) : ?>
        <a href="#" class="link">Shto Pranues</a>
    <?php else : ?>
    <?php endif ?>


</div>

<?php include "inc/footer.php"; ?>