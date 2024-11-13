
<hr>
<h3 align="center">INPUT DATA STOK</h3>
<hr>
<form method="post" action="">
	<table align="center" border="0" cellpadding="4" cellspacing="2">
		
		<tr>
			<td>NAMA BARANG</td>
			<td><input type="text" name="nama_barang" size="50" placeholder="Isikan Nama Barang"></td>
		</tr>
		<tr>
			<td>STOK</td>
			<td><input type="text" name="stok" size="50" placeholder="Isikan stok"></td>
		</tr>
		<tr>
			<td>HARGA BELI</td>
			<td><input type="text" name="harga_beli" size="50" placeholder="Isikan Harga Beli"></td>
		</tr>
		<tr>
			<td>HARGA JUAL</td>
			<td><input type="text" name="harga_jual" size="50" placeholder="Isikan Harga Jual"></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="simpan" value="SIMPAN">
			</td>
		</tr>
	</table>
	</form>
</div>
		<?php 
		include"database.php";
        if (isset($_POST['simpan'])) {
        	$nama_barang = $_POST['nama_barang'];
        	$stok = $_POST['stok'];
            $harga_beli = $_POST['harga_beli'];
        	$harga_jual = ($_POST['harga_jual']);
        	


        	$input=mysqli_query($koneksi,"INSERT INTO tb_najwa_stok VALUES ('$id_barang','$nama_barang','$stok','$harga_beli','$harga_jual')");
        	if ($input) {
        		echo "<script> alert('Data berhasil ditambahkan');</script>";
        		echo "<meta http-equiv='refresh' content='0;url=?page=view_data'>";
        		
        	}else {
        		echo "<script> alert('Data gagal ditambahkan');</script>";
        		echo "<meta http-equiv='refresh' content='0;url=?page=view_data'>";
        	}
        	

        }
		 ?>

		