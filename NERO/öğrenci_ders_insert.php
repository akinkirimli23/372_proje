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
$öğrenci_id = $_POST['öğrenci_id'];

 
$sql = "INSERT INTO ögrenci_ders(ders_kodu,öğrenci_id ) VALUES ('$ders_kodu', '$öğrenci_id')";

if ($conn->query($sql) === TRUE) {
    header("Location: ogrenci.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>
