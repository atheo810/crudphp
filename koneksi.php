<?php


// koneksi ke database
$user = "root";
$lokasi = "localhost";
$pass = "";
$database = "db_live_search";
$koneksi = mysqli_connect($lokasi, $user, $pass, $database);


if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// echo "Koneksi berhasil";


function showThedata($code)
{
    global $koneksi;
    $hasil =  mysqli_query($koneksi, $code);
    return $hasil;
}

function editdata($data)
{
    global $koneksi;
    $id = htmlspecialchars($_POST['id']);
    $nim = htmlspecialchars($_POST['nim']);
    $nama = htmlspecialchars($_POST['nama']);
    $jurusan = htmlspecialchars($_POST['jurusan']);

    $query = "UPDATE user SET nama='$nama', jurusan='$jurusan' WHERE id = $id";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapusdata($data)
{
    global $koneksi;
    $id = htmlspecialchars($_POST['id']);
    $query = "DELETE FROM user WHERE id = $id";
    return mysqli_query($koneksi, $query);
}
