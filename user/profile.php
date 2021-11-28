<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/main.css">
    <title>Profile | Toko Online</title>
</head>
<body style="background-color:#76949F;">
<?php
        include "navbar.php";
        include "config.php";
        $query_pelanggan = mysqli_query($conn, "select * from pelanggan");
        $data_pelanggan = mysqli_fetch_array($query_pelanggan);
    ?>
     <br></br><br>
    <div class="container">
        <div class="card">
            <h3 class="card-header">Ubah Profil</h3>
            <div class="card-body">
                <form method="POST" action="change_profile.php">
                    <input type="hidden" name="id_pelanggan" value="<?=$data_pelanggan['id_pelanggan']?>">
                    <div class="mb-3">
                        <label for="nama_pelanggan" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_pelanggan" value="<?=$data_pelanggan['nama']?>" placeholder="Ubah Nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat" row="3" required><?=$data_pelanggan['alamat']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Nomor Telepon</label>
                        <input type="tel" c;ass="form-control" name="telp" value="<?=$data_pelanggan['telp']?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?=$data_pelanggan['username']?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>