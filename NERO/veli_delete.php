<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v3";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}
echo "öğrenci_id is not provided in the URL.";
if (isset($_GET['Öğrenci_id'])) {
    // Retrieve the id from the URL parameter
    $Öğrenci_id = $_GET['Öğrenci_id'];

    // Now you can use $id in your code
    echo "Selected Öğrenci_id : " . $Öğrenci_id;
} else {
    // Handle the case where 'id' is not set in the URL
    echo "Öğrenci_id is not provided in the URL.";
}


$sql = "DELETE FROM veli WHERE Öğrenci_id = '$Öğrenci_id' ;";

if ($conn->query($sql) === TRUE) {
    header("Location: veli.php");

} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>