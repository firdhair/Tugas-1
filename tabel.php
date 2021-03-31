<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menampilkan Data</title>
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
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
      <tbody class="content">
        <tr class="active-row">
          <td>Jane Doe</td>
          <td>181412345</td>
          <td>Perempuan</td>
          <td>janedoe@gmail.com</td>
          <td>20</td>
          <td>The quick brown fox jumps over the lazy dog</td>
          <td>Teknologi Informasi</td>
          <td>TI</td>
          <td class="tombol">
            <button name="edit"><i></i> Edit</button>
            <button name="edit"><i></i> Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
