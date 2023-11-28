<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}
echo "giderler is not provided in the URL.";
if (isset($_GET['yıl']) && isset($_GET['ay']) && isset($_GET['ay'])) {
    // Retrieve the id from the URL parameter
    $yıl = $_GET['yıl'];
    $ay = $_GET['ay'];
    $hafta = $_GET['hafta'];

    // Now you can use $id in your code
    echo "Selected student ID: " . $yıl;
} else {
    // Handle the case where 'id' is not set in the URL
    echo "Student ID is not provided in the URL.";
}


$sql = "DELETE FROM giderler WHERE yıl = '$yıl' and ay = '$ay' and hafta = '$hafta';";

if ($conn->query($sql) === TRUE) {
    header("Location: giderler.php");

} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>