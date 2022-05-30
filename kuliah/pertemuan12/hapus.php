<?php
require 'functions.php';

if(hapus($_GET["id_mhs"]) > 0) {
    echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'index.php'
    </script>";
}