<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product | Toko Online</title>
    <!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body style="background-color:#99C1B9;">
<header>
        <?php include "navbar.php"?>
    </header><br><br>

    <main>
    <section class="py-5 text-center container">
        <div class="col-lg-12 col-md-14 mx-auto">
            <h1 class="fw-light">Product List</h1>
            <p class="lead text-muted">See the product list</p>
            <form method="POST" action="product.php" class="d-flex">
            
            </form>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php
          include "config.php";
          if (isset($_POST['cari'])) {
              $cari = $_POST['cari'];
              $query_product = mysqli_query($conn, "select * from produk where id_produk = '$cari' or nama_produk like '%$cari%' or deskripsi like '%$cari%'");
          }
          else{
              $query_product = mysqli_query($conn, "select * from produk");
          }
          while($data_product = mysqli_fetch_array($query_product)){
          ?>  
          <div class="col">
            <div class="card shadow-sm">
                <img src="../admin/images/<?=$data_product['foto_produk']?>" class="bd-placeholder-img card-img-top" width="75px" height="450px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"/></img>

                <div class="card-body">
                <p class="card-text"><b><?=$data_product['nama_produk']?></b></p>
                <p class="card-text"><?=$data_product['deskripsi']?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="single_product.php?id_produk=<?=$data_product['id_produk']?>" type="button" class="btn btn-sm btn-outline-secondary">Add To Cart</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
          <?php
          }
          ?>
        </div>
        </div>
    </div>

    </main>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>