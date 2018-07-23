
   <?php
   // BDD ecommerce
   $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'root');

   // insertion dans product
   $req = $bdd->prepare('INSERT INTO product (name, price, stock, description, category, made_in) VALUES(?, ?, ?, ?, ?, ?)');
   $req->execute(array($_POST['name'], $_POST['price'], $_POST['stock'], $_POST['description'], $_POST['category'], $_POST['made_in']));

   // redirection vers product.php
   header('Location: newproduct.php');
  ?>
