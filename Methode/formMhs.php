<html>
  <title>

  </title>
  <body>
    <h2>Pendataan Mahasiswa FST</h2>
    <form action="proses.php" method="get">
      <select name="jurusan">
        <option>Teknik Informatika</option>
        <option>Teknik Industri</option>
        <option>Sistem Informasi</option>
        <option>Matematika</option>
        <option>Teknik Elektro</option>
      </select>
      <select name="tahun">
        <option>2020</option>
        <option>2021</option>
        <option>2022</option>
      </select>
      Jumlah Mahasiswa: <input name="jumlah" type="text">
      <input type="submit" value="Simpan">
    </form>
  </body>
</html>