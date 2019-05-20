<?php
$code = $_POST['code'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$date = $_POST['date'];
$statut = $_POST['statut'];
$file = fopen('liste.txt', 'r');

while ($str = fgets($file)) {
  $line = explode(',', $str);
  if ($code == $line[0]) {

    $l = $code . ',' . $nom . ',' . $prenom . ',' . $email . ',' . $tel . ',' . $date . ',' . $statut . "\n";
    // echo $l;
  } else {
    $l = $str;
  }
  $a = $a . $l;
  //echo $a;

}
fclose($file);



$file = fopen('liste.txt', 'w+');
fwrite($file, $a);
fclose($file);
?>


<!doctype html>
<html lang="en">

<head>
  <title>modifier apprenant</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">

    <nav id="colorenav" class="navbar navbar-blue bg-blue">
    <a id="colorelink" class="navbar-brand" href="accueil.php">Accueil</a>
      <a id="colorelink" class="navbar-brand" href="inscription.php">Inscription</a>
      <a id="colorelink" class="navbar-brand" href="liste.php">Liste apprenants</a>
      <a id="colorelink" class="navbar-brand" href="list.php"> Liste des Promos</a>
      <a id="colorelink" class="navbar-brand" href="ajouter.php">Ajoutez Promo</a>
      <a id="colorelink" class="navbar-brand" href="modifierpromo.php">Modifier Promo</a>
      <a id="colorelink" class="navbar-brand" href="modifierapp.php"> Modifier Apprenants</a>
      <!--  -->
      <!-- <a id="colorelink" class="navbar-brand" href="index.php">Deconnexion</a> -->
    </nav>
    <br> <br>

    <form method="POST" >
      <input type="text" name="code" placeholder="code"> <br><br>
      <input type="text" name="nom" placeholder="nom"> <br><br>
      <input type="text" name="prenom" placeholder="prenom"><br><br>
      <input type="text" name="email" placeholder=" email"><br><br>
      <input type="telephone" name="tel" placeholder=" tel"><br><br>
      <input type="date" name="date" placeholder=" date"><br><br>
      <?php
      echo "<select name='statut' id='statut'>";
      $file = fopen('promo.txt', 'r');
      while ($str = fgets($file)) {
        $col = explode(',', $str);

        echo "<option>$col[1]</option>";
      }
      fclose($file);
      echo " </select>";
      ?>
      <br><br>
      <input type="submit" value="validez modifier" name="ok"><br><br>
    </form>
    <br> <br>
<table border="1"  class="table table-bordered table-dark" >
<tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Date de naissance</th>
        <th>Statut</th>
        <th>Statut1</th>

    <?php
    $file = fopen('liste.txt', 'r');

    while ($str = fgets($file)) {
      $line = explode(',', $str);

        $code = $line[0];
        $nom = $line[1];
        $prenom=$line[2];
        $email=$line[3];
        $tel = $line[4];
        $date =$line[5];
        $statut=$line[6];
        $tatut1=$line[7];
        ?>
        <?php
      }fclose($file);
        ?>


    </table>

      </div>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    </html>