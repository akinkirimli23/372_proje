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
if (isset($_GET['id'])) {
    // Retrieve the id from the URL parameter
    $id = $_GET['id'];

    // Now you can use $id in your code
    echo "Selected öğrenci ID: " . $id;
} else {
    // Handle the case where 'id' is not set in the URL
    echo "Student ID is not provided in the URL.";
}


$sql = "DELETE FROM öğrenci WHERE id = '$id';";

if ($conn->query($sql) === TRUE) {
    header("Location: ogrenci.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>