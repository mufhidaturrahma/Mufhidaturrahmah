<?php


// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM petshop ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Pet Shop Fidah</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
 
<body>
    <div class="h-screen w-screen bg-[#6372B3]" data-theme="light" >

    <div class="flex w-screen justify-center mb-4">
        <img src="img/petshop_fidah.png" alt="indo" class="h-[10em]">
    </div>
        
        <div class="px-[6em]">
            <div class="flex w-full justify-start">
                <a href="add.php" class="btn bg-success p-2 btn-md font-bold mb-4 shadow-md hover:bg-sky-700">Tambah Produk Baru</a>
            </div>

         <div class="overflow-x-auto">
             <table class="table border text-black">
          
             <thead class="text-xs text-black uppercase bg-[#F1F5FE]">
                 <tr>
                     <th>Nama Produk</th> <th>Harga</th> <th>Kategori</th> <th>Action</th>
                 </tr>
             </thead>
             <tbody class="bg-white">
             <?php
             while ($user_data = mysqli_fetch_array($result)) :
             ?>
    <tr>
        <td><?= $user_data['nama_produk'] ?></td>
        <td>Rp. <?= $user_data['harga'] ?>, 00</td>
        <td><?= $user_data['kategori'] ?></td>
        <td>
            <a href="edit.php?id=<?= $user_data['id'] ?>" class="text-yellow-300">
                <button class="btn bg-green-600 font-bold">EDIT</button>
            </a> 
            <a href="delete.php?id=<?= $user_data['id'] ?>" onclick="return confirm('Apakah Kamu Yakin ingin menghapus data ini?')" class="text-red-600">
                <button class="btn bg-red-600 font-bold">DELETE</button>
            </a>
        </td>
    </tr>
<?php
endwhile;
?>
             </tbody>
             </table>
         </div>
     </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    
</body>
</html>

?>