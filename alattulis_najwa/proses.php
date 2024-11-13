<?php 
include"database.php";

$id_barang = $_GET ['id_barang'];
$query = mysqli_query($koneksi,"DELETE FROM tb_najwa_stok WHERE id_barang ='$id_barang'");
if ($query) {
	          echo "<script> alert ('Data berhasil dihapus')</script>";
	          echo "<meta http-equiv = 'refresh' content ='0;url =?page=view_data'>";
 	 } else {
 	 	echo "Data anda gagal dihapus.Ulangi sekali lagi";
 	 	echo "<meta http-equiv = 'refresh' content ='0;url=?page=view_data'>";
 	 } ?>