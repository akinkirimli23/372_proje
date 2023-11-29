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
$hesap_makinesi	 = $_POST['hesap_makinesi'];
$ingilizce_sozluk = $_POST['ingilizce_sozluk'];
$almanca_sozluk	 = $_POST['almanca_sozluk'];
$satranc_takimi	 = $_POST['satranc_takimi'];
$bilgisayar	 = $_POST['bilgisayar'];
$güç_kaynağı  = $_POST['güç_kaynağı'];


$sql = "INSERT INTO malzemeler (ders_kodu , hesap_makinesi, ingilizce_sozluk, almanca_sozluk , satranc_takimi , bilgisayar , güç_kaynağı) VALUES ('$ders_kodu','$hesap_makinesi', '$ingilizce_sozluk', '$almanca_sozluk' , '$satranc_takimi' ,'$bilgisayar' ,'$güç_kaynağı')";

if ($conn->query($sql) === TRUE) {
    header("Location: malzemeler.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>