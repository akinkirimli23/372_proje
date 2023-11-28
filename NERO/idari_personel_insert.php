<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v3";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$idari_personel_id = $_POST['idari_personel_id'];
$isim = $_POST['isim'];
$soy_isim = $_POST['soy_isim'];
$yaş = $_POST['yaş'];
$cinsiyet = $_POST['cinsiyet'];
$adres = $_POST['adres'];
$telefon = $_POST['telefon'];
$maaş = $_POST['maaş'];
$çalışma_durumu = $_POST['çalışma_durumu'];

$sql = "INSERT INTO idari_personel (isim,soy_isim,yaş,cinsiyet,adres,telefon,maaş,çalışma_durumu) VALUES ('$isim', '$soy_isim', '$yaş', '$cinsiyet', '$adres', '$telefon', '$maaş', '$çalışma_durumu')";

if ($conn->query($sql) === TRUE) {
    header("Location: idari_personel.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>