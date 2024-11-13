<?php 
include "database.php";
$id_barang = $_GET['id_barang'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_najwa_stok WHERE id_barang ='$id_barang'");
$data =mysqli_fetch_array($query);

$id_barang=$data['id_barang'];
$nama_barang=$data['nama_barang'];
$stok=$data['stok'];
$harga_beli=$data['harga_beli'];
$harga_jual=$data['harga_jual'];
?>

<hr/>
<h3 align="center"> EDIT DATA USER</h3>
<form method="post" action="">
	<table align="center" border="0" cellpadding="4" cellspacing="2">
		<tr>
			<td>NAMA BARANG</td>
			<td><input type="text" name="nama_barang" size="50" value="<?php echo $nama_barang;?>"></td>
		</tr>
		
		<tr>
			<td>STOK</td>
			<td><input type="text" name="stok" size="50" value="<?php echo $stok;?>"></td>
		</tr>
		<tr>
			<td>HARGA BELI</td>
			<td><input type="text" name="harga_beli" size="50" value="<?php echo $harga_beli;?>"></td>
		</tr>
		<tr>
			<td>HARGA JUAL</td>
			<td><input type="text" name="harga_jual" size="50" value="<?php echo $harga_jual;?>"></td>
		</tr>
		<tr align="center">
			<td colspan ="2" >
				<hr>
				<input type="submit" name="simpan" value="SIMPAN PERUBAHAN">
			<br>
			<br>
				<a href="index.php?page=view_data" class="button-link" style="padding: 3px 17px; display: inline-block; background-color: #F0F0F0; text-decoration: none; font-size: 13px; border-radius: 5px; color: black; border: 2px solid black ;"> BATAL</a>
		
			</td>

		</tr>
	</table>
</form>

<?php 
include "database.php";
if (isset($_POST['simpan'])){
  $nama_barang = $_POST['nama_barang'];
  $stok = $_POST['stok'];
  $harga_beli = $_POST['harga_beli'];
  $harga_jual = ($_POST['harga_jual']);

	$input= mysqli_query($koneksi,"UPDATE tb_najwa_stok SET 
		nama_barang='$nama_barang',
		stok='$stok',
		harga_beli='$harga_beli',
		harga_jual= '$harga_jual' WHERE id_barang ='$id_barang'");

	if ($input) {
		echo "<script> alert ('Data berhasil diedit')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=view_data'>";
	}
	else {
		echo "<script> alert ('Data gagal diedit')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=edit&id_barang=$id_barang'>";
	}
	

} 
 	
  ?>