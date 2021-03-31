<?php
require_once('crud.php');
$fakultas = getAllData("fakultas");
$minat = getAllData('minat');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="css/normalize.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php if (isset($_POST['submit'])) : ?>
    <?php if (addData($_POST) > 0) : ?>
      <script>
        alert('berhasil');
        document.location.href = '';
      </script>
    <?php else : ?>
      <script>
        alert('tidak berhasil');
        document.location.href = '';
      </script>
    <?php endif; ?>
  <?php endif; ?>

  <form action="" method="post">
    <div class="info-kamu">
      <h2>Info Kamu</h2>

      <label for="nama">Nama</label>
      <input type="text" id="nama" name="nama_mhs" required />

      <label for="nim">NIM</label>
      <input type="text" id="nim" name="nim_mhs" required />

      <label for="jenis-kelamin">Jenis Kelamin</label>
      <input type="radio" id="jenis-kelamin" name="jenis_kelamin" value="pria" />Pria
      <input type="radio" name="jenis_kelamin" value="perempuan" />Perempuan

      <label for="email">Email</label>
      <input type="email" id="email" name="email_mhs" required />

      <label for="usia">Usia</label>
      <input type="text" id="usia" name="usia_mhs" required />
    </div>
    <h2>Profil Kamu</h2>

    <div class="profil-kamu">
      <label for="bio">Biografi</label>
      <textarea id="bio" name="student_bio" required></textarea>

      <label for="courses">Pilih Jurusan</label>
      <select id="courses" name="student_courses">
        <?php foreach ($fakultas as $f) : ?>
          <optgroup label="<?= $f['fakultas']; ?>">
            <?php $jurusan = getWhere('jurusan', 'kode_fakultas', $f['kode_fakultas']); ?>
            <?php foreach ($jurusan as $j) : ?>
              <option value="<?= $j['kode_jurusan']; ?>"><?= $j['jurusan']; ?></option>
            <?php endforeach; ?>
          </optgroup>
        <?php endforeach; ?>
      </select>
    </div>

    <label class="minat">Minat:</label>
    <div class="tes">
      <?php foreach ($minat as $m) : ?>
        <input type="checkbox" id="<?= strtolower($m['minat']); ?>" value="<?= $m['id']; ?>" name="user_interest[]" /><label class="light" for="<?= strtolower($m['minat']); ?>"><?= $m['minat']; ?></label><br />
      <?php endforeach; ?>
    </div>
    <button type="submit" name="submit">Kirim</button>
  </form>
</body>

</html>