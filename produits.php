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
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

  <main class="container mt-5 mb-5">
   <section class="row">
    <div class="col-4 mb-5">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/car.jpg"/100px180/ alt="Car">
        <div class="card-body">
        <h5 class="card-title">Chevrolet Impala</h5>
        <p class="card-text"><?php echo $car ["name"]; ?></p>
        <a href="car.php" class="btn btn-primary">Je commande</a>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/xbox.jpg"/100px180/ alt="xbox">
        <div class="card-body">
        <h5 class="card-title">X-Box</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Je commande</a>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/mac.jpg"/100px180/ alt="mac book pro">
        <div class="card-body">
        <h5 class="card-title">Mac-Book-Pro</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Je commande</a>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/vtt.jpg"/100px180/ alt="vtt">
        <div class="card-body">
        <h5 class="card-title">VTT</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Je commande</a>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/montre.jpg"/100px180/ alt="rolex">
        <div class="card-body">
        <h5 class="card-title">Rolex 1968</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Je commande</a>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="img/robe.jpg"/100px180/ alt="robe bleue">
        <div class="card-body">
        <h5 class="card-title">Robe bleue</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Je commande</a>
        </div>
      </div>
    </div>
   </section>
  </main>

<!-- tableau des produits -->
<?php
$products = [
  [
    "id" => 0,
    "name" => "Chevrolet Impala",
    "price" => 35000,
    "stock" => false,
    "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "category" => "car",
    "made_in"=> "USA"
  ],
  [
    "id" => 1,
    "name" => "Xbox",
    "price" => 500,
    "stock" => true,
    "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "category" => "video games",
    "made_in"=> "China"
  ],
  [
    "id" => 2,
    "name" => "MacBook Pro",
    "price" => 2000,
    "stock" => true,
    "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "category" => "computer",
    "made_in"=> "China"
  ],
  [
    "id" => 3,
    "name" => "VTT randonnée",
    "price" => 450,
    "stock" => true,
    "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "category" => "sport",
    "made_in"=> "France"
  ],
  [
    "id" =>4,
    "name" => "Rolex 1968",
    "price" => 15000,
    "stock" => true,
    "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "category" => "watch",
    "made_in"=> "Switzerland"
  ],
  [
    "id" =>5,
    "name" => "A blue dress",
    "price" => 150,
    "stock" => false,
    "description" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "category" => "clothes",
    "made_in"=> "Britain"
  ]
];

 ?>






  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <!-- bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
