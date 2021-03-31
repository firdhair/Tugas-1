<?php
require_once("connect_db.php");

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
  $result = mysqli_query($conn, $query);

  return $result;
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
