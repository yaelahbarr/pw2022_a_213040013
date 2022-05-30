<?php
require 'functions.php';

//query mhs berdasarkan id
$id_pasien = $_GET["id_pasien"];
$pasien = query("SELECT * FROM pasien WHERE id_pasien = $id_pasien")[0]; 

if(isset($_POST["ubah"])) {
    if(ubahpasien($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'pasien.php'
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="side-menu">
        <div class="tab-name">
            <h1><img src="../img/kisspng-umbrella-clip-art-5b3008645136e8.6524105115298745323327.png" alt="">SC.Admin</h1>
        </div>
        <ul>
            <li><a href="admin.php"><span>Dashboard</span></a> </li>
            <li><a href="pasien.php"><span>Pasien</span></a> </li>
            <li><a href="tenmed.php"><span>Tenaga Medis</span></a> </li>
            <li><a href="jenisvaksin.php"><span>Jenis Vaksin</span></a> </li>
            <li><a href="alatmedis.php"><span>Alat Medis</span></a>  </li>
            <li><a href="sertifikat.php"><span>Sertifikat</span></a></li>
            <li><a href="user.php"><span>Profile</span> </a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="../img/magnifying-glass-solid.svg" alt=""></button>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-2">
                <div class="daftar-pasien" style="margin-top:2rem;">
                    <div class="title">
                        <h2>Ubah Data Pasien</h2>
                    </div>
                    <form action="" method="post">
                        <input type="hidden" name="id_pasien" value="<?= $pasien["id_pasien"]; ?>">
                        <div class="mb-3 row mt-5">
                            <label for="nama" class="col-sm-2 col-form-label"> Nama Pasien</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" required name="nama_pasien" value="<?= $pasien["nama_pasien"]; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="date" class="col-sm-2 col-form-label"> Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="date" required name="tgl_lahir" value="<?= $pasien["tgl_lahir"]; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-2 col-form-label"> Alamat</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="alamat" required name="alamat"><?= $pasien["alamat"]; ?></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row mt-5">
                            <label for="gambar" class="col-sm-2 col-form-label"> Gambar</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="gambar" required name="gambar" value="<?= $pasien["gambar"]; ?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm"  name="ubah">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>