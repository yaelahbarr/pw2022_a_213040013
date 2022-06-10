<?php
// require_once '../user/functions.php';
// session_start();
// // echo $_SESSION['role'];
// if (!isset( $_SESSION['role'])) {  
//     echo " <script>
//         alert('Anda tidak mempunyai akses');
//         document.location.href='../user/login.php'; </script>";
//     exit;
// }
require 'functions.php';
//ketika tombol tambah diklik
if(isset($_POST["tambah"])) {
    // jalankan fungsi tambah()
    if(tambahtenmed($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href = 'tenmed.php'
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
    <link rel="stylesheet" href="style.css">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="side-menu">
        <div class="tab-name">
            <h1><img src="../img/kisspng-umbrella-clip-art-5b3008645136e8.6524105115298745323327.png" alt="">Edit</h1>
        </div>
        <ul>
            <a href="pasien.php" class="btn btn-primary"><span>Kembali</span></a>
        </ul>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-2">
                <div class="daftar-pasien" style="margin-top:2rem;">
                    <div class="title">
                        <h2>Tambah Data Pasien</h2>
                    </div>
                    <form action="" method="post">
                        <div class="mb-3 row mt-5">
                            <label for="nama" class="col-sm-2 col-form-label"> Nama Tenaga Medis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" required name="nama_tenmed">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="date" class="col-sm-2 col-form-label"> Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="date" required name="tgl_lahir">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm"  name="tambah">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>