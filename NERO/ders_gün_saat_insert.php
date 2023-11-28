<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$ders_kodu = $_POST['ders_kodu'];
$gün_adı = $_POST['gün_adı'];
$başlangıç_saati = $_POST['başlangıç_saati'];
$bitiş_saati = $_POST['bitiş_saati'];
 

$sql = "INSERT INTO ders_gün_saat (ders_kodu,gün_adı,başlangıç_saati,bitiş_saati) VALUES ('$ders_kodu','$gün_adı', '$başlangıç_saati','$bitiş_saati')";

if ($conn->query($sql) === TRUE) {
    header("Location: dersler.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>