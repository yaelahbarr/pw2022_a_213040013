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
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

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

function hapus($id_mhs) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id_mhs = $id_mhs") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();
    $id_mhs = $data["id_mhs"];
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama_mhs"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
                npm = '$npm',
                nama_mhs = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id_mhs = $id_mhs   
             ";
              mysqli_query($conn, $query) or die(mysqlie_error($conn));

              return mysqli_affected_rows($conn);
}