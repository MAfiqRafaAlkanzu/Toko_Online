<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail | Toko Online</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body style="background-color:#99C1B9;">
    <?php
        include "navbar.php";
        include "config.php";
        $query_detail_product = mysqli_query($conn, "SELECT * FROM produk where id_produk = '".$_GET['id_produk']."'");
        $data_product = mysqli_fetch_array($query_detail_product);
    ?>
    <br><br><br><br><br>
    <main class="container">
    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Buy Product</h1>
        </div>
    </section>

    <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="../admin/images/<?=$data_product['foto_produk']?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <form action="insert_cart.php?" method="POST">
                <input type="hidden" name="id_produk" value="<?=$data_product['id_produk']?>">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <td>Product Name</td>
                            <td><?=$data_product['nama_produk']?></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><?=$data_product['deskripsi']?></td>
                        </tr>
                        <tr>
                            <td>Amount</td>
                            <td><input type="number" name="jumlah_beli" value="1"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" class="btn btn-success" value="Cart"></td>
                        </tr>
                    </thead>
                </table>
            </form>
            </div>
            </div>
        </div>
    </div>

    </main>
    
</body>
</html>