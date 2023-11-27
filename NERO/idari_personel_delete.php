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
if (isset($_GET['idari_personel_id'])) {
    // Retrieve the id from the URL parameter
    $idari_personel_id = $_GET['idari_personel_id'];

    // Now you can use $id in your code
    echo "Selected student ID: " . $idari_personel_id;
} else {
    // Handle the case where 'id' is not set in the URL
    echo "Student ID is not provided in the URL.";
}


$sql = "DELETE FROM idari_personel WHERE idari_personel_id = '$idari_personel_id';";

if ($conn->query($sql) === TRUE) {
    header("Location: idari_personel.php");

} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>