<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$temizlik_personeli_id = $_POST['temizlik_personeli_id'];
$isim = $_POST['isim'];
$soy_isim = $_POST['soy_isim'];
$yaş = $_POST['yaş'];
$cinsiyet = $_POST['cinsiyet'];
$adres = $_POST['adres'];
$telefon = $_POST['telefon'];
$maaş = $_POST['maaş'];
$çalışma_durumu = $_POST['çalışma_durumu'];

$sql = "INSERT INTO temizlik_personeli (isim,soy_isim,yaş,cinsiyet,adres,telefon,maaş,çalışma_durumu) 
VALUES ('$isim', '$soy_isim', '$yaş', '$cinsiyet', '$adres', '$telefon', '$maaş', '$çalışma_durumu')";


if ($conn->query($sql) === TRUE) {
    header("Location: temizlik_gorevlisi.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>