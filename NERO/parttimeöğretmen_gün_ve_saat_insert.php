<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$öğretmen_id  = $_POST['öğretmen_id'];
$gün_adı = $_POST['gün_adı'];
$başlangıç_saati = $_POST['başlangıç_saati'];
$bitiş_saati = $_POST['bitiş_saati'];
 

$sql = "INSERT INTO parttimeöğretmen_gün_ve_saat (öğretmen_id ,gün_adı,başlangıç_saati,bitiş_saati) VALUES ('$öğretmen_id ','$gün_adı', '$başlangıç_saati','$bitiş_saati')";

if ($conn->query($sql) === TRUE) {
    header("Location: Ogretmen.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>