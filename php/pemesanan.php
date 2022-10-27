<!DOCTYPE html>
<html>

<head>
  <title>From Pemesanan</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="container">
    <h2>From Pemesanan</h2>
    <form action="/action_page.php" method="post">
      <table border="1" cellspacing="5" cellpadding="0">
        <tr>
          <td><label for="nama">Nama Lengkap</label></td>
          <td colspan="2"><input type="text" id="nama"></td>
        </tr>
        <tr>
          <td><label for="identitas">Nomor Identitas</label></td>
          <td colspan="2"><input type="number" id="identitas"></td>
        </tr>
        <tr>
          <td><label for="phone">No. HP</label></td>
          <td colspan="2"><input type="tel" id="phone" placeholder="+62"></td>
        </tr>
        <tr>
          <td><label for="penumpang">Kelas Penumpang</label></td>
          <td colspan="2">
            <select name="penumpang" id="penumpang" style="width:100% ;">
              <option value="">Eksekutif</option>
              <option value="">Bisnis</option>
              <option value="">Ekonimi</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="jadwal_keber">Jadwal Keberangkatan</label></td>
          <td colspan="2"><input type="date" id="jadwal_keber" style="width:96%" ;></td>
        </tr>
        <tr>
          <td><label for="jmlPenumpang">Jumlah Penumpang</label></td>
          <td colspan="2"><input type="number" id="jmlPenumpang"></td>
        </tr>
        <tr>
          <td><label for="jmlPenumLansi">Jumlah Penumpang Lansia</label></td>
          <td colspan="2"><input type="number" id="jmlPenumLansi"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" value="Hitung Total Harga"><input type="submit" value="Pesan Tiket"><input type="reset" value="reset">
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>