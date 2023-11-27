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
$aktiflik = $_POST['aktiflik'];
$ders_isim = $_POST['ders_isim'];
$öğretmen_id = $_POST['öğretmen_id'];

 

$sql = "INSERT INTO dersler (ders_kodu, aktiflik, ders_isim, öğretmen_id) VALUES ('$ders_kodu','$aktiflik', '$ders_isim', '$öğretmen_id')";

if ($conn->query($sql) === TRUE) {
    header("Location: dersler.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>