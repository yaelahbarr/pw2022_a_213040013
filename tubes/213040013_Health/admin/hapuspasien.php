<?php
    $id_pasien = $_GET['id_pasien'];
    require 'functions.php';
    if(hapuspasien($id_pasien)>0){
        echo "<script> alert('data berhasil di hapus'); document.location.href='pasien.php';</script>";
    } 