<?php
include 'koneksi.php';

$id = "";
$nama="";
$jenis_makanan="";
$nomor_meja="";
$hargaMakanan="";

$success="";
$failed="";


if (isset($_GET['ubah'])) {
  $id = $_GET['ubah'];

  $query = "SELECT * FROM pesanan WHERE id = '$id';";
  $mysql = mysqli_query($connect, $query);

  $result = mysqli_fetch_assoc($mysql);
  $nama = $result['nama'];
  $jenis_makanan = $result['jenis_makanan'];
  $nomor_meja = $result['nomor_meja'];
  $hargaMakanan = $result['hargaMakanan'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Pemesanan</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="styles.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center">PESAN MAKANAN</h3>

            <form action="proses.php" method="post">
            <input type="hidden" value="<?php echo $id; ?>" name="id">


              <div class="form-group">
                <label for="username">Nama </label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" value="<?php echo $nama ?>">
              </div>
              <div class="form-group">
                <label for="jenis_makanan">Jenis Makanan </label>
              <select name="jenis_makanan" id="jenis_makanan" class="form-control">
                <option value="Ayam Bakar">Ayam Bakar</option>
                <option value="Orek Tempe">Orek Tempe</option>
                <option value="Telur Balado">Telur Balado</option>
                <option value="Ayam Goreng">Ayam Goreng</option>
                <option value="Sate Ayam">Sate Ayam</option>
                <option value="Sayur Lodeh">Sayur Lodeh</option>
                <option value="Sayur Asam">Sayur Asam</option>
                <option value="Gorengan">Gorengan</option>
                <option value="Usus Goreng">Usus Goreng</option>
              </select>
              </div>
              
              <div class="form-group">
                <label for="username">Nomor Meja</label>
                <input type="text" class="form-control" id="nomor_meja" name="nomor_meja" placeholder="Masukan Nomor Meja" value="<?php echo $nomor_meja ?>">
              </div>

              <!--<div class="form-group">
	              <label for="username">Harga</label>
	              <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan Harga" value="<?php echo $harga ?>">
              </div> -->

              <div class="col d-flex align-items-end justify-content-center">
		            <div class="col text-center">
			            <h5>Harga :</h5>
			          </div>
			          <div class="col" id="hargaMakanan">
			            <h5>Rp.  0</h5>
			          </div>
			        </div>
              
              <div class="row mt-3">
			          <div class="col">
			            <label for="jumlahMakanan" class="form-label">Berapa Porsi Makanan</label>
			            <input type="number" class="form-control" name="jumlahMakanan" id="jumlahMakanan" min="1" value="1">
			          </div>
		          </div>

              <?php
            if (isset($_GET['ubah'])) {
            ?>

            <button type="sumbit" name="aksi" value="edit" class="btn btn-primary mb-5">Edit</button>

            <?php
            } else {
            ?>

            <button type="sumbit" name="aksi" value="add" class="btn btn-primary mb-5">Tambah</button>

            <?php
            }
            ?>

            <a href="pesanan.php" type="button" class="btn btn-info mb-5">Back</a>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS (optional) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
