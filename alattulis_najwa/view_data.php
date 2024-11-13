
<hr/>
<h3  align="center">STOK BARANG</h3>

</table>
</form>

<hr/>
<style >
	.edit_icon{
		text-decoration: none;
		color: slategrey;
		font-size: 20px;
	}
	.hapus_icon{
		text-decoration: none;
		color: slategrey;
		font-size: 20px;
	}
</style>
<table width ="100%" align="center" cellspacing="0" cellpadding="2">
<thead align="center">
<tr>
		<th align="center">No</th>
		<th>NAMA BARANG</th>
		<th>STOK</th>
		<th>HARGA BELI</th>
		<th>HARGA JUAL</th>
		<th>EDIT</th>
		<th>HAPUS</th>
</tr>
</thead>

<?php 
		include "database.php";
		$query = mysqli_query($koneksi,"SELECT * FROM tb_najwa_stok ORDER BY id_barang");
		$total = mysqli_num_rows($query);
		$no = 1;
		while ($data=mysqli_fetch_array($query)) {
			
		 ?>

<tbody>
<tr>
		<td align="center"><?php echo $no; ?></td>
		<td align="center"><?php echo $data['nama_barang']; ?></td>
		<td align="center"><?php echo $data['stok'];?></td>
		<td align="center"><?php echo $data['harga_beli']; ?></td>
		<td align="center"><?php echo $data['harga_jual'];?></td>
		 			<td align="center">
		 			<a href="?page=edit&id_barang=<?php echo $data['id_barang'];?>"><span class="edit_icon">&#9998; </span> </a>
		 			</td>
		 			<td align="center">
		 				<a href="?page=proses&id_barang=<?php echo $data['id_barang']; ?>" onclick="return confirm ('Anda yakin ingin menghapus data <?php echo $data['nama_barang'];?> ?')"><span class="hapus_icon">&#10006; </span> </i></a>
		 			</td>
		 	</tr>

		 	<?php $no++;} ?>

		 </tbody>
</table>

<table width="100%" cellpadding="3">
	<tr style="background-color: lightgrey;">
		<td>Jumlah : <?php echo $total; ?> barang</td>
	</tr>
</table>
	