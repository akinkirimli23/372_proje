<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$id = $_POST['id'];
$isim = $_POST['isim'];
$soy_isim = $_POST['soy_isim'];
$yaş = $_POST['yaş'];
$cinsiyet = $_POST['cinsiyet'];
$adres = $_POST['adres'];
$telefon = $_POST['telefon'];
$şirket_isim = $_POST['şirket_isim'];

$sql = "INSERT INTO mezun_öğrenci(isim,soy_isim,yaş,cinsiyet,adres,telefon,şirket_isim) VALUES ('$isim', '$soy_isim', '$yaş', '$cinsiyet', '$adres', '$telefon', '$şirket_isim')";

if ($conn->query($sql) === TRUE) {
    header("Location: mezunlar.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>
