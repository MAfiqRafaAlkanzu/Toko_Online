<?php
if($_POST){
$id_pelanggan=$_POST['id_pelanggan'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$username=$_POST['username'];
$password=$_POST['password'];

    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='ubah_pelanggan.php';</script>";
        } elseif(empty($alamat)){
            echo "<script>alert('alamat tidak boleh kosong');location.href='ubah_pelanggan.php';</script>";
        }elseif(empty($telp)){
            echo "<script>alert('telp tidak boleh kosong');location.href='ubah_pelangan.php';</script>";
        }elseif(empty($username)){
            echo "<script>alert('username tidak boleh kosong');location.href='ubah_pelanggan.php';</script>";
        }elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='ubah_pelanggan.php';</script>";
    } else {
include "config.php";

$update=mysqli_query($conn,"update pelanggan set nama='".$nama."',alamat='".$alamat."',telp='".$telp."' ,username='".$username."' ,password='".md5($password)."' where id_pelanggan = '".$id_pelanggan."' ") or die(mysqli_error($koneksi));
if($update){
    echo "<script>alert('Sukses update produk');location.href='profil.php';</script>";
} else {
    echo "<script>alert('Gagal update produk');location.href='profil.php?id_pelanggan=".$id_pelanggan."';</script>";
    }
  }
}
?>