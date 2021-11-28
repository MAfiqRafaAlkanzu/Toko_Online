<?php
 session_start();
 include "config.php";
 $cart= $_SESSION['cart'];

 if(count($cart)>0){

       $query=mysqli_query($conn,"INSERT INTO `transaksi`(`id_transaksi`,`id_pelanggan`, `tgl_transaksi`, `id_petugas`) 
       VALUES('','".$_SESSION['id_pelanggan']."','".date('Y-m-d')."',1)");

if ($query) {
       $id=mysqli_insert_id($conn);
       foreach ($cart as $key_produk => $val_produk) {
       mysqli_query($conn,"INSERT into detail_transaksi (id_detail_transaksi,id_transaksi,id_produk,qty,subtotal) 
       value('','".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."','".$val_produk['harga']."')");
      }
 unset($_SESSION['cart']);
 echo '<script>alert("Anda berhasil membeli produk");location.href="transactiton.php"</script>';
 }else{
       echo "gagal";
 }
}
?>