<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

 <body>
   <?php
   // BDD ecommerce
   $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'root');

   // insertion dans product
   $req = $bdd->prepare('INSERT INTO product (name, price, stock, description, category, made_in) VALUES(?, ?, ?, ?, ?, ?)');
   $req->execute(array($_POST['name'], $_POST['price'], $_POST['stock'], $_POST['description'], $_POST['category'], $_POST[made_in]));

   // redirection vers product.php
   header('Location: newproduct.php');
  ?>
