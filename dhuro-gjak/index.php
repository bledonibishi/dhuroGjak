<?php include "inc/header.php"; ?>
<section class="banner">
  <div class="banner-image">
    <img src="images/banner.jpg" alt="donating blood" />
    <div class="banner-text">
      <h1>Dhuro qe te shpetosh jete</h1>
    </div>
  </div>
</section>
<section class="dhuruesit">
  <div class="dhuruesit-text">
    <h1>Dhuruesit</h1>
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
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</section>

<section class="info">
  <div class="slider">
    <div class="card-info">
      <div class="card-image">
        <img src="images/dont-just-take.jpg" alt="info">
      </div>
      <div class="card-title">
        <h3>Title</h3>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, odit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, ea? Lorem ipsum dolor sit.</p>
      </div>
    </div>
    <div class="card-info">
      <div class="card-image">
        <img src="images/donatoret.jpg" alt="info">
      </div>
      <div class="card-title">
        <h3>Title</h3>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, odit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, ea? Lorem ipsum dolor sit.</p>
      </div>
    </div>
    <div class="card-info">
      <div class="card-image">
        <img src="images/donatoret2.jpg" alt="info">
      </div>
      <div class="card-title">
        <h3>Title</h3>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, odit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, ea? Lorem ipsum dolor sit.</p>
      </div>
    </div>
    <div class="card-info">
      <div class="card-image">
        <img src="images/blood-bag.jpg" alt="info">
      </div>
      <div class="card-title">
        <h3>Title</h3>
      </div>
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, odit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, ea? Lorem ipsum dolor sit.</p>
      </div>
    </div>

  </div>
</section>
<?php include "inc/footer.php"; ?>