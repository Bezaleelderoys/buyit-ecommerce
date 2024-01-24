<?php
require 'conf/conn.php';

if(isset($_POST["register"])){
  $username = strtolower($_POST["username"]);
  $password = $_POST["password"];
  $rePassword = $_POST["rePassword"];

  if($password != $rePassword){
    echo "<script>
        alert('Ulang Password tidak sesuai')
    </script>";
  }else{
    mysqli_query($conn, "INSERT INTO usertb VALUES ('', '$username', '$password')");
    echo "<script>
      alert('Pendaftaran Berhasil')
    </script>";
    header("Location:login.php");
  }

}

?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopify</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
  </head>
  <body class="font-[Poppins]">
    <div class="container px-2 mx-auto py-4 flex flex-col items-center">
      <!-- Title Start -->
      <div class="flex mx-auto mb-4">
        <i class="bi bi-bag mr-2 text-2xl text-lime-600"></i>
        <h1 class="text-2xl font-medium text-lime-600">Shopify</h1>
      </div>
      <div class="border border-black">
        <form action="" method="post" class="flex flex-col p-7">
          <label>Nama Pengguna</label>
          <input type="text" name="username" class="border border-slate-500" />
          <label>Kata Sandi</label>
          <input type="password" name="password" class="border border-slate-500" />
          <label>Ulang Kata Sandi</label>
          <input
            type="password"
            name="rePassword"
            class="border border-slate-500"
            name=""
            id=""
          />
          <p>
            Sudah Punya Akun?
            <a href="login.php" class="underline text-purple-800"
              >Login disini!</a
            >
          </p>
          <input
            type="submit"
            class="bg-lime-600 text-white cursor-pointer py-2 mt-4"
            value="Daftar"
            name="register"
          />
        </form>
      </div>
      <!-- Title End  -->
    </div>
  </body>
</html>
