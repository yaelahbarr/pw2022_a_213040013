<?php
$mahasiswa = [
    [
        "nama" => "Barra Permana", 
        "npm" => "213040013", 
        "email" => "albarrapermana027@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "dababy.jpg"
    ], 
    [
        "nama" => "Asep Spectre", 
        "npm" => "213040012", 
        "email" => "asepspc@gmail.com", 
        "jurusan" => "Teknik Mesin",
        "gambar" => "download (2).png"
    ], 
    [
        "nama" => "Dadan Phantom", 
        "npm" => "213040010", 
        "email" => "dadanphntm@gmail.com", 
        "jurusan" => "Teknik Lingkungan",
        "gambar" => "download (3).png"
    ],
    [
        "nama" => "Jajang Marshal", 
        "email" => "jajangmrsh@gmail.com", 
        "jurusan" => "Teknik Industri", 
        "npm" => "213040099",
        "gambar" => "dababy.jpg"
    ],
    [
        "nama" => "Udin Odin", 
        "email" => "udnodin@gmail.com", 
        "jurusan" => "Teknik Informatika", 
        "npm" => "213040098",
        "gambar" => "download (2).png"
    ],
    [
        "nama" => "Andre Operator", 
        "email" => "andreope@gmail.com", 
        "jurusan" => "Teknik Mesin", 
        "npm" => "213040091",
        "gambar" => "download (3).png"
    ],
    [
        "nama" => "Aris Ares", 
        "email" => "arsars@gmail.com", 
        "jurusan" => "Teknik PWK", 
        "npm" => "213040097",
        "gambar" => "download (4).png"
    ],
    [
        "nama" => "Muhammad Brimstone", 
        "email" => "mhmhbrim@gmail.com", 
        "jurusan" => "Teknik Informatika", 
        "npm" => "213040088",
        "gambar" => "dababy.jpg"
    ],
    [
        "nama" => "Azis Frenzy", 
        "email" => "azfrenz@gmail.com", 
        "jurusan" => "Teknik PWK", 
        "npm" => "213040055",
        "gambar" => "download (2).png"
    ],
    [
        "nama" => "Arif Chamber", 
        "email" => "chamb@gmail.com", 
        "jurusan" => "Teknik PWK", 
        "npm" => "213040033",
        "gambar" => "download (3).png"
    ],
];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Mahasiswa</title>
  </head>
  <body>
    <div class="container">
        <h1>Detail Mahasiswa</h1>
             <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                     <img src="img/<?= $_GET["gambar"]; ?>" class="img-fluid rounded-start">
                        </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $_GET["nama"]; ?></h5>
                                    <p class="card-text"><?= $_GET["npm"]; ?></p>
                                    <p class="card-text"><?= $_GET["email"]; ?></p>
                                    <p class="card-text"><?= $_GET["jurusan"]; ?></p>

                                    <a href="kuliah_latihan3.php">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>