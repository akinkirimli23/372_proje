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
$id_filtre = $_POST['id_filtre'];
$isim = $_POST['isim'];
$soy_isim = $_POST['soy_isim'];
$yaş = $_POST['yaş'];
$yaş_filtre = $_POST['yaş_filtre'];
$cinsiyet = $_POST['cinsiyet'];
$adres = $_POST['adres'];
$telefon = $_POST['telefon'];
$şirket_isim = $_POST['şirket_isim'];



 
$where = "  ";
$x = 0;
if($id != 0){
    $where = " WHERE ";
    $where .= "id $id_filtre $id";
    $x++;
}

if($isim != "Default"){
    if($x!=0){
        $where .= " AND ";
    }else{
        $where .= "WHERE ";
    }
    $where .= "isim = '$isim'";
    $x++;
}

if($soy_isim != "Default"){
    if($x!=0){
        $where .= " AND ";
    }else{
        $where .= "WHERE ";
    }
    $where .= "soy_isim = '$soy_isim'";
    $x++;
}

if($yaş != 0){
    if($x!=0){
        $where .= " AND ";
    }else{
        $where .= "WHERE ";
    }
    $where .= "yaş $yaş_filtre $yaş";
    $x++;
}

if($cinsiyet != "Default"){
    if($x!=0){
        $where .= " AND ";
    }else{
        $where .= "WHERE ";
    }
    $where .= "cinsiyet = '$cinsiyet'";
    $x++;
}

if($adres != "Default"){
    if($x!=0){
        $where .= " AND ";
    }else{
        $where .= "WHERE ";
    }
    $where .= "adres = '$adres'";
    $x++;
}

if($telefon != "Default"){
    if($x!=0){
        $where .= " AND ";
    }else{
        $where .= "WHERE ";
    }
    $where .= "telefon = '$telefon'";
    $x++;
}

if($şirket_isim != "Default"){
    if($x!=0){
        $where .= " AND as ";
    }else{
        $where .= "WHERE ";
    }
    $where .= "şirket_isim = '$şirket_isim'";
    $x++;
}





$sql = "SELECT * FROM mezun_öğrenci" .  "$where;";





/*if ($conn->query($sql) === TRUE) {
    //header("Location: ogrenci.php");
    echo $sql ;
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}
*/

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
            <h1> Mezun Öğrenci Verileri</h1>
            <br>
        </div>
        <body style="background-color:lightgray;">
        
        <table align="center" border="1px" style="width=100%; line-height:40px;"> 
        <tr> 
            
        </tr> 
			  <th> ID </th> 
			  <th> İsim </th> 
			  <th> Soy isim </th> 
			  <th> Yaş </th> 
              <th> Cinsiyet </th> 
              <th> Adres </th> 
              <th> Telefon </th> 
              <th> Çalışma Durumu </th> 

		</tr> 



            <?php
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["isim"] . "</td>";
                echo "<td>" . $row["soy_isim"] . "</td>";
                echo "<td>" . $row["yaş"] . "</td>";
                echo "<td>" . $row["cinsiyet"] . "</td>";
                echo "<td>" . $row["adres"] . "</td>";
                echo "<td>" . $row["telefon"] . "</td>";
                echo "<td>" . $row["şirket_isim"] . "</td>";
                echo "</tr>";
            }
            ?>      
        </table>
    </body>
</html>