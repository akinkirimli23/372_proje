<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$öğrenci_id = $_POST['id'];
$başlangıç_saat = $_POST['başlangıç_saat'];
$gün_adı = $_POST['gün_adı'];
$bitiş_saati = $_POST['bitiş_saati'];
 

$sql = "INSERT INTO öğrenci_gün_ve_saat (öğrenci_id,başlangıç_saat,gün_adı,bitiş_saati) VALUES ('$öğrenci_id', '$başlangıç_saat', '$gün_adı', '$bitiş_saati')";

if ($conn->query($sql) === TRUE) {
    header("Location: ogrenci.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>
