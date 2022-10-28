<!DOCTYPE html>
<html>

<head>
  <title>From Pemesanan</title>
  <link rel="stylesheet" href="../css/style.css">
  <script>
    function msg() {
      alert("Apakah anda yakin!!!")
    }
  </script>
</head>

<body>
  <div class="container">
    <h2>From Pemesanan</h2>
    <table cellspacing="20" cellpadding="0">
      <form action="/action_page.php" method="post">

        <!-- namapengguna -->
        <tr>
          <td><label for="nama">Nama Lengkap</label></td>
          <td colspan="2"><input type="text" id="nama"></td>
        </tr>

        <!-- no indentitas -->
        <tr>
          <td><label for="identitas">Nomor Identitas</label></td>
          <td colspan="2"><input type="number" id="identitas"></td>
        </tr>

        <!-- No hp -->
        <tr>
          <td><label for="phone">No. HP</label></td>
          <td colspan="2"><input type="tel" id="phone" placeholder="+62"></td>
        </tr>

        <!-- kelas penumpang -->
        <tr>
          <td><label for="penumpang">Kelas Penumpang</label></td>
          <td colspan="2">
            <select name="penumpang" id="penumpang" style="width:77% ;">
              <option value="">Eksekutif</option>
              <option value="">Bisnis</option>
              <option value="">Ekonimi</option>
            </select>
          </td>
        </tr>

        <!-- jadwal keberangkatna -->
        <tr>
          <td><label for="jadwal_keber">Jadwal Keberangkatan</label></td>
          <td colspan="2"><input type="date" id="jadwal_keber" style="width: 15em" ;></td>
        </tr>

        <!-- jumlah penumpang -->
        <tr>
          <td><label for="jmlPenumpang">Jumlah Penumpang</label></td>
          <td colspan="2"><input type="number" id="jmlPenumpang"></td>
        </tr>
        <tr>
          <td><label for="jmlPenumLansi">Jumlah Penumpang Lansia</label></td>
          <td colspan="2"><input type="number" id="jmlPenumLansi"></td>
        </tr>

        <!-- harga tiket & bayar tiket -->
        <tr>
          <td><label for="setHarga">Harga Tiket</label></td>
          <td><label id="setHarga">0</label></td>
        </tr>
        <tr>
          <td><label for="setBayar">Total Bayar</label></td>
          <td><label id="setBayar">0</label></td>
        </tr>

        <!-- checkbox menyutujui -->
        <tr>
          <td><input type="checkbox" class="ukuran-checkbox"></td>
          <td><i>Saya dan atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah diterapkan</i></td>
        </tr>

        <!-- button pesan tiket, totol & reset -->
        <tr>
          <td></td>
          <td><input type="submit" value="Pesan Tiket"> <input type="reset" value="Reset" onclick="msg()"></td>
        </tr>

    </table>
    </form>
  </div>
</body>

</html>