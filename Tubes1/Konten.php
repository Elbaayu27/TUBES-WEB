<?php


if($_GET['data']=='baverage'){
echo '<div class="container green">';
  // Load file koneksi.php
  include "Koneksi.php";
  
  $query = "SELECT * FROM dish WHERE category= 'Baverage' "; 
  $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ ?>
      <div class="col-md-4">
       <?php  echo "<img src='images/".$data['foto']."' width='400' height='400'>"; ?>
      <div align="center" class="deskripsi"><button onclick="alert('Mohon Maaf Produk Belum Tersedia')"> <?php   echo $data['nama_dish']; ?></button>
        </div>
      <div align="center" class="price"> <?php   echo $data['price'];?></div>
  </div>
      <div class="col-md-8">
      <?php    echo $data['description'];  ?>
      </div>
      <?php } ?>
    
    <?php
  }


elseif($_GET['data']=='home'){
   echo '<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="400px" class="d-block w-100" src="https://images.japancentre.com/recipes/pics/1250/main/1250-matcha-pudding.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img height="400px" class="d-block w-100" src="https://i2.wp.com/en.blog.kkday.com/wp-content/uploads/matchafeat.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img height="400px" class="d-block w-100" src="https://www.healthstartsinthekitchen.com/wp-content/uploads/2017/12/matcha-latte-feature-1024x683.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img height="400px" class="d-block w-100" src="http://blog.matchazentea.com/wp-content/uploads/2016/01/Matcha-Powder-1140x500.jpg" alt="Fourth slide">
    </div>
  </div>
</div>
<a href="form_simpan.php">Tambah Data</a><br><br>
<table border="1" width="100%">
  <tr>
    <th><center>Foto</center></th>
    <th><center>Kode</center></th>
    <th><center>Dishes Name</center></th>
    <th><center>Category</center></th>
    <th><center>Price</center></th>
    <th><center>Description</center></th>
    <th colspan="2"><center>Aksi</center></th>
  </tr>';
  ?>
  <?php
  // Load file koneksi.php
  include "Koneksi.php";
  
  $query = "SELECT * FROM dish"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
    echo "<td>".$data['kode']."</td>";
    echo "<td>".$data['nama_dish']."</td>";
    echo "<td>".$data['category']."</td>";
    echo "<td>".$data['price']."</td>";
    echo "<td>".$data['description']."</td>";
    echo "<td><a href='form_ubah.php?kode=".$data['kode']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?kode=".$data['kode']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</div>
</div>
</div>
<?php
}


elseif($_GET['data']=='about'){
echo '<div class="container green">
      
<div class="card" style="width: 70rem;">
  <img height="400px" class="card-img-top" src="https://1.bp.blogspot.com/-HHivCBYUD6o/V5Y_SZq2D9I/AAAAAAAAZIc/BEiJyxqmMb0uk1-OkElcZODYBEVGPaGRQCLcB/s1600/IMG_5815.JPG" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><font face="sweet pea">MatchaAddict</font>-<u>A Good Deal of Matcha</u></h5>
    <p class="card-text">PT Matcha Addict Indonesia opened its first outlet in Jakarta in 2003, bringing the renowned Japanese cafe brand to matcha enthusiasts in Indonesia. It has since then subsequently grown well, opening up new outlets in other major cities in Indonesia: Bandung, Surabaya, Medan, Bali, Makassar, Yogyakarta, Pekanbaru, Batam and Palembang, as well as well as expanding its presence in Jakarta. Currently there are thirty five Matcha Addict outlets in total nationwide, with eighteen of them spread across Greater Jakarta.

<br> Matcha Addicts outlets are best known for their simple-yet-modern approach to its open kitchen concept, employing distinctive touches of Japanese culture. Matcha Addicts open kitchen allows its patrons to take a look at whats going on as their orders are being prepared. Matcha Addict is also proud to have become the first matcha cafe in Indonesia to feature the characteristic matcha dish with a conveyor belt. <br> Matcha Addict aims to provide an exceptional dessert experience that exceeds the expectations of customers, by blending the authenticity of Japanese highly-praised taste and a signature touch of local flavor, with the highest level of service and comfort. <br> Paying attention not only to taste, Matcha Addict focuses also on the quality of its food as well as service.</p>
  </div>
</div>';
}


elseif($_GET['data']=='dessert'){
echo '<div class="container green">';
      
  // Load file koneksi.php
  include "Koneksi.php";
  
  $query = "SELECT * FROM dish WHERE category= 'Dessert'"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ ?> 
      <div class="col-md-4">
        <?php  echo "<img src='images/".$data['foto']."' width='400' height='400'>"; ?>
      <div align="center" class="deskripsi"><button onclick="alert('Mohon Maaf Produk Belum Tersedia')"> <?php   echo $data['nama_dish']; ?></button>
        </div>
      <div align="center" class="price"> <?php   echo $data['price'];?></div>
  </div>
      <div class="col-md-8">
      <?php    echo $data['description'];  ?>
      </div>
      <?php } ?>
    </div>

  </div>
<?php
}
  ?>


