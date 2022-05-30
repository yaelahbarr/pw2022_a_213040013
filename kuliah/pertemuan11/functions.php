<?php

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'pw2022_a_213040013') or die('KONEKSI GAGAL!!!');

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

function tambah($data) {
    $conn = koneksi();
    $npm = $data["npm"];
    $nama = $data["nama"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];

    $query = 
    "INSERT INTO mahasiswa 
    VALUES (null, 
    '$npm', 
    '$nama', 
    '$email', 
    '$jurusan', 
    '$gambar')";
    mysqli_query($conn, $query) or die(mysqlie_error($conn));

    return mysqli_affected_rows($conn);

}