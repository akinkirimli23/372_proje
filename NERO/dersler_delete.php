<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}
echo "Student ID is not provided in the URL.";
if (isset($_GET['ders_kodu'])) {
    // Retrieve the id from the URL parameter
    $ders_kodu = $_GET['ders_kodu'];

    // Now you can use $id in your code
    echo "Selected student ID: " . $ders_kodu;
} else {
    // Handle the case where 'id' is not set in the URL
    echo "Student ID is not provided in the URL.";
}


$sql = "DELETE FROM dersler WHERE ders_kodu = '$ders_kodu';";

if ($conn->query($sql) === TRUE) {
    header("Location: dersler.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>