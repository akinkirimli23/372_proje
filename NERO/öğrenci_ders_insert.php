<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v3";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$öğrenci_id = $_POST['öğrenci_id'];
$ders_kodu = $_POST['ders_kodu'];

 

$sql = "INSERT INTO ögrenci_ders (öğrenci_id,ders_kodu) VALUES ('$öğrenci_id', '$ders_kodu')";

if ($conn->query($sql) === TRUE) {
    header("Location: ogrenci.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>
