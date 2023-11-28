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
if (isset($_GET['temizlik_personeli_id'])) {
    // Retrieve the id from the URL parameter
    $temizlik_personeli_id = $_GET['temizlik_personeli_id'];

    // Now you can use $id in your code
    echo "Selected student ID: " . $temizlik_personeli_id;
} else {
    // Handle the case where 'id' is not set in the URL
    echo "Student ID is not provided in the URL.";
}


$sql = "DELETE FROM temizlik_personeli WHERE temizlik_personeli_id = '$temizlik_personeli_id';";

if ($conn->query($sql) === TRUE) {
    header("Location: temizlik_gorevlisi.php");

} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>