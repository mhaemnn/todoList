<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>From Pemesanan</title>
  <link rel="stylesheet" href="../css/style.css">
  <script>
    function msg() {
      alert("Apakah anda yakin!!!")
    }

    function cobaclik() {
      alert("Apakah data anda sudah bener!!!")
    }
  </script>

</head>

<body>
  <div class="container">
    <h2>From Pemesanan</h2>
    <!-- <img src="../img/bus.png" alt=""> -->
    <table cellspacing="20" cellpadding="0">
      <form action="" method="post">

        <!-- namapengguna -->
        <tr>
          <td><label for="nama">Nama Lengkap</label></td>
          <td colspan="2"><input type="text" id="nama" name="nama" max="16"></td>
        </tr>

        <!-- no indentitas -->
        <tr>
          <td><label for="identitas">Nomor Identitas</label></td>
          <td colspan="2"><input type="number" id="identitas" name="identitas" max="10"></td>
        </tr>

        <!-- No hp -->
        <tr>
          <td><label for="phone">No. HP</label></td>
          <td colspan="2"><input type="tel" id="phone" name="phone" placeholder="+62" max="12"></td>
        </tr>

        <!-- kelas penumpang -->
        <tr>
          <td><label for="penumpang">Kelas Penumpang</label></td>
          <td colspan="2">
            <select name="kelas" id="kelas" name="kelas" style="width:77% ;">
              <option value="Eksekutif">Eksekutif</option>
              <option value="Bisnis">Bisnis</option>
              <option value="Ekonomi">Ekonimi</option>
            </select>
          </td>
        </tr>

        <!-- jadwal keberangkatna -->
        <tr>
          <td><label for="jadwal_keber">Jadwal Keberangkatan</label></td>
          <td colspan="2"><input type="date" id="jadwal_keber" name="jadwal_keber" style="width: 15em" ;></td>
        </tr>

        <!-- jumlah penumpang -->
        <tr>
          <td><label for="jmlPenumpang">Jumlah Penumpang</label></td>
          <td colspan="2"><input type="number" id="jmlPenumpang" name="jmlPenumpang" placeholder="Penumpang umur < 60"></td>
        </tr>
        <tr>
          <td><label for="jmlPenumLansi">Jumlah Penumpang Lansia</label></td>
          <td colspan="2"><input type="number" id="jmlPenumLansia" name="jmlPenumLansia" placeholder="Penumpang umur > 60"></td>
        </tr>

        <!-- harga tiket & bayar tiket -->
        <!--
		<tr>
          <td><label for="setHarga">Harga Tiket</label></td>
          <td><label id="setHarga"> 0</label></td>
        </tr>
        <tr>
          <td><label for="setBayar">Total Bayar</label></td>
          <td><label id="setBayar">0</label></td>
        </tr>
		-->
        <!-- checkbox menyutujui -->
        <tr>
          <td><input type="checkbox" onclick="cobaclik()"></td>
          <td><i>Saya dan atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah diterapkan</i></td>
        </tr>

        <!-- button pesan tiket, totol & reset -->
        <tr>
          <td></td>
          <td><input type="submit" value="Pesan Tiket" class="submit" name="submit"> <input type="reset" value="Reset" class="reset" onclick="msg()"></td>
        </tr>

    </table>
    </form>

    <!-- soucecode php -->

  </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $identitas = $_POST['identitas'];
  $phone = $_POST['phone'];
  $kelas = $_POST['kelas'];
  $jadwal_keber = $_POST['jadwal_keber'];
  $jmlPenumpang = $_POST['jmlPenumpang'];
  $jmlPenumLansia = $_POST['jmlPenumLansia'];

  $cari_harga = mysqli_fetch_assoc(mysqli_query($conn, "SELECT `harga_tiket` FROM `kelas_bus` WHERE `nama`='$kelas'"));
  $harga = $cari_harga['harga_tiket'];
  //echo $harga;

  $diskon = 10;
  $harga_umum = $jmlPenumpang * $harga;
  $harga_lansia = $jmlPenumLansia * ($harga * ((100 - $diskon) / 100));
  $total = $harga_umum + $harga_lansia;


  $qsismpan = mysqli_query($conn, "
	INSERT INTO `fpemesanan`
	(`nama`, `no_Idn`, `nohp`, 
	`klsPenumpang`, `jwdPenumpang`, 
	`jmlPenumpang`, `jmlPenumpangLansia`, 
	`hargaTiket`, `totalBayar`) VALUES 
	('$nama','$identitas','$phone',
	'$kelas','$jadwal_keber','$jmlPenumpang','$jmlPenumLansia',
	'$harga','$total')
	");

  if ($qsismpan) {
    echo "<script>alert('Data sukses Tersimpan!'); window.location = 'index.php'</script>";
  } else {
    echo "<script>alert('Data gagal Tersimpan!'); window.location = 'index.php'</script>";
  }


  //echo "$harga_umum </br>";
  //echo "$harga_lansia </br>";
  //echo "$total </br>";

}
?>