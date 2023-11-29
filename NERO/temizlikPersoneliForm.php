<?php   
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}


$temizlik_personeli_id = $_POST['temizlik_personeli_id'];
$temizlik_personeli_id_filtre = $_POST['temizlik_personeli_id_filtre'];
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



 
$where = " WHERE ";
$x = 0;
if($temizlik_personeli_id != 0){
    $where .= "temizlik_personeli_id $temizlik_personeli_id_filtre $temizlik_personeli_id";
    $x++;
}

if($isim != "Default"){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "isim = '$isim'";
    $x++;
}

if($soy_isim != "Default"){
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

if($cinsiyet != "Default"){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "cinsiyet = '$cinsiyet'";
    $x++;
}

if($adres != "Default"){
    if($x!=0){
        $where .= " AND ";
    }
    $where .= "adres = '$adres'";
    $x++;
}

if($telefon != "Default"){
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

if($çalışma_durumu != "Default"){
    if($x!=0){
        $where .= " AND as ";
    }
    $where .= "çalışma_durumu = '$çalışma_durumu'";
    $x++;
}





$sql = "SELECT * FROM temizlik_personeli" .  "$where;";





if ($conn->query($sql) === TRUE) {
    //header("Location: ogrenci.php");
    echo $sql ;
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}


$result = $conn->query($sql);

$data = array(); // Verileri depolamak için bir dizi oluşturuyoruz

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row; // Her bir satırdaki veriyi diziye ekliyoruz
      //  echo "ozi"
      //  echo $data[0];
    }
}



/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST["id"];
    $isim = $_POST["isim"];
    $yeni_isim = $_POST["yeni_isim"];
    $soy_isim = $_POST["soy_isim"];
    $yeni_soy_isim = $_POST["yeni_soy_isim"];
    $yas = $_POST["yaş"];
    $yeni_yas = $_POST["yeni_yaş"];
    $cinsiyet = $_POST["cinsiyet"];
    $yeni_cinsiyet = $_POST["yeni_cinsiyet"];

    // TODO: Add your logic to update the student record with the new information
    // Example: Print the received data
    echo "ID: $id<br>";
    echo "Ad: $isim (Yeni Ad: $yeni_isim)<br>";
    echo "Soyad: $soy_isim (Yeni Soyad: $yeni_soy_isim)<br>";
    echo "Yaş: $yas (Yeni Yaş: $yeni_yas)<br>";
    echo "Cinsiyet: $cinsiyet (Yeni Cinsiyet: $yeni_cinsiyet)<br>";

    // TODO: Update the database with the new information
    // Example SQL statement (modify according to your database schema)
    // $sql = "UPDATE ogrenci SET isim='$yeni_isim', soy_isim='$yeni_soy_isim', yaş='$yeni_yas', cinsiyet='$yeni_cinsiyet' WHERE id='$id'";
}
*/

?>

<!DOCTYPE html>
<html> 
    <head> 
            <title> Fetch Data From Database </title> 
        </head> 
        <body> 
        <div style="text-align: center;">
            <h1> Temizlik Personeli Verileri</h1>
            <br>
        </div>
        <body style="background-color:lightgray;">
        
        <table align="center" border="1px" style="width=100%; line-height:40px;"> 
        <tr> 
            
        </tr> 
			  <th> Temizlik Personeli ID </th> 
			  <th> İsim </th> 
			  <th> Soy isim </th> 
			  <th> Yaş </th> 
              <th> Cinsiyet </th> 
              <th> Adres </th> 
              <th> Telefon </th> 
              <th> Maaş </th> 
              <th> Çalışma Durumu </th> 

		</tr> 



            <?php
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row["temizlik_personeli_id"] . "</td>";
                echo "<td>" . $row["isim"] . "</td>";
                echo "<td>" . $row["soy_isim"] . "</td>";
                echo "<td>" . $row["yaş"] . "</td>";
                echo "<td>" . $row["cinsiyet"] . "</td>";
                echo "<td>" . $row["adres"] . "</td>";
                echo "<td>" . $row["telefon"] . "</td>";
                echo "<td>" . $row["maaş"] . "</td>";
                echo "<td>" . $row["çalışma_durumu"] . "</td>";
                echo "</tr>";
            }
            ?>      
        </table>
    </body>
</html>