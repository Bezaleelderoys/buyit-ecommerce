<?php
require "conf/conn.php";

if(isset($_GET['userid'])){
  $userid = $_GET['userid'];
  $query = mysqli_query($conn, "SELECT * FROM usertb WHERE userid = $userid");
  $data = mysqli_fetch_array($query);

  $nama = $data['username'];
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
    <!-- Search Bar -->
    <nav>
      <div class="container px-2 mx-auto">
        <div class="flex items-center justify-between py-6">
          <span>
            <a class="flex" href="#">
              <i class="bi bi-bag mr-2 text-2xl text-lime-600"></i>
              <h1 class="text-2xl font-medium text-lime-600">Shopify</h1>
            </a>
          </span>
          <form action="">
            <input
              class="py-2 px-7 border-lime-600 border w-96"
              type="text"
              placeholder="Cari barang disini..."
            />
          </form>
          <span>
          <?php
           if(isset($_SESSION["login"])){
            echo "<a href='myprofile.php'><i class='bi bi-person text-2xl text-lime-600'></i></a>
                  <a href='cart.php'><i class='bi bi-cart text-2xl ml-4 text-lime-600'></i></a>";
          }else{
            echo "<a href='login.php'><i class='bi bi-person text-2xl text-lime-600'></i></a> 
                  <a href='login.php'><i class='bi bi-cart text-2xl ml-4 text-lime-600'></i></a>";
          }
          ?>
          </span>
        </div>
      </div>
    </nav>
    <!-- Search Bar End -->
    <!-- Navigation Bar -->
    <nav class="bg-lime-600">
      <div class="container px-2 mx-auto py-3">
        <ul class="flex mx-auto justify-around items-center">
          <li class="h-full">
            <a href="" class="text-white">Keperluan Rumah</a>
          </li>
          <li><a href="" class="text-white">Dapur</a></li>
          <li><a href="" class="text-white">Pakaian</a></li>
          <li><a href="" class="text-white">Teknologi</a></li>
          <li><a href="" class="text-white">Makanan</a></li>
        </ul>
      </div>
    </nav>
    <!-- Navigation End -->
    <!-- Profile Start -->
    <div>
      <div class="container px-2 mx-auto py-4">
        <!-- User Start -->
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <div class="w-40 h-40 rounded-[50%] overflow-hidden">
              <img
                src="https://i.pinimg.com/originals/20/57/2b/20572baabbf418db9cfb52c5026fdce1.jpg"
                alt=""
              />
            </div>
            <div class="ml-4">
              <h1 class="text-2xl"><?php echo $nama?></h1>
              <p>DENPASAR BARAT, BALI</p>
              <div class="flex gap-5">
                <p><span>0</span> pengikut</p>
                <p><span>0</span> mengikuti</p>
              </div>
            </div>
          </div>
          <div>
            <button class="bg-lime-600 text-white p-2">
              <a href="#">Ikuti</a>
            </button>
            <button class="bg-lime-600 text-white p-2">
              <a href="#">Kirim Pesan</a>
            </button>
          </div>
        </div>
        <!-- User End -->
        <div class="py-4">
          <h1 class="text-center bg-lime-600 text-white">
            Barang oleh pengguna
          </h1>
          <div class="min-h-[60vh] flex items-center justify-center">
          <?php
            
            $check = mysqli_query($conn, "SELECT * FROM itemtb WHERE owner_name = '$nama'"); 

            if(mysqli_num_rows($check) > 0){
              echo "<div class='grid grid-cols-5 gap-4 py-4'>";
              while($data = mysqli_fetch_array($check)){
                echo "<div class='border border-black'>";
                echo "<a href='item.php?id=".$data['item_id']."'>"; 
                echo "<div class='border border-slate-400'>";
                echo "<img src='upload/".$data['image_path']."' class='w-full h-full object-fill'/>";
                echo "</div>";
                echo "<div class='p-2'>";
                echo "<h1>".$data["item_name"]."</h1>";
                echo "<p>Rp ".$data["price"]."</p>";
                echo  "<p><i class='bi bi-geo-alt-fill'></i> DENPASAR BARAT, BALI</p>";
                echo  "</div>";
                echo "</a>";
                echo "</div>";
              }
              echo "</div>";
            }else{
              echo "<div class='min-h-[60vh] flex items-center justify-center'>";
              echo "<h1>Tidak ada barang</h1>";
              echo "</div>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Profile End  -->
    <!-- Footer Start -->
    <footer class="bg-lime-600 text-white">
      <div class="container px-2 mx-auto py-4 flex justify-between">
        <div>
          <div class="flex items-center">
            <i class="bi bi-bag mr-2 text-2xl text-white"></i>
            <h1 class="text-2xl font-medium text-white">Shopify</h1>
            <i class="bi bi-c-circle text-white ml-3"></i>
            <p class="ml-2">2024</p>
          </div>
        </div>
        <div>
          <ul class="flex">
            <li class="mr-4"><a href="login.php">Login</a></li>
            <li class="mr-4"><a href="register.php">Register</a></li>
            <li><a href="#">About Us</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- Footer End -->
  </body>
</html>
