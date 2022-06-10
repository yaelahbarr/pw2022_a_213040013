<?php 
    
    require 'functions.php';

    // cek cookie
    if(isset($_COOKIE['id_user']) && isset($_COOKIE['key']) ) { session_start();
        $id_user = $_COOKIE['id_user'];
        $key = $_COOKIE['key'];

        // ambil username berdasarkan id_user
        $result = mysqli_query($conn, "SELECT username FROM user WHERE id_user=$id_user");
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if( $key === hash('sha256', $row['username']) ) {
            $_SESSION['login'] = true;
        }
    }

    if( isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }



    if(isset($_POST["login"]) ) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        // cek username 
        if( mysqli_num_rows($result) === 1 ){

            // cek password
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row["password"]) ) {
                //    set session
                $_SESSION["login"] = true;

                header("Location: dashboard.php");
                exit;
            }
        }

        $error = true;

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

    <title>Log in</title>
  </head>
  <body>
    <div class="container">
      <h1>Form Log in</h1>

      <a href="index.php" class="btn btn-primary">Kembali</a>

      <?php if( isset($error)) : ?>
          <p style="color: red; font-style: italic;">username / password salah</p>
      <?php endif; ?>
      <div class="row mt-3">
        <div class="col-8">
          <form action="" method="post" autocomplete="off">
            <div class="mb-3">
              <label for="username" class="" form-label>username</label>
              <input
                type="email"
                class="form-control"
                id="username"
                name="username"
                required
              />
            </div>
            <div class="mb-3">
              <label for="password" class="" form-label>password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
                required
              />
            </div>
            <button type="submit" class="btn btn-primary" name="login">
              Log in
            </button>
          </form>
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
