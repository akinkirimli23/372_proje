<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$malzeme_isim = $_POST['malzeme_isim'];
$malzeme_stok = $_POST['malzeme_stok'];


$sql = "INSERT INTO malzemeler(malzeme_isim , malzeme_stok) VALUES ( '$malzeme_isim', '$malzeme_stok')";

if ($conn->query($sql) === TRUE) {
    header("Location: malzeme.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>
