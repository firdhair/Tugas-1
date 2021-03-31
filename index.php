<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <form action="index.html" method="post">
      <div class="info-kamu">
        <h2>Info Kamu</h2>

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama_mhs" required />

        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim_mhs" required />

        <label for="jenis-kelamin">Jenis Kelamin</label>
        <label class="radio">
        <input
          class="radio-satu"
          type="radio"
          checked="checked"
          id="jenis-kelamin"
          name="jenis_kelamin"
          value="pria"
        />
        <span class="checkmark"></span>
        Pria
        </label>
        <label class="radio">
        <input 
          class="radio-dua"
          type="radio" 
          id="jenis-kelamin" 
          name="jenis_kelamin" 
          value="perempuan" 
        />
        <span class="checkmark"></span>
        Perempuan
        </label>

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
          <optgroup label="Teknik">
            <option value="Teknik Komputer">Teknik Komputer</option>
            <option value="teknik_elektro">Teknik Elektro</option>
            <option value="teknik_mesin">Teknik Mesin</option>
            <option value="teknik_sipil">Teknik Sipil</option>
            <option value="teknik_kimia">Teknik Kimia</option>
          </optgroup>
          <optgroup label="Management">
            <option value="manajemen_finansial">Manajemen Finansial</option>
            <option value="managemen_teknologi">Manajemen Teknologi</option>
            <option value="manajemen_marketing">Manajemen Marketing</option>
            <option value="business_administration">Bisnis Administrasi</option>
          </optgroup>
        </select>
      </div>

      <label class="minat">Minat:</label>
      <div class="tes">
        <input
          type="checkbox"
          id="teknik"
          value="minat_teknik"
          name="user_interest"
        /><label class="light" for="teknik">Teknik</label><br />
        <input
          type="checkbox"
          id="bisnis"
          value="minat_bisnis"
          name="user_interest"
        /><label class="light" for="bisnis">Bisnis</label><br />
        <input
          type="checkbox"
          id="hukum"
          value="minat_hukum"
          name="user_interest"
        /><label class="light" for="hukum">Hukum</label>
        <input
          type="checkbox"
          id="filosofi"
          value="minat_filosofi"
          name="user_interest"
        /><label class="light" for="filosofi">Filosofi</label>
        <input
          type="checkbox"
          id="ekonomi"
          value="minat_ekonomi"
          name="user_interest"
        /><label class="light" for="ekonomi">Ekonomi</label>
        <input
          type="checkbox"
          id="teknologi-informasi"
          value="minat_ti"
          name="user_interest"
        /><label class="light" for="teknologi-informasi"
          >Teknologi Informasi</label
        >
      </div>
      <button type="submit">Kirim</button>
    </form>
  </body>
</html>
