<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <form action="ajouter1.php" method="POST">
      <input type="numero" name="code" placeholder="code"> <br> <br>
      <input type="text" name="nom" placeholder="nom"> <br> <br>
      <input type="month" name="mois" placeholder="mois"> <br> <br>
      <input type="annee" name="annee" placeholder="annee"> <br> <br>
      <input type="submit" name="ok" value="ajouter"> <br> <br>

    </form>
    <table>
      <tr>
        <td>code</td>
        <td>nom</td>
        <td>mois</td>
        <td>annee</td>
      </tr>
      <?php
      $code = htmlspecialchars($_POST('code'));
      $nom = htmlspecialchars($_POST['nom']);
      $mois = htmlspecialchars($_POST['mois']);
      $annee = htmlspecialchars($_POST['annee']);

      $file = fopen('promo.txt', 'r');
      $texte = 'bonjour';
      fwrite($file, $texte);
      $file = fopen('liste.txt', 'a+');
      while (!feop($file)) {
        $str = trim(fgets($file));
        $l = explode(',', $str);
        //var_dump($l);
        ?>
        <tr>
          <td> <?php echo $code; ?></td>
          <td> <?php echo $nom; ?></td>
          <td> <?php echo $mois; ?></td>
          <td> <?php echo $annee; ?></td></tr>
        <?php
      }
      fclose($file);
      ?>
        <?php
        if (isset($_POST['ok'])) {
          if ($code != $l[0]) {
            fwrite("\n" . $file, $code . ',' . $nom . ',' . $mois . ',' . $annee);
          } else {
            echo "existe deja";
          }
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