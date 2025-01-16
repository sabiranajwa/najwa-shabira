<!DOCTYPE html>
<html>
<head>
  <title>Pemrograman Berorientasi Objek</title>
</head>
<style >
  body {
    background-color: blanchedalmond;
  }
</style>
<body >
  <style>
    img {
      align-items: center;
      width: 25%;
      height: 5%;
      margin: 0;
    }
  </style>
  <img src="ice bear.jpg" >

  <h1 align="center" style="color: brown;">Pemrograman Berorientasi Objek</h1>

  <h2>1. Pengertian</h2>
  <p>Pemrograman berorientasi objek (Inggris: object-oriented programming disingkat OOP) merupakan paradigma pemrograman berdasarkan konsep "objek", yang dapat berisi data dalam bentuk <em>field</em> atau dikenal juga sebagai <em>atribut</em>; serta kode, dalam bentuk <em>fungsi</em>/<em>prosedur</em> yang dikenal juga sebagai <em>method</em>. Semua data dan fungsi di dalam paradigma ini dibungkus dalam <em>kelas-kelas</em> atau <em>objek-objek</em>. Bandingkan dengan logika pemrograman terstruktur. Setiap objek dapat menerima pesan, memproses data, dan mengirim pesan ke objek lainnya.</p>

  <h2>2. Bahasa Pemrograman Yang mendukung PBO</h2>
  <p>Berikut ini adalah Bahasa pemrograman yang mendukung OOP antara lain seperti:</p>
  <ul>
    <li>Visual Foxpro</li>
    <li>Java</li>
    <li>C++</li>
    <li>Pascal (bahasa pemrograman)</li>
    <li>SIMULA</li>
    <li>Smalltalk</li>
    <li>Ruby</li>
    <li>Python</li>
    <li>PHP</li>
    <li>TypeScript</li>
    <li>C#</li>
    <li>Delphi</li>
    <li>Eiffel</li>
    <li>Perl</li>
    <li>Adobe Flash AS 3.0</li>
  </ul>

  <h2>3. Membuat Tabel kategori Produk</h2>
  <style>
    table{
      width: 40%;
      border-collapse: collapse;
      margin: 20px 0;
    }
    th, td {
      border: 1px solid #ddddd;
      text-align: left;
      padding: 8px;
    }
    th {
      background-color:rosybrown;
    }
    tr {
      background-color: #f9f9f9;
    }
    th:hover {
      background-color: #f1f1f1;
    }
  </style>
  <table>
    <thead>
      <tr>
        <th>NO</th>
        <th>Kategori Produk</th>
        <th>Nama Produk</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Bumbu Dapur</td>
        <td>Garam</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Bumbu Dapur</td>
        <td>Cabe</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Bumbu Dapur</td>
        <td>Lengkuas</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Bumbu Dapur</td>
        <td>Terasi</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Sembako</td>
        <td>Beras</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Sembako</td>
        <td>Minyak Goreng</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Sembako</td>
        <td>Gula Pasir</td>
      </tr>
    </tbody>
  </table>

<h2>4. Membuat Tabel Produk</h2>
  <table border="1">
    <thead>
      <tr>
        <th>NO</th>
        <th>Produk</th>
        <th>stok</th>
        <th>harga</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Garam</td>
        <td>10</td>
        <td>7000</td>
      </tr>
      <tr>
        <td>2</td>
        <td>cabe</td>
        <td>10</td>
        <td>25000</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Lengkuas</td>
        <td>10</td>
        <td>12000</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Terasi</td>
        <td>10</td>
        <td>35000</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Beras</td>
        <td>10</td>
        <td>13000</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Minyak Goreng</td>
        <td>10</td>
        <td>15000</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Gula Pasir</td>
        <td>10</td>
        <td>13000</td>
      </tr>
    </tbody>
  </table>
