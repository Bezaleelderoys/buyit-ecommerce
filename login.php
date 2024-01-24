<?php
require "conf/conn.php";
session_start();

if (isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = mysqli_query($conn, "SELECT * FROM usertb WHERE username = '$username' AND password = '$password'");
  $row = mysqli_num_rows($query);
  $data = mysqli_fetch_array($query);

  if ($row > 0){
    if($password == $data["password"]){
      $_SESSION["login"] = true;
      $_SESSION["username"] = $data["username"];
      header("Location: index.php");
    }
  }else{
    echo "<script> alert('User tidak ditemukan') </script>";
  }
}


?>

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
          <input
            type="password"
            name="password"
            class="border border-slate-500"
            name=""
            id=""
          />
          <div>
            <label>Ingat Saya?</label> <input type="checkbox" name="" id="" />
          </div>
          <p>
            Belum Punya Akun?
            <a href="register.php" class="underline text-purple-800"
              >Daftar disini!</a
            >
          </p>
          <input
            type="submit"
            name="login"
            class="bg-lime-600 text-white cursor-pointer py-2 mt-4"
            value="Login"
          />
        </form>
      </div>
      <!-- Title End  -->
    </div>
  </body>
</html>
