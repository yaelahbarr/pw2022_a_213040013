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
    $nama_pasien = htmlspecialchars($data["nama_pasien"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $gambar = htmlspecialchars($data["gambar"]);

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

function hapuspasien($id_pasien) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pasien WHERE id_pasien = $id_pasien") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubahpasien($data) {
    $conn = koneksi();
    $id_pasien = $data["id_pasien"];
    $nama_pasien = htmlspecialchars($data["nama_pasien"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $gambar = htmlspecialchars($data["gambar"]);

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