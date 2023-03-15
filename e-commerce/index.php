<?php 

    $conn = mysqli_connect('localhost', 'root');
    mysqli_select_db($conn, 'vanilla_php');

    $sql = 'SELECT * FROM products WHERE featured=1';
    $featured = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photofolio</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./css/styles.css">

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tech Products</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-2">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Laptops</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Phones</a></li>
          </ul>
        </li>
      </ul>
     
    </div>
  </div>
</nav>

<div >
 
        <div class="row">
            <h2 class="text-center">Top products</h2>
            <?php
             while($product = mysqli_fetch_assoc($featured)):
            ?>

            <div class="col-md-3">
                <h4 class="text-center"> <?= $product['title']; ?></h4>
                <img src="<?= $product['image']; ?>" alt="<?= $product['title']; ?>" />
                <p class="lprice">Ksh. <?= $product['price']; ?></p>
                <a href="details.php">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#details-1">More</button>
                </a>
            </div>
            <?php endwhile ?>
        </div>
   

</div>


<!-- bootstrap js -->
<!-- <script src="./js/bootstrap.min.js"></script> -->
<script src="./js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->

    
</body>
</html>