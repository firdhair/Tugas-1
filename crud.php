<?php
require_once("connect_db.php");

if(isset($_GET['id']) && isset($_GET['action'])) {
  if($_GET['action'] == 'delete') {
    deleteWhere('data_mahasiswa','id',$_GET['id']);
  }
}

function getAllData($tbl)
{
  global $conn;
  $query = "SELECT * FROM $tbl";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function getWhere($tbl, $field, $condition)
{
  global $conn;
  $query = "SELECT * FROM $tbl WHERE $field = $condition";
  $result = mysqli_query($conn, $query);

  return $result;
}

function deleteWhere($tbl, $field, $condition)
{
  global $conn;
  $query = "DELETE FROM $tbl WHERE $field = $condition";
  mysqli_query($conn, $query);

  if(mysqli_affected_rows($conn) > 0) {
    echo "<script>
            alert('Data berhasil dihapus!');
            document.location.href = 'tabel.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal dihapus!');
            document.location.href = 'tabel.php';
          </script>";

  }
}

function addData($data)
{
  global $conn;

  $id = '';
  $nama = ucwords(htmlspecialchars($data['nama_mhs']));
  $nim = htmlspecialchars($data['nim_mhs']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $email = htmlspecialchars($data['email_mhs']);
  $usia = htmlspecialchars($data['usia_mhs']);
  $biografi = htmlspecialchars($data['student_bio']);
  $jurusan = htmlspecialchars($data['student_courses']);
  $minat = implode(",", $data['user_interest']);
  
  $query = "INSERT INTO data_mahasiswa VALUE ('$id','$nim','$nama','$jenis_kelamin','$email','$usia','$biografi','$jurusan','$minat',DEFAULT,DEFAULT)";
  mysqli_query($conn, $query);
  $result = mysqli_affected_rows($conn);
  
  return $result;
}

function updateDataMhs($data) {
  global $conn;

  $id = $data['id'];
  $nama = ucwords(htmlspecialchars($data['nama_mhs']));
  $nim = htmlspecialchars($data['nim_mhs']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $email = htmlspecialchars($data['email_mhs']);
  $usia = $data['usia_mhs'];
  $biografi = htmlspecialchars($data['student_bio']);
  $jurusan = htmlspecialchars($data['student_courses']);
  $minat = implode(",", $data['user_interest']);

  $query = "UPDATE data_mahasiswa SET 
            nama = '$nama', nim = '$nim', jenis_kelamin = '$jenis_kelamin',email = '$email',usia = '$usia', biografi = '$biografi', kode_jurusan = '$jurusan', id_minat = '$minat', updated_at = DEFAULT  
            WHERE id = $id";
  mysqli_query($conn, $query);
  $result = mysqli_affected_rows($conn);

  return $result;
}

function getMinat($id) {
  global $conn;
  $query = "SELECT minat from minat WHERE id = $id";
  $result = mysqli_query($conn,$query);
  $minat = mysqli_fetch_assoc($result);
  return $minat['minat'];
}