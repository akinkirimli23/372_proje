<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$id = $_POST['id'];
$isim = $_POST['isim'];
$soy_isim = $_POST['soy_isim'];
$yaş = $_POST['yaş'];
$cinsiyet = $_POST['cinsiyet'];
$yeni_isim = $_POST['yeni_isim']; 
$yeni_soy_isim = $_POST['yeni_soy_isim'];
$yeni_yaş = $_POST['yeni_yaş'];
$yeni_cinsiyet = $_POST['yeni_cinsiyet'];
 
$where = " WHERE ";
$x = 0;
if($id != "Default Id"){
    $where .= "id = '$id'";
    $x++;
}

if($isim != "Default Ad"){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "isim = '$isim'";
    $x++;
}

if($soy_isim != "Default Soyad"){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "soy_isim = '$soy_isim'";
    $x++;
}

if($yaş != 0){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "yaş = '$yaş'";
    $x++;
}

if($cinsiyet != "Default Cinsiyet"){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "cinsiyet = '$cinsiyet'";
    $x++;
}



$set = " SET ";
$x = 0;

if($yeni_isim != "Default Yeni Ad"){

    $set .= "isim = '$yeni_isim'";
    $x++;
}

if($yeni_soy_isim != "Default Yeni Soyad"){
    if($x!=0){
        $set .= " , ";
    }
    $set .= "soy_isim = '$yeni_soy_isim'";
    $x++;
}

if($yeni_yaş != 0){
    if($x!=0){
        $set .= " , ";
    }
    $set .= "yaş = '$yeni_yaş'";
    $x++;
}

if($yeni_cinsiyet != "Default Yeni Cinsiyet"){
    if($x!=0){
        $set .= " ,";
    }
    $set .= "cinsiyet = '$yeni_cinsiyet'";
    $x++;
}

$sql = "UPDATE öğrenci ". "$set" . "$where ;";





if ($conn->query($sql) === TRUE) {
    header("Location: ogrenci.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>
