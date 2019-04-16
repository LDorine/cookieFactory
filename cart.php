<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
  <div class="row">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Article</th>
          <th scope="col">Quantité</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>M&M's cookies</td>
          <td><?= $_SESSION['m&m']; ?></td>
        </tr>
        <tr>
          <td>Chocolate chips</td>
          <td><?= $_SESSION['chips']; ?></td>
        </tr>
        <tr>
          <td>Pecan nuts</td>
          <td><?= $_SESSION['pecan']; ?></td>
        </tr>
        <tr>
          <td>Chocolate cookie</td>
          <td><?= $_SESSION['cookie']; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="row">
    <a href="index.php">retour à l'accueil</a>
  </div>
</section>

<?php require 'inc/foot.php'; ?>