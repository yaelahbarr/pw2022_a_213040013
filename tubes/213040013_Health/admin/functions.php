<?php

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'pw2022_tubes') or die('KONEKSI GAGAL!!!');

    return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambahpasien($data) {
    $conn = koneksi();
        // apakah ada gambar yang di upload
        if($_FILES['gambar']['error'] === 4){
            // kalo user tidak milih gambar beri gambar default
            $gambar = 'img/nophoto.jpg';
        } else{
            // jika user memilih gambar jalan kan fungsi upload
            $gambar = upload();
            // cek kalo upload berhasil
            if(!$gambar){
                return false;
            }
        }
    $nama_pasien = htmlspecialchars($data["nama_pasien"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    // $gambar = htmlspecialchars($data["gambar"]);

    $query = 
    "INSERT INTO pasien 
    VALUES (null, 
    '$nama_pasien', 
    '$tgl_lahir', 
    '$alamat', 
    '$gambar')";
    mysqli_query($conn, $query) or die(mysqlie_error($conn));

    return mysqli_affected_rows($conn);

}

function upload (){
    // siapkan data gambar
    $filename = $_FILES['gambar']['name'];
    $filesize = $_FILES['gambar']['size'];
    $filetmpname = $_FILES['gambar']['tmp_name'];
    // ekstensi gambar nya
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype= ['jpg', 'jpeg', 'png'];

    // cek apakah file yang di upload bukan gambar kalo bukan ga bisa di upload
    if(!in_array($filetype, $allowedtype)){
        echo "<script>
                alert('File yang di upload harus JPG, JPEG atau PNG');
            </script>";
        return false;
    }

    // cek jika size lebih besar dari 5mb
    if($filesize > 5000000){
        echo "<script>
                alert('Ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    // lolos pengecekan gambar
    // buat nama file baru biar ga duplikat
    $newfilename = uniqid() . $filename;

    move_uploaded_file($filetmpname, 'img/' . $newfilename);

    return $newfilename;

}

function hapuspasien($id_pasien) {
    $conn = koneksi();
    $pasien = query ("SELECT * FROM pasien WHERE id_pasien = $id_pasien")[0];

    // hapus data gambar
    if($pasien['gambar'] !== 'nophoto.jpg' ){
        unlink('img/' . $pasien["gambar"]);

    }

    mysqli_query($conn, "DELETE FROM pasien WHERE id_pasien = $id_pasien") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubahpasien($data) {
    $conn = koneksi();
    $id_pasien = $data["id_pasien"];
    $nama_pasien = htmlspecialchars($data["nama_pasien"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    // $gambar = htmlspecialchars($data["gambar"]);

    $gambar = $data["gambarLama"];

        // cek apakah user pilih gambar baru atau tidak
        if( $_FILES['gambar']['error'] === 4 ) {
            $gambar = $gambar;
        } else {
            $gambar = upload();
        }

    $query = "UPDATE pasien SET
                nama_pasien = '$nama_pasien',
                tgl_lahir = '$tgl_lahir',
                alamat = '$alamat',
                gambar = '$gambar'
                WHERE id_pasien = $id_pasien   
             ";
              mysqli_query($conn, $query) or die(mysqlie_error($conn));

              return mysqli_affected_rows($conn);
}

function tambahtenmed($data) {
    $conn = koneksi();
    $nama_tenmed = htmlspecialchars($data["nama_tenmed"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);

    $query = 
    "INSERT INTO tenaga_medis 
    VALUES (null, 
    '$nama_tenmed', 
    '$tgl_lahir')
    ";
    mysqli_query($conn, $query) or die(mysqlie_error($conn));

    return mysqli_affected_rows($conn);

}

function ubahtenmed($data) {
    $conn = koneksi();
    $id_tenmed = $data["id_tenmed"];
    $nama_tenmed = htmlspecialchars($data["nama_tenmed"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);


    $query = "UPDATE tenaga_medis SET
                nama_tenmed = '$nama_tenmed',
                tgl_lahir = '$tgl_lahir'
                WHERE id_tenmed = $id_tenmed   
             ";
              mysqli_query($conn, $query) or die(mysqlie_error($conn));

              return mysqli_affected_rows($conn);
}

function caripasien($find) {
    $query = "SELECT * FROM pasien
                WHERE
                    id_pasien LIKE '%$find%' OR
                    nama_pasien LIKE '%$find%' OR
                    alamat LIKE '%$find%' OR
                    tgl_lahir LIKE '%$find%'
            ";
    return query($query);
}

function caritenmed($find) {
    $query = "SELECT * FROM tenaga_medis
                WHERE
                    id_tenmed LIKE '%$find%' OR
                    nama_tenmed LIKE '%$find%' OR
                    tgl_lahir LIKE '%$find%'
            ";
    return query($query);
}

function carivaksin($find) {
    $query = "SELECT * FROM jenis_vaksin
                WHERE
                    no_batch LIKE '%$find%' OR
                    nama_vaksin LIKE '%$find%' OR
                    jumlah_vaksin LIKE '%$find%'
            ";
    return query($query);
}

function carialat($find) {
    $query = "SELECT * FROM alat_medis
                WHERE
                    no_alat LIKE '%$find%' OR
                    nama_alat LIKE '%$find%' OR
                    jumlah_alat LIKE '%$find%'
            ";
    return query($query);
}

function carisertifikat($find) {
    $query = "SELECT * FROM sertifikat
                WHERE
                    no_batch LIKE '%$find%' OR
                    id_tenmed LIKE '%$find%' OR
                    id_pasien LIKE '%$find%' OR
                    no_alat LIKE '%$find%' OR
                    lok_vaksin LIKE '%$find%' OR
                    ket_vaksin LIKE '%$find%' OR
                    tgl_vaksin LIKE '%$find%' OR
                    no_tiket LIKE '%$find%'
            ";
    return query($query);
}

function cariuser($find) {
    $query = "SELECT * FROM user
                WHERE
                    id_user LIKE '%$find%' OR
                    username LIKE '%$find%' OR
                    email LIKE '%$find%'
            ";
    return query($query);
}