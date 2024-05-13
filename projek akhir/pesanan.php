<?php
include 'koneksi.php'; 

$query = "SELECT * FROM pesanan;";
$mysql = mysqli_query( $connect, $query );

$no = 0;

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="row">
        <div class="col-3">
            <nav class="sidebar">
            <!-- Kode untuk sidebar -->
            <header>
                    <div class="image-text">
                        <span class="image">
                            <img src="img/download.jpg" alt="logo">
                        </span>
                        
                        <div class="text header-text">
                            <span class="name">BAKTI IDHATA</span>
                            <span class="profession">WARTEG SEDERHANA</span>
                        </div>
                    </div>

                    <i class='bx bx-chevron-right toogle'></i>
                </header>
                <div class="menu-bar">
                    <div class="menu">

                        <ul class="menu-links">
                            <li class="search-box">
                                <i class='bx bx-search-alt-2 icon' ></i>
                                <input type="search" placeholder="Search..">
                            </li>
                        </ul>

                        <ul class="menu-links">
                            <li class="nav-link">
                                <a href="">
                                <i class='bx bx-home icon'></i>
                                <span class="text nav-text"> DASHBOARD</span></a>
                            </li>
                        </ul>
                        <ul class="menu-links">
                            <li class="nav-link">
                                <a href="about.html">
                                    <i class='bx bx-male-female'></i>
                                <span class="text nav-text"> ABOUT US</span></a>
                            </li>
                        </ul>
                        <ul class="menu-links">
                            <li class="nav-link">
                                <a href="menu.html">
                                    <i class='bx bx-food-menu'></i>
                                <span class="text nav-text"> Menu</span></a>
                            </li>
                        </ul>
                        <ul class="menu-links">
                            <li class="nav-link">
                                <a href="pesanan.php">
                                    <i class='bx bx-food-menu'></i>
                                <span class="text nav-text"> Pesanan</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>


        <div class="col-8">
            <div class="col">
            <h1>Table Pesanan</h1>
            <table class="table caption-top">
                <!-- Kode untuk table -->
                <caption>List of users</caption>
                <thead>

                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Makanan</th>
                    <th scope="col">Nomor Meja</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                    </tr>

                </thead>
                
                <tbody>
                <?php
                    while ( $result = mysqli_fetch_assoc( $mysql ) ) {
                ?>
            <tr>
                <td>
                    <?php echo ++ $no ?>
                </td>
                <td>
                    <?php echo $result['nama']; ?>
                </td>
                <td>
                    <?php echo $result['jenis_makanan']; ?>
                </td>
                <td>
                    <?php echo $result['nomor_meja']; ?>
                </td>
                <td>
                    <?php echo $result['harga']; ?>
                </td>
                <td>
                    <a href="pesan.php?ubah=<?php echo $result['id']; ?>" type="button" ><i class='bx bx-message-square-edit'></i></a>
                    
                    <a href="proses.php?hapus=<?php echo $result['id']; ?>" t
                    ype="button" onClick="return confirm('Yng beneeeer mau di apus~')"><i class='bx bx-trash' ></i></a>
                </td>
                </tr>
                <?php
                        }
                    ?>

                </tbody>
    ,        </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
