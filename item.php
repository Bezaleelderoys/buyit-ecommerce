<?php
require "conf/conn.php";

session_start();
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $query = mysqli_query($conn, "SELECT * FROM itemtb WHERE item_id = $id");
  $data = mysqli_fetch_array($query);

  $nama = $data['item_name'];
  $deskripsi = $data['description'];
  $price = $data['price'];
  $gambar = $data['image_path'];
  $uploader = $data['owner_name'];
  $uploaderID = $data['owner_id'];
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
            <a href="<?php
              if(isset($_SESSION['login'])){
                echo "myprofile.php";
              }else{
                echo "login.php"; 
              }
            ?>"
              ><i class="bi bi-person text-2xl text-lime-600"></i
            ></a>
            <a href="<?php
              if(isset($_SESSION['login'])){
                echo "cart.php";
              }else{
                echo "myprofile.php"; 
              }
            ?>"
              ><i class="bi bi-cart text-2xl ml-4 text-lime-600"></i
            ></a>
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
    <div class="min-h-[60vh]">
      <div class="container px-2 mx-auto py-8">
        <!-- Item Start  -->
        <div class="flex">
          <!-- Image Div -->
          <div class="border border-slate-600 w-80 h-80 mr-20">
            <img
              src="upload/<?php echo $gambar?>"
              alt=""
              class="w-full h-96 object-contain"
            />
          </div>
          <!-- Info Div  -->
          <div>
            <h1 class="text-3xl font-medium"><?php echo $nama?></h1>
            <p class="text-2xl">Rp <?php echo $price?></p>
            <p><a href="profile.php?userid=<?php echo $uploaderID?>"><i class="bi bi-person"></i> <?php echo $uploader ?></a></p>
            <p>
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
              ><i class="bi bi-star-fill"></i> 4.4 (12)
            </p>
            <p>DENPASAR BARAT, BALI</p>
            <div class="border border-slate-700 w-full h-44 my-2 p-2 overflow-scroll">
              <pre class="font-[Poppins]">
                <?php echo $deskripsi?>
              </pre>
            </div>
            <!-- Button Box -->
            <div>
              <button class="bg-lime-600 text-white p-2">
                <a href="#">Beli Barang</a>
              </button>
              <button class="bg-lime-600 text-white p-2">
                <a href="#">Masukkan Keranjang</a>
              </button>
              <button class="bg-lime-600 text-white p-2">
                <a href="#">Pesan Penjual</a>
              </button>
            </div>
          </div>
        </div>
        <!-- Item End -->
        <!-- Comment Box -->
        <div class="py-6 pt-9">
          <h1 class="text-2xl font-medium">Rating Pembeli</h1>
          <div class="w-full min-h-[50vh] flex items-center justify-center">
            <h1>Belum ada rating</h1>
          </div>
        </div>
        <!-- Comment End -->
        <!-- Recommend Start -->
        <h1 class="text-2xl font-medium">Rekomendasi Barang</h1>
        <div class="grid grid-cols-5 gap-4 py-4">
          <!-- Card Start -->
          <div class="border border-black">
            <a href="#">
              <div class="border border-slate-400">
                <img
                  src="https://th.bing.com/th/id/OIP.TPzJQ_W8LsccrU5iik-MswHaFL?rs=1&pid=ImgDetMain"
                  alt=""
                />
              </div>
              <div class="p-2">
                <h1>Kabel VGA Basdsa</h1>
                <p>Rp 7000</p>
                <p>
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i>
                  4.4(12)
                </p>
                <p><i class="bi bi-geo-alt-fill"></i> DENPASAR BARAT, BALI</p>
              </div>
            </a>
          </div>
          <!-- Card End -->
          <!-- Card Start -->
          <div class="border border-black">
            <a href="#">
              <div class="border border-slate-400">
                <img
                  src="https://th.bing.com/th/id/OIP.TPzJQ_W8LsccrU5iik-MswHaFL?rs=1&pid=ImgDetMain"
                  alt=""
                />
              </div>
              <div class="p-2">
                <h1>Kabel VGA Basdsa</h1>
                <p>Rp 7000</p>
                <p>
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i>
                  4.4(12)
                </p>
                <p><i class="bi bi-geo-alt-fill"></i> DENPASAR BARAT, BALI</p>
              </div>
            </a>
          </div>
          <!-- Card End -->
          <!-- Card Start -->
          <div class="border border-black">
            <a href="#">
              <div class="border border-slate-400">
                <img
                  src="https://th.bing.com/th/id/OIP.TPzJQ_W8LsccrU5iik-MswHaFL?rs=1&pid=ImgDetMain"
                  alt=""
                />
              </div>
              <div class="p-2">
                <h1>Kabel VGA Basdsa</h1>
                <p>Rp 7000</p>
                <p>
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i>
                  4.4(12)
                </p>
                <p><i class="bi bi-geo-alt-fill"></i> DENPASAR BARAT, BALI</p>
              </div>
            </a>
          </div>
          <!-- Card End -->
          <!-- Card Start -->
          <div class="border border-black">
            <a href="#">
              <div class="border border-slate-400">
                <img
                  src="https://th.bing.com/th/id/OIP.TPzJQ_W8LsccrU5iik-MswHaFL?rs=1&pid=ImgDetMain"
                  alt=""
                />
              </div>
              <div class="p-2">
                <h1>Kabel VGA Basdsa</h1>
                <p>Rp 7000</p>
                <p>
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i>
                  4.4(12)
                </p>
                <p><i class="bi bi-geo-alt-fill"></i> DENPASAR BARAT, BALI</p>
              </div>
            </a>
          </div>
          <!-- Card End -->
          <!-- Card Start -->
          <div class="border border-black">
            <a href="#">
              <div class="border border-slate-400">
                <img
                  src="https://th.bing.com/th/id/OIP.TPzJQ_W8LsccrU5iik-MswHaFL?rs=1&pid=ImgDetMain"
                  alt=""
                />
              </div>
              <div class="p-2">
                <h1>Kabel VGA Basdsa</h1>
                <p>Rp 7000</p>
                <p>
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
                  ><i class="bi bi-star-fill"></i>
                  4.4(12)
                </p>
                <p><i class="bi bi-geo-alt-fill"></i> DENPASAR BARAT, BALI</p>
              </div>
            </a>
          </div>
          <!-- Card End -->
        </div>
        <!-- Recommend End -->
      </div>
    </div>
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
