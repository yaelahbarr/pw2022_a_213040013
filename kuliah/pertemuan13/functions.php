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

    // cek apakah user tidak memilih gambar
    if($_FILES["gambar"]["error"] === 4) {
        // beri gambar default
        $gambar = 'nophoto.jpg';
    } else {
        // lakukan fungsi upload
        $gambar = upload();
        // cek jika upload gagal
        if(!$gambar) {
            return false;
        }
    }

    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    // $gambar = htmlspecialchars($data["gambar"]);

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

    // query mhs berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id_mhs = $id_mhs")[0];
    // cek jika gambar default
    if($mhs["gambar"] !== 'nophoto.jpg') {
        // hapus gambar
        unlink('img/' . $mhs["gambar"]);
    }
    
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

function upload() {
    // siapkan data gambar
    $filename = $_FILES["gambar"]["name"];
    $filetmpname = $_FILES["gambar"]["tmp_name"];
    $filesize = $_FILES["gambar"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];

    // cek apakah file bukan gambar
    if(!in_array($filetype, $allowedtype)) {
        echo "<script>
                alert('file harus JPG, JPEG, PNG!');
              </script>";
        return false;
    }

    // cek jika gambar terlalu besar
    if($filesize > 1000000) {
        echo "<script>
                 alert('ukuran file terlalu besar!');
              </script>";
        return false;
    }

    // proses upload gambar
    $newfilename = uniqid() . $filename;
    move_uploaded_file($filetmpname, 'img/' . $newfilename);

    return $newfilename;
}