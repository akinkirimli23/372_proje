<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$öğrenci_id = $_POST['öğrenci_id'];
$isim = $_POST['isim'];
$soy_isim = $_POST['soy_isim'];
$yaş = $_POST['yaş'];
$cinsiyet = $_POST['cinsiyet'];
$adres = $_POST['adres'];
$telefon = $_POST['telefon'];
$ünvan = $_POST['ünvan'];

$sql = "INSERT INTO veli (öğrenci_id,isim,soy_isim,yaş,cinsiyet,adres,telefon,ünvan) VALUES ('$öğrenci_id','$isim', '$soy_isim', '$yaş', '$cinsiyet', '$adres', '$telefon', '$ünvan')";

if ($conn->query($sql) === TRUE) {
    header("Location: veli.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>
