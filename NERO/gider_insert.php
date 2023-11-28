<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v3";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

$yıl = $_POST['yıl'];
$ay = $_POST['ay'];
$hafta = $_POST['hafta'];
$kira_gideri	 = $_POST['kira_gideri'];
$temizlik_gideri	 = $_POST['temizlik_gideri'];
$maaş_gideri	 = $_POST['maaş_gideri'];
$su_gideri  = $_POST['su_gideri'];
$diğer_giderler  = $_POST['diğer_giderler'];
$bakım_gideri = $_POST['bakım_gideri'];


$sql = "INSERT INTO giderler (yıl, ay, hafta, kira_gideri , temizlik_gideri , maaş_gideri , su_gideri , diğer_giderler , bakım_gideri) VALUES ('$yıl','$ay', '$hafta', '$kira_gideri' , '$temizlik_gideri' ,'$maaş_gideri' ,'$su_gideri' ,'$diğer_giderler' , '$bakım_gideri')";

if ($conn->query($sql) === TRUE) {
    header("Location: giderler.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>