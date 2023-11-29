<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$öğretmen_id = $_POST['öğretmen_id'];
$öğretmen_id_filtre = $_POST['öğretmen_id_filtre'];

$isim = $_POST['isim'];
$soy_isim = $_POST['soy_isim'];
$yaş = $_POST['yaş'];
$yaş_filtre = $_POST['yaş_filtre'];


$cinsiyet = $_POST['cinsiyet'];
$adres = $_POST['adres'];
$telefon = $_POST['telefon'];
$maaş = $_POST['maaş'];
$maaş_filtre = $_POST['maaş_filtre'];

$çalışma_durumu = $_POST['çalışma_durumu'];


$yeni_isim = $_POST['yeni_isim']; 
$yeni_soy_isim = $_POST['yeni_soy_isim'];
$yeni_yaş = $_POST['yeni_yaş'];
$yeni_cinsiyet = $_POST['yeni_cinsiyet'];
$yeni_adres = $_POST['yeni_adres'];
$yeni_telefon = $_POST['yeni_telefon'];
$yeni_maaş = $_POST['yeni_maaş'];
$yeni_çalışma_durumu = $_POST['yeni_çalışma_durumu'];
 
$where = " WHERE ";
$x = 0;
if($öğretmen_id != 0){
    $where .= "öğretmen_id $öğretmen_id_filtre $öğretmen_id";
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
if($maaş != 0){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "maaş $maaş_filtre $maaş";
    $x++;
}
if($çalışma_durumu != "Default çalışma durumu"){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "çalışma_durumu = '$çalışma_durumu'";
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
if($yeni_maaş != 0){
    if($x!=0){
        $set .= " AND ";
    }
    $set .= "maaş = $yeni_maaş";
    $x++;
}
if($yeni_çalışma_durumu != "Default Yeni çalışma durumu"){
    if($x!=0){
        $set .= " AND ";
    }
    $set .= "çalışma_durumu = '$yeni_çalışma_durumu'";
    $x++;
}

$sql = "UPDATE öğretmen ". "$set" . "$where ;";
echo $sql;





if ($conn->query($sql) === TRUE) {
    header("Location: Ogretmen.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


?>
