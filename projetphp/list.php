<!doctype html>
<html lang="en">
  <head>
    <title>liste promo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
    <nav id="colorenav" class="navbar navbar-light bg-light">
    <a id="colorelink" class="navbar-brand" href="accueil.php">Accueil</a>
  <a id="colorelink" class="navbar-brand" href="inscription.php">Inscription</a>
  <a id="colorelink" class="navbar-brand" href="liste.php">Liste apprenants</a>
  <a id="colorelink" class="navbar-brand" href="list.php"> Liste des Promos</a>
  <a id="colorelink" class="navbar-brand" href="ajouter.php">Ajoutez Promo</a>
  <a id="colorelink" class="navbar-brand" href="modifierpromo.php">Modifier Promo</a>
  <a id="colorelink" class="navbar-brand" href="modifierapp.php"> Modifier Apprenants</a>
  <!-- <a id="colorelink" class="navbar-brand" href="rechercheadmin.php">Rechercher </a> -->
  <!-- <a id="colorelink" class="navbar-brand" href="index.php">Deconnexion</a> -->
        </nav>
        <br> <br>
  <table border="1"  class="table table-bordered table-dark" >
        
        <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>mois</th>
        <th>annee</th>
        <th>nombre apprenant</th>
     
        
        
        </tr>
        
    <?php
  // 1 : on ouvre le fichier
  $file = fopen('promo.txt', 'r');

  // 2 : on fera ici nos opérations sur le fichier...

  // 3 : quand on a fini de l'utiliser, on ferme le fichier
 
while (!feof($file))
 {
    $str=fgets($file);
      $l = explode(',', $str);
     
      $code= $l[0];
      $nom = $l[1];
      $mois = $l[2];
      $annee= $l[3];
      $nombreapprenant=$l[4];
    
      //var_dump ($l);
?>
 
    <tr style='background-color: <?php echo $color; ?>'>
      <td> <?php echo $code; ?></td>
      <td> <?php echo  $nom; ?></td>
      <td> <?php echo   $mois ;?></td>
      <td> <?php echo   $annee;?></td>
      <td> <?php echo $nombreapprenant; ?></td>
   
    </tr>
 
<?php
  }
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