<h3 align="center" style="color:brown;">PHP</h3> <br>
<h3>Data Buah</h3>
  <p>
    <?php
    class Buah {
      public $nama;
      public $warna;

      function set_name ($nama) {
        $this->nama = $nama;
      }
      function get_name() {
        return $this->nama;
      }
    }

    $apel = new Buah ();
    $pisang = new Buah ();
    $apel-> set_name ('Apel');
    $pisang-> set_name ('Pisang');
    
    echo $apel->get_name();
    echo "<br>";
    echo $pisang->get_name();
    ?>
</p>
<h2>Data Mobil</h2>
<p>
    <?php
    class Mobil {
      public $objek;
      public $warna;

      function set_name ($objek) {
        $this->objek = $objek;
      }
      function get_name() {
        return $this->objek;
      }
       function set_warna ($warna) {
        $this->warna = $warna;
      }
      function get_warna() {
        return $this->warna;
      }
    }

    $Toyota = new Mobil ();
    $Toyota-> set_name ('Toyota');
    $Toyota-> set_warna ('Biru Metalik');
    
    echo $Toyota->get_name();
    echo "<br>";
    echo $Toyota->get_warna();
    ?>
</p>
<p>
  <h2 style="color:brown;" align="left"> Pertemuan-4 </h2>
  <h3 style="color:black;" align="left">Konstruktor dan Desruktor</h3>
  <h4 style="color:black;" align="left">Konstruktor</h4>

  <?php
  class buahh {
    public $nama;
    public $warna;

    function __construct($nama, $warna) {
      $this->nama = $nama;
      $this->warna = $warna;
    }
    function get_nama() {
      return $this->nama;

    }
    function get_warna() {
      return $this->warna;
      
    }
  }

  $apel = new buahh("apel","merah");
  echo $apel->get_nama();
  echo "<br>";
  echo $apel->get_warna();
  ?>
<p>
  <h4 style="color:black;" align="left">Desruktor</h4>
  <?php
  class buahhh {
    public $nama;
    public $warna;

    function __construct($nama, $warna) {
      $this->nama = $nama;
      $this->warna = $warna;
    }
    function __destruct() {
      echo "buah tersebut adalah {$this->nama} dan warnanya adalah {$this->warna}.";
    }
  }

  $apel = new buahhh("apel", "merah");
  ?>
</p>

  <h2 style="color: brown;" align="left">Pertemuan-6</h2>

  <h3 style="color:black;" align="left">Konstanta dan Abstrak</h3>
  <h4>Konstanta</h4>

  <h5>Contoh 1</h5>
<?php
  class komputer {
    const DOLLAR = '12000';
  }
  echo "harga dollar saat ini = Rp.".komputer::DOLLAR;
?>
<h5>Contoh 2</h5>
<?php
  class selamat_tinggal {
    const LEAVING_MESSAGE ="Terima Kasih Telah Berkunjung";
  }
  echo selamat_tinggal::LEAVING_MESSAGE;
?>
<h5>Contoh 3</h5>
<?php
  class Selamat_Tinggall {
    const LEAVING_MESSAGE ="Terima Kasih Telah Berkunjung";
    public function byebye(){
      echo self::LEAVING_MESSAGE;
    }
  }
  $Selamat_Tinggall = new Selamat_Tinggall();
  $Selamat_Tinggall->byebye();
?>
<h4 style="color:black;" align="left">Abstrak</h4>
<h5>Contoh 1</h5>
<?php
  Abstract class Mobill {
    public $nama;
    public function __construct($nama) {
      $this->nama=$nama;
    }
    Abstract public function intro() : string;
  }
      //kelas Anak
  class Audi extends Mobill{
    public function intro() : string{
      return "Untuk kualitas terbaik! Saya pilih $this->nama!";
    }
  }
  class Volvo extends Mobill{
    public function intro() : string{
      return "Untuk hemat bahan bakar! Saya pilih $this->nama!";
    }
  }
  class Citroen extends Mobill{
    public function intro() : string{
      return "Untuk purna jual! Saya pilih $this->nama!";
    }
  }

  //membuat objek  dari kelas anak
  $Audi =new Audi("BMW");
  echo $Audi->intro();
  echo "<br>";

  $Volvo =new Volvo("Panther");
  echo $Volvo->intro();
  echo "<br>";

  $Citroen =new Citroen("Toyota");
  echo $Citroen->intro();
  echo "<br>";
