<!doctype html>
<html lang="en">
  <head>
    <title>liste</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      body{
        background-color: blueviolet;
      }
        table{
          border: none;
        }
    
        table td{
          width:277px;
          padding: 12px 8px;
          /*float:left;*/
        }
        th{width:277px;}
        
    </style>
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
        <th>Prenom</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Date de naissance</th>
        <th>Statut</th>
        <th>Statut1</th>
        
        
        </tr>
        
    <?php
  // 1 : on ouvre le fichier
  $monfichier = fopen('liste.txt', 'r');

  // 2 : on fera ici nos opérations sur le fichier...

  // 3 : quand on a fini de l'utiliser, on ferme le fichier
 
while (!feof($monfichier)) {
    $str=fgets($monfichier);
      $l = explode(',', $str);
     
      $Code= $l[0];
      $Nom = $l[1];
      $Prenom = $l[2];
      $Telephone= $l[3];
      $Email=$l[4];
      $Date=$l[5];
      $Statut=$l[6];
      $Statut1=$l[7];
      //var_dump ($l);
?>
 
    <tr style='background-color: <?php echo $color; ?>'>
      <td> <?php echo $Code; ?></td>
      <td> <?php echo  $Nom; ?></td>
      <td> <?php echo   $Prenom ;?></td>
      <td> <?php echo   $Email;?></td>
      <td> <?php echo $Telephone; ?></td>
      <td> <?php echo  $Date; ?></td>
      <td> <?php echo  $Statut;?></td>
      
      <td><a href='exclure.php?code=<?php echo "$l[0]";?> '>
      <button class='btn btn-danger'> <?php echo "$l[7]"  ;?></button></a></td>
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