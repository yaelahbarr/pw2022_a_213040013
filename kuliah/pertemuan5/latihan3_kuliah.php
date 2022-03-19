<?php
// Studi Kasus

$mahasiswa = [
    ["Barra Permana", "213040013", "albarrapermana027@gmail.com", "Teknik Informatika"], 
    ["Asep Spectre", "213040012", "asepspc@gmail.com", "Teknik Mesin"], 
    ["Dadan Phantom", "213040010", "dadanphntm@gmail.com", "Teknik Lingkungan"]
];



?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
    <li>Nama: <?php echo $mhs[0] ?></li>
    <li>NPM: <?php echo $mhs[1] ?></li>
    <li>Email: <?php echo $mhs[2] ?></li>
    <li>Jurusan: <?php echo $mhs[3] ?></li>
    </ul>

<?php } ?>