?>
<h5>Contoh 2</h5>
<?php
  Abstract class ParentClass {
    //Metode Abstrak dengan argumen
    abstract protected function prefixName($nama);
  }
  class ChildClass extends ParentClass {
    public function prefixName($nama){
      if ($nama == "Ahmad Sulistiyo") {
        $prefix = "Mr.";
      } elseif ($nama == "Siti Aisyah"){
        $prefix = "Miss.";
      } else {
        $prefix = " ";
      }
      return "{$prefix} {$nama}";
    }
  }
  $class = new ChildClass;
  echo $class->prefixName("Ahmad Sulistiyo");
  echo "<br>";
  echo $class->prefixName("Siti Aisyah");
?>
<h5>Contoh 3</h5>
<?php
  Abstract class ParentClasss {
    //Metode Abstrak dengan argumen
    abstract protected function prefixName($nama);
  }
  class ChildClasss extends ParentClasss {
    //kelas anak dapat mendefinisikan argumen opsional yang tidak ada dalam metode abstrak induknya
    public function prefixName($nama, $separator = ".", $greet = "Dear"){
      if ($nama == "Ahmad Sulistiyo") {
        $prefix = "Mr";
      } elseif ($nama == "Siti Aisyah"){
        $prefix = "Miss";
      } else {
        $prefix = " ";
      }
      return "{$greet} {$prefix} {$separator} {$nama}";
    }
  }
  $class = new ChildClasss;
  echo $class->prefixName("Ahmad Sulistiyo");
  echo "<br>";
  echo $class->prefixName("Siti Aisyah");
