<?php 
    require 'functions.php';
    if( isset($_POST["register"]) ) {
        if( register($_POST) > 0 ) {
            echo "<script>
                    alert('user baru berhasil ditambahkan, silahkan Login kembali!');
                    document.location.href = 'login.php'
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Sign Up</title>
  </head>
  <body>
    <div class="container">
      <h1>Form Sign Up</h1>

      <a href="index.php" class="btn btn-primary">Kembali</a>

      <div class="container">
        <div class="content">
            <div class="content-2">
                <div class="daftar-pasien" style="margin-top:2rem;">
                    <form action="" method="post">
                        <div class="mb-3 row mt-5">
                            <label for="username" class="col-sm-2 col-form-label"> username</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="username" required name="username">
                            </div>
                        </div>
                        <div class="mb-3 row mb-5">
                            <label for="password" class="col-sm-2 col-form-label"> password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" required name="password">
                            </div>
                        </div>
                        <!-- role otomatis user -->
                        <input type="hidden" name="role" value="user">
                        <button type="submit" class="btn btn-primary btn-sm" name="register">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
