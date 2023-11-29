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
$aktiflik = $_POST['aktiflik'];
$ders_isim = $_POST['ders_isim'];
$öğretmen_id = $_POST['öğretmen_id'];

$yeni_aktiflik = $_POST['yeni_aktiflik']; 
$yeni_ders_isim = $_POST['yeni_ders_isim'];
$yeni_öğretmen_id = $_POST['yeni_öğretmen_id'];
 
$where = " WHERE ";
$x = 0;
if($ders_kodu != "Default ders kodu"){
    $where .= "ders_kodu = '$ders_kodu'";
    $x++;
}

if($aktiflik != "Default aktiflik"){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "aktiflik = '$aktiflik'";
    $x++;
}

if($ders_isim != "Default ders isim"){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "ders_isim = '$ders_isim'";
    $x++;
}

if($öğretmen_id != 0){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "öğretmen_id = '$öğretmen_id'";
    $x++;
}



$set = " SET ";
$x = 0;

if($yeni_aktiflik != "Default Yeni aktiflik"){

    $set .= "aktiflik = '$yeni_aktiflik'";
    $x++;
}

if($yeni_ders_isim != "Default Yeni ders isim"){
    if($x!=0){
        $set .= " , ";
    }
    $set .= "ders_isim = '$yeni_ders_isim'";
    $x++;
}

if($yeni_öğretmen_id != 0){
    if($x!=0){
        $set .= " , ";
    }
    $set .= "öğretmen_id = '$yeni_öğretmen_id'";
    $x++;
}


$sql = "UPDATE dersler ". "$set" . "$where ;";





if ($conn->query($sql) === TRUE) {
    header("Location: dersler.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>
