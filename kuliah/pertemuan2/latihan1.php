<?php
 // Pertemuan 2, membahas mengenai sintaks PHP
 // Nilai : integer, string, boolean
 echo 10;

 echo "<hr>";

 // VARIABLE
 // wadah untuk menyimpan NILAI
 // nama nya bebas, tidak boleh diawali angka
 // tidak boleh ada spasi   
 $nama = 'Barra';
 echo $nama;
 echo "<br>";
 // bisa ditimpa / overwrite
 $nama = 'Permana';
 echo $nama;

 echo "<hr>";

 // STRING
 // '', ""
 echo "Jum'at";
 echo "<br>";
 // escaped character
 // \    
 echo 'Barra : "Jum\'at"';
 echo "<br>";
 echo "Barra : \"Jum'at\"";

 // INTERPOLASI
 // Mencetak isi variable
 // hanya bisa digunakan ""
 echo "<br>";
 echo "Halo nama saya $nama";
 echo "<br>";
 $price = 200;
 echo "Price : $$price"; 
 
 echo "<hr>";

 
 // OPERATOR
 // Aritmatika
 // +, -, *, /, %
 echo (1 + 2) * 3 - 4;
 echo "<br>";
 $alas = 10;
 $tinggi = 20;
 $luas_segitiga = ($alas * $tinggi) / 2;
 echo $luas_segitiga;
 echo "<br>";
 echo 3 % 2;

 echo "<hr>";   
 
 // CONCAT
 // Penggabung String
 // .
 $nama_depan = "Barra";
 $nama_belakang = "Permana";
 echo $nama_depan . " " . $nama_belakang;

 echo "<hr>";

 // PERBANDINGAN
 // <, >, <=, >=, ==, !=
 echo 1 < 5;   
 echo "<br>";
 echo 10 == "10";

 echo "<hr>";

 // IDENTITAS / STRICT COMPARISON
 // ===, !==
 echo 10 === "10";
 
 echo "<hr>";

 // INCREMENT / DECREMENT
 // Penambahan / Pengurangan 1
 // ++, --
 $x = 10;
 echo ++$x;
 echo "<br>";
 echo $x++;    

 // LOGIKA
 // &&, ||, !
 $x = 30;
 var_dump($x < 20 && $x % 2 == 0); 
 
?>