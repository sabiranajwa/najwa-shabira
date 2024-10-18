<!DOCTYPE html>
<html>
<head>
  <title>Pemrograman Berorientasi Objek</title>
</head>
<body >
  <img src="ice bear.jpg" >

  <h1 align="center" style="color: blue;">Pemrograman Berorientasi Objek</h1>

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
  <table border="1">
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
      </tr>.
    </tbody>
  </table>
<h3 align="center">PHP</h3> <br>
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

<br>
<h3>Data Mobil</h3>
<p>
    <?php
    class Mobil {
      public $object;
      public $warna;

      function set_name ($object) {
        $this->object = $object;
      }
      function get_name() {
        return $this->object;
      }
    }

    $toyota = new Mobil ();
    $Biru_Metalik = new Mobil  ();
    $toyota-> set_name ('toyota');
    $Biru_Metalik-> set_name ('Biru Metalik');
    
    echo $toyota->get_name();
    echo "<br>";
    echo $Biru_Metalik->get_name();
    ?>
</p>
</body>
</html>