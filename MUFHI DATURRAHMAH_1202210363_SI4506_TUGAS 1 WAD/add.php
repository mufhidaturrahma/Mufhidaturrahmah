<html>
<head>
    <title>Add Users</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
 
<body>

<div class="w-screen h-screen" data-theme="light">

    
 
    <div class="h-screen w-screen justify-center py-[6em] flex bg-[#6372B3]">
    <form action="add.php" method="post" name="form1" class="px-[4em] justify-center items-start  bg-white shadow-xl rounded-xl gap-4 flex flex-col">
            <div> 
                <h1 class="font-semibold">Nama Barang</h1>
                <input type="text" name="nama_produk" class="input input-bordered w-full">
            </d>
            <div> 
                <h1 class="font-semibold">Kategori</h1>
                <!-- <input type="email" name="email" class="input input-bordered w-full"> -->
                <select name="kategori" class="input input-bordered w-full">
                    <option value="kategori 1">Hewan Peliharaan</option>
                    <option value="kategori 2">Makanan Hewan</option>
                    <option value="kategori 3">Perlengkapan</option>
                    <option value="kategori 4">Obat-obatan Hewan</option>
                    <!-- Tambahkan lebih banyak kategori sesuai kebutuhan -->
                </select>
            </div>
            <div> 
                <h1 class="font-semibold">Harga</h1>
                <input type="text" name="harga" class="input input-bordered w-full">
            </div>

            <div class="w-full mt-4 flex flex-col justify-center items-center gap-3"> 
                <input type="submit" name="Submit" value="Add" class="btn font-bold bg-green-500 w-[80%] shadow-xl">
                <a href="index.php" class="btn font-bold bg-warning w-[80%] shadow-xl">BACK</a>
            </div>
        </table>
    </form>

    </div>
    
    <?php

    
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_produk = htmlspecialchars($_POST['nama_produk']);
        $kategori = $_POST['kategori'];
        $harga = $_POST['harga'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO petshop(nama_produk,kategori,harga) VALUES('$nama_produk','$kategori','$harga')");

        
        // Show message when user added
        echo "<script>
        alert('data berhasil ditambah!');
        document.location.href = 'index.php';
      </script>";
       
    }
    ?>



</div>

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>