<?php
    function koneksi(){
        $conn=mysqli_connect("localhost", "root","", "pw2022_tubes") or die('Koneksi gagal!');
        return $conn;
    }

    function query($query){
        $conn = koneksi();
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        // siapkan data 
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        
        return $rows;
    }

    function register($data){
        $conn = Koneksi();
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $role = mysqli_real_escape_string($conn, $data["role"]);

        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

        if( mysqli_fetch_assoc($result) ) {
            echo "<script>
                    alert('username sudah terdaftar!')
                </script>";
            return false;
        }

        // enkripsi password
        // $password = password_hash($password, PASSWORD_DEFAULT);

        // tambahkan userbaru ke database
        $sql = mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', '$role')");

        return mysqli_affected_rows($conn);
    }
    if(isset($_POST['login'])){
        $conn = koneksi();
        $username = $_POST['username'];
        $password = $_POST['password'];

        $cekuser = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' and password='$password'");
        $hitung = mysqli_num_rows($cekuser);

        // var_dump($hitung);

        if($hitung>0){
            // kalau data ditemukan
            $ambildatarole = mysqli_fetch_array($cekuser);
            $role = $ambildatarole['role'];
            // var_dump($role);

            if($role=='admin'){
                // kalau dia admin
                $_SESSION['log'] = 'Logged';
                $_SESSION['role'] = 'admin';
                header('location:../admin/index.php');
            } 
            else {
                // kalau bukan admin
                $_SESSION['log'] = 'Logged';
                $_SESSION['role'] = 'User';
                header('location:user.php');
            }

        } else {
            // kalau tidak ditemukan

            echo 'Data tidak ditemukan';
        }
    };