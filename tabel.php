<?php
require_once('crud.php');
$data = getAllData("datamahasiswaview");
$fakultas = getAllData("fakultas");
$minat = getAllData('minat');
?>
<html>

<head>
  <title>Menampilkan Data</title>
</head>

<body>
  <h1>Data Mahasiswa</h1>
  <div class="tambah-hapus">
    <a href="index.php"><input type="button" value="Tambah" class="tambah" name="tambah" /></a>
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
      <?php foreach ($data as $mahasiswa) : ?>
        <?php
        $minatmhsarr = explode(',', $mahasiswa['id_minat']);
        $minatresult = [];
        foreach ($minatmhsarr as $minatmhs) {
          $minatresult[] = getMinat($minatmhs);
        }
        $minatresult = implode(', ', $minatresult);
        ?>
        <tr>
          <?php if (isset($_GET['id']) && $mahasiswa['id'] == $_GET['id']) : ?>
            <form action="" method="POST">
              <td><input type="text" id="nama" name="nama_mhs" value="<?= $mahasiswa['nama']; ?>" required></td>
              <td><input type="" id="nim" name="nim_mhs" value="<?= $mahasiswa['nim']; ?>" readonly></td>
              <td>
                <?php if ($mahasiswa['jenis_kelamin'] == 'Perempuan') : ?>
                  <input type="radio" id="jenis-kelamin" name="jenis_kelamin" value="pria" />Pria
                  <input type="radio" name="jenis_kelamin" value="perempuan" checked />Perempuan
                <?php else : ?>
                  <input type="radio" id="jenis-kelamin" name="jenis_kelamin" value="pria" checked />Pria
                  <input type="radio" name="jenis_kelamin" value="perempuan" />Perempuan
                <?php endif; ?>
              </td>
              <td><input type="email" id="email" name="email_mhs" value="<?= $mahasiswa['email']; ?>" required></td>
              <td><input type="number" id="usia" name="usia_mhs" value="<?= $mahasiswa['usia']; ?>" maxlength="2" required></td>
              <td><textarea id="bio" name="student_bio" required><?= $mahasiswa['biografi']; ?></textarea></td>
              <td>
                <select id="courses" name="student_courses">
                  <?php foreach ($fakultas as $f) : ?>
                    <optgroup label="<?= $f['fakultas']; ?>">
                      <?php $jurusan = getWhere('jurusan', 'kode_fakultas', $f['kode_fakultas']); ?>
                      <?php foreach ($jurusan as $j) : ?>
                        <?php if ($j['jurusan'] == $mahasiswa['jurusan']) : ?>
                          <option value="<?= $j['kode_jurusan']; ?>" selected><?= $j['jurusan']; ?></option>
                        <?php else : ?>
                          <option value="<?= $j['kode_jurusan']; ?>"><?= $j['jurusan']; ?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </optgroup>
                  <?php endforeach; ?>
                </select>
              </td>
              <td>
                <?php foreach ($minat as $m) : ?>
                  <input type="checkbox" id="<?= strtolower($m['minat']); ?>" value="<?= $m['id']; ?>" name="user_interest[]" <?php in_array($m['id'], $minatmhsarr) ? print 'checked' : ''; ?> /><label class="light" for="<?= strtolower($m['minat']); ?>"><?= $m['minat']; ?></label><br />
                <?php endforeach; ?>
              </td>
              <td>
                <button type="submit" name="simpan" class="simpan"><i></i> Simpan</button>
                <button name="batal" class="batal"><i></i> Batal</button>
              </td>
              <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
            </form>
          <?php else : ?>
            <td><?= $mahasiswa['nama']; ?></td>
            <td><?= $mahasiswa['nim']; ?></td>
            <td><?= $mahasiswa['jenis_kelamin']; ?></td>
            <td><?= $mahasiswa['email']; ?></td>
            <td><?= $mahasiswa['usia']; ?></td>
            <td><?= $mahasiswa['biografi']; ?></td>
            <td><?= $mahasiswa['jurusan']; ?></td>
            <td><?= $minatresult; ?></td>
            <td>
              <a href="tabel.php?id=<?= $mahasiswa['id']; ?>&action=edit"><button name="edit" class="edit"><i></i> Edit</button></a>
              <a href="crud.php?id=<?= $mahasiswa['id']; ?>&action=delete"><button name="edit" class="hapus-data" onclick="return confirm('Apakan anda yakin ingin menghapus file ini? File ini akan dihapus secara permanen.')"><i></i> Hapus</button></a>
            </td>
          <?php endif; ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <?php if (isset($_POST['simpan'])) : ?>
    <?php if (updateDataMhs($_POST) > 0) : ?>
      <script>
        alert('Data sudah berhasil diupdate!');
        document.location.href = 'tabel.php';
      </script>
    <?php else : ?>
      <script>
        alert('Ooops, data gagal diupdate');
        document.location.href = '';
      </script>
    <?php endif; ?>
  <?php endif; ?>

  <?php if (isset($_POST['batal'])) : ?>
    <script>
      document.location.href = 'tabel.php'
    </script>
  <?php endif; ?>
</body>

</html>