<?php 
$trouve=false;
 if(isset($_POST['ok'])){

$code=rand(1,500);

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$date=$_POST['date'];
$statut=$_POST['statut'];

$monfic=fopen('liste.txt','a+');
while($str=fgets($monfic)){
  
  $col=explode(',',$str);
  $Code= $col[0];
      $Nom = $col[1];
      $Prenom = $col[2];
      $Telephone= $col[3];
      $Email=$col[4];
      $Date=$col[5];
      $Statut=$col[6];
  //var_dump($monfic);
  if ($code==$col[0]) {
    $trouve=true;
    echo "verifier les champs!!!";
    # code...
  }
}
  if($trouve==false){
    
    fwrite($monfic,$code.','.$nom.','.$prenom.','.$email.','.$tel.','.$date.','.$statut."\n" );
  
  }

}fclose($monfic);

    
?>

<!doctype html>
<html lang="en">
  <head>
    <title>inscription</title>
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
   
<form action="" method="POST">

 
  <br>
  <br>
  <input type="text" name="nom" placeholder="nom">
  <br>
  <br>
  <input type="text" name="prenom" placeholder="Prenom">
  <br><br>
 
  <input type="text" name="email" placeholder="Email">
  <br> <br>
  <input type="tel" name="tel" placeholder="Tel">
  <br> <br>
  <input type="date" name="date" placeholder="date">
  <br> <br>
  
        
        
  <?php
  echo "<select name='statut' id='statut'>";
  $file=fopen('promo.txt','r');
  while($str=fgets($file)){
    $col=explode(',',$str);
     
    echo"<option>$col[1]</option>";
  }
  fclose($file);
 echo" </select>";
  ?>
  
  <br> <br>
  <input type="submit" value="enregistrer" name="ok">
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
        
 
    <?php
    $monfic=fopen('liste.txt','a+');
    while($str=fgets($monfic)){
      $d=explode(',',$str);
      $Code= $d[0];
      $Nom = $d[1];
      $Prenom = $d[2];
      $Telephone= $d[3];
      $Email=$d[4];
      $Date=$d[5];
      $Statut=$d[6];
      
      ?>
 </tr>
        

        <tr style='background-color: <?php echo $color; ?>'>
             <td> <?php echo $Code; ?></td>
             <td> <?php echo  $Nom; ?></td>
             <td> <?php echo   $Prenom ;?></td>
             <td> <?php echo   $Email;?></td>
             <td> <?php echo $Telephone; ?></td>
             <td> <?php echo  $Date; ?></td>
             <td> <?php echo  $Statut;?></td>
           
           </tr>

<?php
}fclose($monfic);
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