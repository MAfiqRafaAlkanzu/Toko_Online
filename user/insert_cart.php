<?php
    session_start();
    if ($_POST) {
        include "config.php";

        $query_get_product=mysqli_query($conn, "SELECT * FROM produk where id_produk = '".$_POST['id_produk']."'");
        $data_produk = mysqli_fetch_array($query_get_product);

        $_SESSION['cart'][]=array(
            'id_produk' => $data_produk['id_produk'],
            'nama_produk' => $data_produk['nama_produk'],
            'qty' => $_POST['jumlah_beli']
        );
    }
    header('location: cart.php');
?>