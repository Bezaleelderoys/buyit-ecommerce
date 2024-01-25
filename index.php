<?php
require "conf/conn.php";
session_start();

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
    <!-- Content Start -->
    <div>
      <div class="container px-2 mx-auto py-10 flex">
        <!-- Card Start -->
        <div class="grid grid-cols-5 gap-5">
          <div class="border border-lime-600 h-full row-span-2">
            <div class="bg-lime-600">
              <h1 class="text-center py-4 text-white">Cari Kategori</h1>
            </div>
            <ul>
              <li
                class="text-center py-4 text-lime-600 border-t border-lime-600"
              >
                <a href="#">Pakaian Olahraga</a>
              </li>
              <li
                class="text-center py-4 text-lime-600 border-t border-lime-600"
              >
                <a href="#">Pakaian Formal</a>
              </li>
              <li
                class="text-center py-4 text-lime-600 border-t border-lime-600"
              >
                <a href="#">Gadget dan IT</a>
              </li>
              <li
                class="text-center py-4 text-lime-600 border-t border-lime-600"
              >
                <a href="#">Furnitur Ruangan</a>
              </li>
              <li
                class="text-center py-4 text-lime-600 border-t border-lime-600"
              >
                <a href="#">Peralatan</a>
              </li>
              <li
                class="text-center py-4 text-lime-600 border-t border-lime-600"
              >
                <a href="#">Peralatan</a>
              </li>
              <li
                class="text-center py-4 text-lime-600 border-t border-lime-600"
              >
                <a href="#">Peralatan</a>
              </li>
              <li
                class="text-center py-4 text-lime-600 border-t border-lime-600"
              >
                <a href="#">Peralatan</a>
              </li>
              <li
                class="text-center py-4 text-lime-600 border-t border-lime-600"
              >
                <a href="#">Peralatan</a>
              </li>
            </ul>
          </div>
          <!-- Card End -->
          <!-- Items Start -->

          <?php
           
           $query = mysqli_query($conn, "SELECT * FROM itemtb");

           while($data = mysqli_fetch_array($query)){
            
            ?>
              <div class='border border-black'>
                <a href='item.php?id=<?php echo $data['item_id']?>'>
                  <div class='border border-slate-400'>
                    <img src="upload/<?php echo $data["image_path"]?>" class="object-cover w-full h-full"/>
                  </div>
                  <div class='p-2'>
                    <h1><?php echo $data["item_name"]?></h1>
                    <p>Rp <?php echo $data["price"]?></p>
                    <p><i class="bi bi-person"></i> <?php echo $data["owner_name"]?></p>
                    <p>
                      <i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i
                      ><i class='bi bi-star-fill'></i><i class='bi bi-star-fill'></i
                      ><i class='bi bi-star-fill'></i>
                      4.4(12)
                    </p>
                    <p><i class='bi bi-geo-alt-fill'></i> DENPASAR BARAT, BALI</p>
                  </div>
                </a>
              </div>
            <?php }?>
        <!-- Items End -->
      </div>
    </div>
    <!-- Content End -->
    <!-- Footer Start -->\
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