?>
</p>
<h2 style="color: brown;" align="left">Pertemuan-7</h2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Tutorial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .code {
            background-color: whitesmoke;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            overflow-x: auto;
            font-family: "Courier New", Courier, monospace;
        }
        .section {
            margin-bottom: 40px;
        }
        h2 {
            color: #333;
        }
        p {
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Tutorial CRUD dengan PHP dan MySQL</h1>
    <p>Berikut adalah tutorial untuk membuat CRUD sederhana dengan PHP dan MySQL. Setiap langkah dilengkapi dengan kode program dan penjelasan.</p>

    <!-- 1. Membuat Database -->
    <div class="section">
        <h2>1. Membuat Database</h2>
        <div class="code">
<pre>
CREATE DATABASE db_najwa;

USE crud_db;

CREATE TABLE tb_najwa_stok (
    id_barang INT AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(255) NOT NULL,
    stok INT(12) NOT NULL,
    harga_beli INT(12),
    harga_jual INT(12)
);
</pre>
        </div>
        <p>
            <strong>Penjelasan:</strong><br>
            <ul>
              <li>
                <b>CREATE DATABASE db_najwa</b> Membuat database bernama db_najwa.
              </li>
              <li>
                <b>CREATE TABLE tb_najwa_stok</b> Membuat tabel tb_najwa_stok dengan kolom id_barang, nama_barang, stok, harga_beli dan harga_jual.
              </li>
              <li>
                <b>id_barang</b> menggunakan auto-increment untuk menghasilkan ID unik secara otomatis.
              </li>
            </ul>
        </p>
    </div>

    <!-- 2. Koneksi Database -->
    <div class="section">
        <h2>2. Koneksi Database </h2>
        <div class="code">
<pre>
&lt;?php
$koneksi = mysqli_connect("localhost","root","","db_najwa") or die (mysqli_error);
?&gt;
</pre>
        </div>
        <p>
            <strong>Penjelasan:</strong><br>
            <ul>
              <li>
                <b>$koneksi</b> merupakan variabel yang digunakan untuk menyimpan koneksi ke database, variabel ini nantinya digunakan pada file lain untuk menjalankan query SQL ke database.
              </li>
              <li>
                <b>mysql_connect("localhost","root","","db_najwa"</b> merupakan fungsi bawaan PHP untuk membuat koneksi ke database MySQL.
              </li>
              <li>
                <b>or die(mysqli_error)</b> menangani kesalahan koneksi, jika koneksi gagal maka akan menampilkan pesan error dan menghentikan eksekusi program.
              </li>
              <li>
                <b>mysqli_error</b> untuk memberikan informasi detail tentang kesalahan yang terjadi pada koneksi.
              </li>
            </ul>
        </p>
    </div>

     <!-- 3. Read Data -->
    <div class="section">
        <h2>3. Membuat tampilan awal (index)</h2>
        <div class="code">
<pre>
  &lt;!DOCTYPE html>
&lt;html lang="id">
&lt;head>
    &lt;meta charset="UTF-8">
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
    &lt;title> PUSAT PENULISAN BY NAJWA&lt;/title>
    &lt;style>
        body {
            font-family: Arial, sans-serif;
            margin: 0 auto;
            padding: 0;
            background-color:white;
            width: 60%;

        }
        header {
            background: slategrey;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: auto;
            margin: auto;
            overflow: hidden;
        }
        h1 {
            margin: 20px 0;
        }

        .menu {
            background-color: darkgrey;
            width: 100%;
            height: 100% auto;
            float: left;
         }
        ul{
            overflow: hidden;
         }
        ul li{
            list-style-type: none;
            display: inline;
            margin-inline: 10px;
         }
        .content {
            width: 100%;
            height: 100% auto;
            background: #FAD0C9;
            padding: 20px;
            border-radius: 5px;
            float: left;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            padding: 20px 0;
            background: slategrey;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    &lt;/style>
&lt;/head>
&lt;body>
    &lt;header>
        &lt;h1>SELAMAT DATANG &lt;br> DI WEBSITE PUSAT PENULISAN BY NAJWA&lt;/h1>
    &lt;/header>
    &lt;div class="container">
        &lt;div class="menu">
               &lt;ul>
                    &lt;li>&lt;a href="?page=home.php">Home&lt;/a>&lt;/li>
                    
                    &lt;li>&lt;a href="?page=view_data">Lihat Stok&lt;/a>&lt;/li>
                    
                     &lt;li>&lt;a href="?page=add_data">Input Stok&lt;/a>&lt;/li>

               &lt;/ul>
          &lt;/div>
        &lt;div class="content">
            &lt;p>
                    &lt;?php 
                    error_reporting(0);
                    switch($_GET['page']) {     
                         default:
                         include "home.php";
                         break;
                    case "add_data";
                    include "add_data.php";
                    break;
                    case "view_data";
                    include "view_data.php";
                    break;
                    case "proses";
                    include "proses.php";
                    break;
                    case "edit";
                    include "edit.php";
                    break;
                     } 
                     ?>

               &lt;/p>
        &lt;/div>
        
    &lt;/div>
    &lt;footer>
        &lt;p>&copy; 42423013_najwa &lt;br>Website Kami. Semua hak dilindungi.&lt;/p>
 </pre>
</div>
          <p>
            <strong>Penjelasan:</strong><br>
            <ul>
              <li>
                <b>&lt;style></b> berisi CSS yang mendesain elemen pada halaman yang diatur dalam internal style sheet.
              </li>
              <li>
                <b>&lt;div class="container"></b>Kontainer utama yang membungkus semua elemen ditengah halaman.
              </li>
              <li>
                <b>&lt;div class="menu"></b>membungkus menu navigasi dibagian atas halaman.
              </li>
              <li>
                <b>&lt;a href="?page=home.php"></b> link dinamis untuk navigasi.
              </li>
              <li>
                <b>&lt;div class="content"></b> berisi berisi konten yang akan diubah sesuai link yang di klik.
              </li>
              <li>
                <b>error_reporting(0)</b> menonaktifkan pesan error ditampulkan dihalaman agar halaman terlihat lebih rapi.
              </li>
              <li>
                <b>$_GET['page']</b> mengambil nilai dari parameter URL.
              </li>
              <li>
                <b>default</b> jika page tidak ditentukan maka aan memuat file <b>home.php</b>
              </li>
              <li>
                <b>include</b> menyisipkan isi file PHP yang sesuai ke halaman saat ini.
              </li>
            </ul>
          </p>
 </div> 

    <!-- 3. Read Data -->
    <div class="section">
        <h2>4. Menampilkan Data (view_data)</h2>
        <div class="code">
<pre>
  &lt;hr/>
&lt;h3  align="center">STOK BARANG&lt;/h3>

&lt;/table>
&lt;/form>

&lt;hr/>
&lt;style >
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
&lt;/style>
&lt;table width ="100%" align="center" cellspacing="0" cellpadding="2">
&lt;thead align="center">
&lt;tr>
    &lt;th align="center">No&lt;/th>
    &lt;th>NAMA BARANG&lt;/th>
    &lt;th>STOK&lt;/th>
    &lt;th>HARGA BELI&lt;/th>
    &lt;th>HARGA JUAL&lt;/th>
    &lt;th>EDIT&lt;/th>
    &lt;th>HAPUS&lt;/th>
&lt;/tr>
&lt;/thead>
&lt;?php 
    include "database.php";
    $query = mysqli_query($koneksi,"SELECT * FROM tb_najwa_stok ORDER BY id_barang");
    $total = mysqli_num_rows($query);
    $no = 1;
    while ($data=mysqli_fetch_array($query)) {
      
     ?&gt;

&lt;tbody&gt;
    &lt;tr&gt;
        &lt;td align="center">&lt;?php echo $no; ?&gt;&lt;/td&gt;
        &lt;td align="center">&lt;?php echo $data['nama_barang']; ?&gt; &lt;/td&gt;
        &lt;td align="center">&lt;?php echo $data['stok'];?>&lt;/td &gt;
        &lt;td align="center">&lt;?php echo $data['harga_beli']; ?>&lt;/td&gt;
        &lt;td align="center">&lt;?php echo $data['harga_jual'];?>&lt;/td&gt;
              &lt;td align="center"&gt;
              &lt;a href="?page=edit&id_barang=&lt;?php echo $data['id_barang'];?>">&lt;span class="edit_icon"> &amp;#9998; &lt;/span> &lt;/a> &lt;/td&gt;
              &lt;td align="center">
            &lt;a href="?page=proses&id_barang=&lt;?php echo $data['id_barang']; ?>" onclick="return confirm ('Anda yakin ingin menghapus data &lt;?php echo $data['nama_barang'];?> ?')">&lt;span class="hapus_icon">&amp;#10006; &lt;/span> &lt;/i>&lt;/a>
          &lt;/tr&gt;
              &lt;?php $no++;} ?&gt;
      &lt;/tbody&gt;
  &lt;/table&gt;";
       &lt;table width="100%" cellpadding="3"&gt;
       &lt;tr style="background-color: lightgrey;"&gt;
       &lt;/tr &gt;
       &lt;/table&gt;
</pre>
        </div>
        <p>
            <strong>Penjelasan:</strong><br>
            <ul>
              <li>
                <b>style .edit_icon dan .hapus_icon</b>untuk mengatur tampilan link hapus dan edit data menjadi berbentuk icon </li>
              <li>
                <b>&lt;table></b> untuk membuat tabel untuk menampilkan data stok barang.
              </li>
              <li>
                <b>include "database.php";</b> untuk mengimpor file database.php untuk menggunakan koneksi database.
              </li>
              <li>
                <b>$query = mysqli_query(...); </b> menjalankan query untuk mengambil semua data dari tabel tb_najwa_stok dan mengurutkan berdasarkan id_barang.
              </li>
              <li>
                <b>$total=mysqli_num_rows($query);</b>  menghitung jumah baris dari data yang diambil.
              </li>
              <li>
                <b>while ($data=mysqli_fetch-array($query)){...} </b> loop untuk menampilkan semua data yang diambil dari query.
              </li>
              <li>
                <b>$data['...']</b> menampilkan data.
              </li>
              <li>
                <b>&lt;a herf="? page=edit&id_barang=..."></b> tautan untuk mengarahkan pengguna ke halaman edit, dengan mengirimkan id_barang melalui parameter URL.
              </li>
              <li>
                <b>onclick="return confirm(...)" </b> menampilkan konfirmasi sebelum data dihapus.
              </li>
            </ul>
        </p>
    </div>

    <!-- 4. Create Data -->
    <div class="section">
        <h2>5. Menambah Data (Add_data)</h2>
        <div class="code">
<pre>
&lt;hr>
&lt;h3 align="center">INPUT DATA STOK&lt;/h3>
&lt;hr>
&lt;form method="post" action="">
  &lt;table align="center" border="0" cellpadding="4" cellspacing="2">
    
    &lt;tr>
      &lt;td>NAMA BARANG&lt;/td>
      &lt;td>&lt;input type="text" name="nama_barang" size="50" placeholder="Isikan Nama Barang">&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>STOK&lt;/td>
      &lt;td>&lt;input type="text" name="stok" size="50" placeholder="Isikan stok">&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>HARGA BELI&lt;/td>
      &lt;td>&lt;input type="text" name="harga_beli" size="50" placeholder="Isikan Harga Beli">&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>HARGA JUAL&lt;/td>
      &lt;td>&lt;input type="text" name="harga_jual" size="50" placeholder="Isikan Harga Jual">&lt;/td>
    &lt;/tr>
    
    &lt;tr>
      &lt;td colspan="2" align="center">
        &lt;input type="submit" name="simpan" value="SIMPAN">
      &lt;/td>
    &lt;/tr>
  &lt;/table>
  &lt;/form>
&lt;/div>
    &lt;?php 
    include"database.php";
        if (isset($_POST['simpan'])) {
          $nama_barang = $_POST['nama_barang'];
          $stok = $_POST['stok'];
            $harga_beli = $_POST['harga_beli'];
          $harga_jual = ($_POST['harga_jual']);
          


          $input=mysqli_query($koneksi,"INSERT INTO tb_najwa_stok VALUES ('$id_barang','$nama_barang','$stok','$harga_beli','$harga_jual')");
          if ($input) {
            echo "&lt;script> alert('Data berhasil ditambahkan');&lt;/script>";
            echo "&lt;meta http-equiv='refresh' content='0;url=?page=view_data'>";
            
          }else {
            echo "&lt;script> alert('Data gagal ditambahkan');&lt;/script>";
            echo "&lt;meta http-equiv='refresh' content='0;url=?page=view_data'>";
          }
          

        }
     ?&gt;
</pre>
        </div>
        <p>
            <strong>Penjelasan:</strong><br>
            <ul>
              <li>
               Form menerima input stok barang.
              </li>
              <li>
              <b>&lt;table></b>menyusun input data dalam bentuk tabel agar lebih rapi.
              </li>
              <li>
              <b>&lt;input type="text"></b>kolom untuk memasukan atau menginputkan data.
              </li>
              <li>
              <b>&lt;input type="submit"></b> tombol untuk mengirim data yang diisi pengguna ke server.
              </li>
              <li>
                <b>include "database.php</b> menyertakan file <b>database.php</b> untuk menghubungkan aplikasi dengan database.
              </li>
              <li>
                <b>if (isset($_POST['simpan'])) {...}</b>mengecek apakah tombol submit telah ditekan.
              </li>
              <li>
                <b>$... = $_POST['...']</b> mengambil data dari form, data ini akan digunakan untuk menyusun query SQL.
              </li>
              <li>
                <b>mysqli_query($koneksi,"INSERT INTO tb_najwa_stok VALUES ('$id_barang','$nama_barang','$stok','$harga_beli','$harga_jual')")</b>menjalankan query SQL untuk menyimpan data ke database dengan id_barang yang otomatis keisi karena menggunakan auto-increment di database.
              </li>
              <li>
                <b> if ($input) {
            echo "&lt;script> alert('Data berhasil ditambahkan');&lt;/script>";
            echo "&lt;meta http-equiv='refresh' content='0;url=?page=view_data'>";
            
          }else {
            echo "&lt;script> alert('Data gagal ditambahkan');&lt;/script>";
            echo "&lt;meta http-equiv='refresh' content='0;url=?page=view_data'>";
          }
          </b> mengevaluasi apakah query berhasil disimpan, jika berhasil maka menampilkan pesan "data berhasil ditambahkan" dan mengarahkan kembali pada halaman view_data, sedangkan jika gagal maka akan menampilkan pesan gagal dan tetap mengarahkan pada halaman view_data.
              </li>

            </ul> 
        </p>
    </div>

    <!-- 5. Update Data -->
    <div class="section">
        <h2>6. Mengubah Data (Edit)</h2>
        <div class="code">
<pre>
&lt;?php 
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

&lt;hr/>
&lt;h3 align="center"> EDIT DATA USER&lt;/h3>
&lt;form method="post" action="">
  &lt;table align="center" border="0" cellpadding="4" cellspacing="2">
    &lt;tr>
      &lt;td>NAMA BARANG&lt;/td>
      &lt;td>&lt;input type="text" name="nama_barang" size="50" value="&lt;?php echo $nama_barang;?>">&lt;/td>
    &lt;/tr>
    
    &lt;tr>
      &lt;td>STOK&lt;/td>
      &lt;td>&lt;input type="text" name="stok" size="50" value="&lt;?php echo $stok;?>">&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>HARGA BELI&lt;/td>
      &lt;td>&lt;input type="text" name="harga_beli" size="50" value="&lt;?php echo $harga_beli;?>">&lt;/td>
    &lt;/tr>
    &lt;tr>
      &lt;td>HARGA JUAL&lt;/td>
      &lt;td>&lt;input type="text" name="harga_jual" size="50" value="&lt;?php echo $harga_jual;?>">&lt;/td>
    &lt;/tr>
    &lt;tr align="center">
      &lt;td colspan ="2" >
        &lt;hr>
        &lt;input type="submit" name="simpan" value="SIMPAN PERUBAHAN">
      &lt;br>
      &lt;br>
        &lt;a href="index.php?page=view_data" class="button-link" style="padding: 3px 17px; display: inline-block; background-color: #F0F0F0; text-decoration: none; font-size: 13px; border-radius: 5px; color: black; border: 2px solid black ;"> BATAL&lt;/a>
    
      &lt;/td>

    &lt;/tr>
  &lt;/table>
&lt;/form>

&lt;?php 
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
    echo "&lt;script> alert ('Data berhasil diedit')&lt;/script>";
    echo "&lt;meta http-equiv='refresh' content='0; url=?page=view_data'>";
  }
  else {
    echo "&lt;script> alert ('Data gagal diedit')&lt;/script>";
    echo "&lt;meta http-equiv='refresh' content='0; url=?page=edit&id_barang=$id_barang'>";
  }
  

} 
  
  ?&gt;
</pre>
        </div>
        <p>
            <strong>Penjelasan:</strong><br>
            <ul>
              <li>
                <b>include "database.php"</b> menyertakan file <b>database.php</b> yang berisi koneksi dengan database.
              </li>
              <li>
                <b>$_GET['id_barang']</b> mengambil nilai id_barang, misallnya mengambil nilai id_barang 123 maka yang akan diedit adalah data dengan id_barang tersebut.
              </li>
              <li>
                <b>$query = mysqli_query($koneksi,"SELECT * FROM tb_najwa_stok WHERE id_barang ='$id_barang'");
$data =mysqli_fetch_array($query);</b> menjalankan query sql untuk mengambl data sesuai dengan id_barang, mengambil hasil query asosiatif untuk memudahkan akses data, kemudian hasil disimpan dalam variabel $data yang kemudia dipakai untuk menampilkan nilai awal pada form edit.
              </li>
              <li> 
                <b>$... = $data['...']</b> menyimpan data awal barag dan ditampilkan pada form edit.
              </li>
              <li>
                <b>&lt;form method="post" action="">
                </b> mengirim data yang diedit ke server.
              </li>
              <li>
                <b>&lt;input type="text" name="nama_barang" size="50" value="<?php echo $nama_barang;?></b> menampilkan nilai awal didalam filed sehingga pengguna bisa melihat dan mengeditnya.
              </li>
              <li>
                <b>&lt;input type="submit" name="simpan" value="SIMPAN PERUBAHAN">
        &lt;a href="index.php?page=view_data" class="button-link" style="padding: 3px 17px; display: inline-block; background-color: #F0F0F0; text-decoration: none; font-size: 13px; border-radius: 5px; color: black; border: 2px solid black ;"> BATAL&lt;/a>
    </b> tombol submit untuk mengirimkan perubahan ke server untuk disimpan ke database, dan link baral untuk mengarahkan pengguna ke halaman lihat data tanpa melakukan perubahan.
              </li>
              <li>
                <b>if (isset($_POST['simpan'])) {...}</b> mengecek apakah tombo simpan perubahan sudah diklik.
              </li>
              <li>
                <b>$nama_barang = $_POST['nama_barang'];
  $stok = $_POST['stok'];
  $harga_beli = $_POST['harga_beli'];
  $harga_jual = ($_POST['harga_jual']);</b> mengambil data yang telah diedit oleh pengguna melalui form.
              </li>
              <li>
                <b>$input= mysqli_query($koneksi,"UPDATE tb_najwa_stok SET 
    nama_barang='$nama_barang',
    stok='$stok',
    harga_beli='$harga_beli',
    harga_jual= '$harga_jual' WHERE id_barang ='$id_barang'");
</b> memperbarui data di tabel tb_najwa_stok berdasarkan id_barang.
              </li>
              <li>
                <b> if ($input) {
    echo "&lt;script> alert ('Data berhasil diedit')&lt;/script>";
    echo "&lt;meta http-equiv='refresh' content='0; url=?page=view_data'>";
  }
  else {
    echo "&lt;script> alert ('Data gagal diedit')&lt;/script>";
    echo "&lt;meta http-equiv='refresh' content='0; url=?page=edit&id_barang=$id_barang'>";
  }</b> mengecek apakah berhasil atau tidak, jika berhasil maka menampilkan pesan berhasil dan mengarahkan pengguna ke halaman lihat_data, sedangkan jika gagal maka akan menampilan pesan gagal dan mengarahkan pengguna ke halaman edit barang agar dapat dicoba lagi.
              </li>
            </ul>

    </div>

    <!-- 6. Delete Data -->
    <div class="section">
        <h2>7. Menghapus Data (Proses)</h2>
        <div class="code">
<pre>
&lt;?php 
include"database.php";

$id_barang = $_GET ['id_barang'];
$query = mysqli_query($koneksi,"DELETE FROM tb_najwa_stok WHERE id_barang ='$id_barang'");
if ($query) {
            echo "&lt;script> alert ('Data berhasil dihapus')&lt;/script>";
            echo "&lt;meta http-equiv = 'refresh' content ='0;url =?page=view_data'>";
   } else {
    echo "Data anda gagal dihapus.Ulangi sekali lagi";
    echo "&lt;meta http-equiv = 'refresh' content ='0;url=?page=view_data'>";
   } ?&gt;
</pre>
        </div>
        <p>
            <strong>Penjelasan:</strong><br>
            <ul>
              <li>
                <b>include "database.php"</b> menyertakan file <b>database.php</b>untuk koneksi ke database.
              </li>
              <li>
                <b>$id_barang = $_GET['id_barang']</b> digunakan untuk mengidentifikasi data yang akan dihapud berdasarkan kolom id_barang.
              </li>
              <li>
                <b>mysqli_query($koneksi, "DELETE FROM tb_najwa_stok WHERE id_barang ='$id_barang'"</b> menjalankan query SQL untuk menghapus data dari tabel tb_najwa_stok dengan menggunakan id_barang sebagai patokan data mana yang akan dihapus.
              </li>
              <li>
                <b>if ($query) {...} else {...}</b> mengecek apakah query penghapusan berhasil dijalankan.
              </li>
            </ul>
            - 
        </p>
    </div>
</body>
</html>
</body>
</html>