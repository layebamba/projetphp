<?php
          $code_f=$_POST['code'];
          $nom_f=$_POST['nom'];
          $mois_f=$_POST['mois'];
          $annee_f=$_POST['annee'];
          $nbreapp_f=$_POST['nbreapp'];
        
            $file=fopen('promo.txt','r');
            while($str=fgets($file)){
                $line=explode(',',$str);
                if ($code == $line[0]) {
                    $l=$code.','.$nom.','.$mois.','.$annee;
                    echo $l;
                }
                else{
                    $l=$str;
                }
                $az=$az.$l;
               // echo $az;
            }
            fclose($file);

            $file=fopen('promo.txt','w+');
            fwrite($file,$az);
            fclose($file);
         

          ?>


<!doctype html>
<html lang="en">
  <head>
    <title>modifier promo</title>
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
  <!-- <a id="colorelink" class="navbar-brand" href="rechercheadmin.php">Rechercher </a> -->
  <!-- <a id="colorelink" class="navbar-brand" href="index.php">Deconnexion</a> -->
        </nav>
        <br> <br>
          <form method="POST">
              <input type="text" name="code"placeholder="code"> <br> <br>
              <input type="text" name="nom"placeholder="nom"><br><br>
              <input type="mois" name="mois"placeholder="mois"><br><br>
              <input type="annee" name="annee"placeholder="annee"><br><br>
              <input type="nbre" name="nbreapp"placeholder="nombre apprenant"><br><br>
              <input type="submit" name="ok"value="modifier">
          </form>
          <br><br>
          <table border="1"  class="table table-bordered table-dark" >
    <tr>
      <td>code</td>
      <td>nom</td>
      <td>mois</td>
      <td>annee</td>
      <td>nombre apprenant</td>
    </tr>

      <?php
      $file_=fopen('promo.txt','r');
      while($str=fgets($file)){
          $line_=explode(',',$str);
          $code_= $line_[0];
          $nom_= $line_[1];
          $mois_= $line_[2];
          $annee_= $line_[3];
          $nbrapp_=$line_[4];
      ?>
      <tr style='background-color: <?php echo $color; ?>'>
      <td> <?php echo $code_; ?></td>
      <td> <?php echo  $nom_; ?></td>
      <td> <?php echo   $mois_;?></td>
      <td> <?php echo   $annee_;?></td>
      <td> <?php echo   $nbreapp_;?></td>
     
    </tr>
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