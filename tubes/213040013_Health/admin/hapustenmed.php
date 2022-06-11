<?php
    $id_tenmed = $_GET['id_tenmed'];
    require 'functions.php';
    if(hapustenmed($id_tenmed)>0){
        echo "<script> alert('data berhasil di hapus'); document.location.href='tenmed.php';</script>";
    } 