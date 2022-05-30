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
            <div class="content-2">
                <div class="daftar-pasien" style="margin-top:2rem;">
                    <div class="title">
                        <h2>Sertifikat</h2>
                    </div>
                    <table>
                        <tr>
                            <th>No Tiket</th>
                            <th>No Batch</th>
                            <th>ID Tenmed</th>
                            <th>No Alat</th>
                            <th>ID Pasien</th>
                            <th>Lokasi Vaksin</th>
                            <th>Keterangan</th>
                            <th>Tanggal Vaksin</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                            $sertif = mysqli_query($koneksi, "SELECT * from sertifikat");
                            $no=1;
                            foreach ($sertif as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['no_tiket'] ?></td>
                            <td><?php echo $row['no_batch'] ?></td>
                            <td><?php echo $row['id_tenmed'] ?></td>
                            <td><?php echo $row['no_alat'] ?></td>
                            <td><?php echo $row['id_pasien'] ?></td>
                            <td><?php echo $row['lok_vaksin'] ?></td>
                            <td><?php echo $row['ket_vaksin'] ?></td>
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