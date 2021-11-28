<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | Toko Online</title>
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
    <?php
        include "navbar.php";
    ?>
    <br></br><br><br><br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 style="text-align: center;">Your Product In Cart</h3>
            </div>
            <div class="card-body">
            <?php 
            if (@$_SESSION['cart'] == null) {
                echo "Keranjang kosong";
            }
            else {
            ?>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (@$_SESSION['cart'] as $key => $value) : ?>
                    <tr>
                        <td><?=($key+1)?></td>
                        <td><?=$value['nama_produk']?></td>
                        <td><?=$value['qty']?></td>
                        <td><a href="delete_cart.php?id=<?=$key?>" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this from your cart?')">Delete</a></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <a href="checkout.php" type="button" class="btn btn-primary">Checkout</a>
            <?php } ?>
            </div>
        </div>
    </div>
    


</body>
</html>