<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}
echo "id is not provided in the URL.";
if (isset($_GET['malzeme_id'])) {
    // Retrieve the id from the URL parameter
    $malzeme_id = $_GET['malzeme_id'];

    // Now you can use $id in your code
    echo "Selected id : " . $malzeme_id;
} else {
    // Handle the case where 'id' is not set in the URL
    echo "id is not provided in the URL.";
}


$sql = "DELETE FROM malzemeler WHERE malzeme_id = '$malzeme_id' ;";

if ($conn->query($sql) === TRUE) {
    header("Location: malzeme.php");

} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

?>