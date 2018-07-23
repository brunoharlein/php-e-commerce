<?php
// BDD ecommerce
$bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'root');

// insertion dans product
$req = $bdd->prepare('DELETE FROM product WHERE name VALUES(?)');
$req->execute(array($_POST['name']));

// redirection vers delete.php
header('Location: delete.php');
?>
