<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}
echo "öğretmen_id is not provided in the URL.";
if (isset($_GET['öğretmen_id'])) {
    // Retrieve the id from the URL parameter
    $öğretmen_id = $_GET['öğretmen_id'];

    // Now you can use $id in your code
    echo "Selected öğretmen_id : " . $öğretmen_id;
} else {
    // Handle the case where 'id' is not set in the URL
    echo "öğretmen_id is not provided in the URL.";
}


$sql = "DELETE FROM öğretmen WHERE öğretmen_id = '$öğretmen_id' ;";

if ($conn->query($sql) === TRUE) {
    header("Location: Ogretmen.php");

} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>