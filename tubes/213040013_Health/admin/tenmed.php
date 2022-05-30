<?php
require 'functions.php';
$tenmed = query("SELECT * FROM tenaga_medis");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin Panel</title>
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
                        <h2>Daftar Tenaga Medis</h2>
                        <a href="createtenmed.php" class="btn">Add New</a>
                    </div>
                    <table>
                        <tr>
                            <th>ID Tenaga Medis</th>
                            <th>Nama Tenaga Medis</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                            $no=1;
                            foreach ($tenmed as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['id_tenmed'] ?></td>
                            <td><?php echo $row['nama_tenmed'] ?></td>
                            <td><?php echo $row['tgl_lahir'] ?></td>
                            <td><a href="ubahtenmed.php?id_tenmed=<?= $row["id_tenmed"]; ?>" class="btn">Ubah</a></td>
                            <td><a href="hapustenmed.php?id_tenmed=<?= $row["id_tenmed"]; ?>" class="btn" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
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