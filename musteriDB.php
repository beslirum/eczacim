<?php

//severe bağlamak

$link=mysqli_connect('localhost','root');

//database seç

mysqli_select_db($link,'musteri');

//database'e bilgi eklemek

//mysqli_query($link,"INSERT INTO musteri VALUES('Melike','melike123@gmail.com','123')");

//güncelleme
// mysqli_query($link,"UPDATE musteri SET name='Rumeysa' WHERE name='Melike'  ");

/*
// Bağlantıyı kontrol etme
if ($link->connect_error) {
    die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
}

// Formdan gönderilen verileri alma
$name = $_POST["name"];

$email = $_POST["email"];
$password = $_POST["password"];

// SQL sorgusu oluşturma
$sql = "INSERT INTO users (name, password, email) VALUES ('$name', '$password', '$email')";

// Sorguyu veritabanında çalıştırma
if ($link->query($sql) === TRUE) {
    echo "Kayıt başarıyla eklendi.";
} else {
    echo "Kayıt eklenirken hata oluştu: " . $link->error;
}

// Veritabanı bağlantısını kapatma
$link->close(); */

?>
