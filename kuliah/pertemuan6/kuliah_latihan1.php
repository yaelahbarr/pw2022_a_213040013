<?php
// Array Associative
// Array yang indexnya berupa string yang ber-asosiasi dengan nilai nya

$mahasiswa = [
    [
        "nama" => "Barra Permana", 
        "npm" => "213040013", 
        "email" => "albarrapermana027@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ], 
    [
        "nama" => "Asep Spectre", 
        "npm" => "213040012", 
        "email" => "asepspc@gmail.com", 
        "jurusan" => "Teknik Mesin"
    ], 
    [
        "nama" => "Dadan Phantom", 
        "npm" => "213040010", 
        "email" => "dadanphntm@gmail.com", 
        "jurusan" => "Teknik Lingkungan"
    ],
    [
        "nama" => "Jajang Marshal", 
        "email" => "jajangmrsh@gmail.com", 
        "jurusan" => "Teknik Industri", 
        "npm" => "213040069"
    ]
];
// var_dump($mahasiswa[2]["email"]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
    <ul>
    <li>Nama: <?php echo $mhs["nama"] ?></li>
    <li>NPM: <?php echo $mhs["npm"] ?></li>
    <li>Email: <?php echo $mhs["email"] ?></li>
    <li>Jurusan: <?php echo $mhs["jurusan"] ?></li>
    </ul>

<?php } ?>