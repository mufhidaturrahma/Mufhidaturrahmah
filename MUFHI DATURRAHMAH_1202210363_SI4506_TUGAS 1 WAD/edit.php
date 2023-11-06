<?php
// include database connection file
require("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama_produk=$_POST['nama_produk'];
    $harga=$_POST['harga'];
    $kategori=$_POST['kategori'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE petshop SET nama_produk='$nama_produk',kategori='$kategori',harga='$harga' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM petshop WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama_produk = $user_data['nama_produk'];
    $kategori = $user_data['kategori'];
    $harga = $user_data['harga'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
 
<body>
    
    
    <div class="w-screen h-screen" data-theme="light">
        <div class="h-screen w-screen justify-center py-[6em] flex bg-[#6372B3]">
            <form name="update_user" method="post" action="edit.php" class="px-[4em] justify-center items-start  bg-white shadow-xl rounded-xl gap-4 flex flex-col">
                        <div>
                            <h1 class="font-semibold">Nama Barang</h1>
                            <input type="text" name="nama_produk" class="input input-bordered w-full" value=<?php echo $nama_produk;?>>
                        </div>
                   
                        <div>
                            <h1 class="font-semibold">Kategori</h1>
                            <!-- <input type="text" name="email" class="input input-bordered w-full"  value=<?php echo $kategori;?>> -->
                            <select name="kategori" class="input input-bordered w-full">
                                <option value="Hewan Peliharaan" <?php echo ($kategori == 'Hewan Peliharaan') ? 'selected' : ''; ?>>Hewan Peliharaan</option>
                                <option value="Makanan Hewan" <?php echo ($kategori == 'Makanan Hewan') ? 'selected' : ''; ?>>Makanan Hewan</option>
                                <option value="Perlengkapan" <?php echo ($kategori == 'Perlengkapan') ? 'selected' : ''; ?>>Perlengkapan</option>
                                <option value="Obat-obatan Hewan" <?php echo ($kategori == 'Obat-obatan Hewan') ? 'selected' : ''; ?>>Obat-obatan Hewan</option>
                            </select>
                        </div>kategori
                        <div>
                            <h1 class="font-semibold">Harga</h1>
                            <input type="text" name="harga" class="input input-bordered w-full" value=<?php echo $harga;?>>                     
                        </div>
                            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>

                                <div class="w-full mt-4 flex flex-col justify-center items-center gap-3">
                                    <input type="submit" name="update" value="Update" class="btn bg-green-500 w-[80%] shadow-xl">
                                    <a href="index.php" class="btn bg-warning w-[80%] shadow-xl">CANCEL</a>
                                </div>
                            </div>
                   
            </form>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>

?>