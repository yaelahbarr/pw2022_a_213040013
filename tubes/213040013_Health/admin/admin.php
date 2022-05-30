<?php
    $koneksi = mysqli_connect("localhost","root","","pw2022_tubes") or die(mysqli_error);
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
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <?php                        
                            $pasien = mysqli_query($koneksi,"SELECT * FROM pasien");
                            $hitung =  mysqli_num_rows($pasien);
                            echo "<h1>$hitung</h1>";
                        ?>
                        <h3>Pasien</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../img/radiation-solid.svg" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <?php                        
                            $tenaga_medis = mysqli_query($koneksi,"SELECT * FROM tenaga_medis");
                            $hitung =  mysqli_num_rows($tenaga_medis);
                            echo "<h1>$hitung</h1>";
                        ?>
                        <h3>Tenaga Medis</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../img/radiation-solid.svg" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <?php                        
                            $jenis_vaksin = mysqli_query($koneksi,"SELECT * FROM jenis_vaksin");
                            $hitung =  mysqli_num_rows($jenis_vaksin);
                            echo "<h1>$hitung</h1>";
                        ?>
                        <h3>Jenis Vaksin</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../img/radiation-solid.svg" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <?php                        
                            $alat_medis = mysqli_query($koneksi,"SELECT * FROM alat_medis");
                            $hitung =  mysqli_num_rows($alat_medis);
                            echo "<h1>$hitung</h1>";
                        ?>
                        <h3>Alat Medis</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../img/radiation-solid.svg" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <?php                        
                            $sertifikat = mysqli_query($koneksi,"SELECT * FROM sertifikat");
                            $hitung =  mysqli_num_rows($sertifikat);
                            echo "<h1>$hitung</h1>";
                        ?>
                        <h3>Sertifikat</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../img/radiation-solid.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="daftar-pasien">
                    <div class="title">
                        <h2>Daftar Pasien</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Nama</th>
                            <th>No Batch Vaksin</th>
                            <th>Tanggal Vaksin</th>
                            <th>Sertifikat</th>
                        </tr>
                        <?php
                            // $sertif = mysqli_query($koneksi, "SELECT * from sertifikat");
                            $sertif = mysqli_query($koneksi, "SELECT * from sertifikat inner join pasien where pasien.id_pasien=sertifikat.id_pasien");
                            $no=1;
                            foreach ($sertif as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['nama_pasien'] ?></td>
                            <td><?php echo $row['no_batch'] ?></td>
                            <td><?php echo $row['tgl_vaksin'] ?></td>
                            <td><a href="#" class="btn">View</a></td>
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