<html>
  <head>
    <title>Menampilkan Data</title>
  </head>
  <body>
    <h1>Data Mahasiswa</h1>
    <div class="tambah-hapus">
      <input type="button" value="Tambah" class="tambah" name="tambah" />
      <input type="button" value="Hapus" class="hapus" name="hapus" />
    </div>
    <table class="data-table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>NIM</th>
          <th>Jenis Kelamin</th>
          <th>Email</th>
          <th>Usia</th>
          <th>Biografi</th>
          <th>Jurusan</th>
          <th>Minat</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Jane Doe</td>
          <td>181412345</td>
          <td>Perempuan</td>
          <td>janedoe@gmail.com</td>
          <td>20</td>
          <td>The quick brown fox jumps over the lazy dog</td>
          <td>Teknologi Informasi</td>
          <td>TI</td>
          <td>
            <button name="edit" class="edit"><i></i> Edit</button>
            <button name="edit" class="hapus-data"><i></i> Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
