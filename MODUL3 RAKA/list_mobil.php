<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div>
            <h1>List Mobil</h1>
            <table class="table">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Harga</th>
                    <th scope="col"><center>Action</center></th>
                        
                </tr>
            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query = mysqli_query($conn,"SELECT * FROM showroom_mobil");
            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            if ($query) {
                while ($row = mysqli_fetch_assoc($query)){
            
            
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            ?>
            <tr>
                <td><?= $row ['nama_mobil']; ?></td>
                <td><?= $row ['brand_mobil']; ?></td>
                <td><?= $row ['warna_mobil']; ?></td>
                <td><?= $row ['tipe_mobil']; ?></td>
                <td><?= $row ['harga_mobil']; ?></td>
                <td ><center> 
                <a style="background-color: blue;" class="btn btn-secondary" href="../MODUL 3/form_detail_mobil.php?id=<?= $row ["id"];?> " role="button">Detail</a></center>
                </td>
            </tr>
        </table>
        <?php
        }
    }
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->
            
            
            







            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            
            ?>
        </div>
    </center>
</body>
</html>
