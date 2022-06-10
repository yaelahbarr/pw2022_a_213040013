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
    $pasien = query("SELECT * FROM pasien");
    //ketika tombol search diklik
    if(isset($_POST["search"])) {
        // jalankan fungsi search()
        $pasien = caripasien($_POST["find"]);
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
</head>

<body>
    <div class="side-menu">
        <div class="tab-name">
            <h1><img src="../img/kisspng-umbrella-clip-art-5b3008645136e8.6524105115298745323327.png" alt="">SC.Admin</h1>
        </div>
        <ul>
            <li><a href="index.php"><span>Dashboard</span></a> </li>
            <li><a href="pasien.php"><span>Pasien</span></a> </li>
            <li><a href="tenmed.php"><span>Tenaga Medis</span></a> </li>
            <li><a href="jenisvaksin.php"><span>Jenis Vaksin</span></a> </li>
            <li><a href="alatmedis.php"><span>Alat Medis</span></a>  </li>
            <li><a href="sertifikat.php"><span>Sertifikat</span></a></li>
            <li><a href="user.php"><span>Profile</span> </a></li>
            <li><a href="logout.php"><span>Logout</span> </a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <form class="find" action="" method="post">
                        <input type="text" name="find" placeholder="Search.." autocomplete="off" autofocus>
                        <button name="search" type="submit"><img src="../img/magnifying-glass-solid.svg" alt=""></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-2">
                <div class="daftar-pasien" style="margin-top:2rem;">
                    <div class="title">
                        <h2>Daftar Pasien</h2>
                        <a href="createpasien.php" class="btn">Add New</a>
                    </div>
                    <table>
                        <tr>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                            $no=1;
                            foreach ($pasien as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['nama_pasien'] ?></td>
                            <td><?php echo $row['tgl_lahir'] ?></td>
                            <td><?php echo $row['alamat'] ?></td>
                            <td><img src="img/<?php echo $row['gambar'] ?>" width="50px" alt=""></td>
                            <td><a href="ubahpasien.php?id_pasien=<?= $row["id_pasien"]; ?>" class="btn">Ubah</a></td>
                            <td><a href="hapuspasien.php?id_pasien=<?= $row["id_pasien"]; ?>" class="btn" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>