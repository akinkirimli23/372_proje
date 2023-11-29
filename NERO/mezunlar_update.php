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
$mezun_id_filtre = $_POST['mezun_id_filtre'];
$isim = $_POST['isim'];
$soy_isim = $_POST['soy_isim'];
$yaş = $_POST['yaş'];
$yaş_filtre = $_POST['yaş_filtre'];
$cinsiyet = $_POST['cinsiyet'];
$adres = $_POST['adres'];
$telefon = $_POST['telefon'];
$şirket_isim = $_POST['şirket_isim'];





$yeni_isim = $_POST['yeni_isim']; 
$yeni_soy_isim = $_POST['yeni_soy_isim'];
$yeni_yaş = $_POST['yeni_yaş'];
$yeni_cinsiyet = $_POST['yeni_cinsiyet'];
$yeni_adres = $_POST['yeni_adres'];
$yeni_telefon = $_POST['yeni_telefon'];
$yeni_şirket_isim = $_POST['yeni_şirket_isim'];

 
$where = " WHERE ";
$x = 0;
if($id != 0){
    $where .= "id $mezun_id_filtre $id";
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
    $where .= "yaş $yaş_filtre $yaş";
    $x++;
}

if($cinsiyet != "Default Cinsiyet"){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "cinsiyet = '$cinsiyet'";
    $x++;
}
if($adres != "Default Adres"){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "adres = '$adres'";
    $x++;
}
if($telefon != "Default telefon"){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "telefon = '$telefon'";
    $x++;
}

if($şirket_isim != "Default şirket isim"){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "şirket_isim = '$şirket_isim'";
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
    $set .= "yaş = $yeni_yaş";
    $x++;
}

if($yeni_cinsiyet != "Default Yeni Cinsiyet"){
    if($x!=0){
        $set .= " ,";
    }
    $set .= "cinsiyet = '$yeni_cinsiyet'";
    $x++;
}
if($yeni_adres != "Default Yeni adres"){
    if($x!=0){
        $set .= " AND ";
    }
    $set .= "adres = '$yeni_adres'";
    $x++;
}
if($yeni_telefon != "Default Yeni telefon"){
    if($x!=0){
        $set .= " AND ";
    }
    $set .= "telefon = '$yeni_telefon'";
    $x++;
}

if($yeni_şirket_isim != "Default Yeni şirket isim"){
    if($x!=0){
        $set .= " AND ";
    }
    $set .= "şirket_isim = '$yeni_şirket_isim'";
    $x++;
}

$sql = "UPDATE mezun_öğrenci ". "$set" . "$where ;";
echo $sql;





if ($conn->query($sql) === TRUE) {
    header("Location: mezunlar.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>
