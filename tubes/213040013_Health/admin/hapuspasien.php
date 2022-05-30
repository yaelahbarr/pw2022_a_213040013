<?php
require 'functions.php';

if(hapuspasien($_GET["id_pasien"]) > 0) {
    echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'pasien.php'
    </script>";
}