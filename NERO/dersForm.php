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
$ders_kodu_filtre = $_POST['ders_kodu_filtre'];
$ders_isim = $_POST['ders_isim'];
$öğretmen_id = $_POST['öğretmen_id'];
$öğretmen_id_filtre = $_POST['öğretmen_id_filtre'];


 
$where = "  ";
$x = 0;
if($ders_kodu != "Default"){
    $where .= "WHERE ";
    $where .= "ders_kodu $ders_kodu_filtre $ders_kodu";
    $x++;
}



if($ders_isim != "Default"){
    if($x!=0){
        $where .= " AND ";
    }else{
        $where .= "WHERE ";}
    $where .= "ders_isim = '$ders_isim'";
    $x++;
}

if($öğretmen_id != 0){
    if($x!=0){
        $where .= " AND ";
    }else{
        $where .= "WHERE ";}
    $where .= "öğretmen_id $öğretmen_id_filtre $öğretmen_id";
    $x++;
}





$sql = "SELECT * FROM dersler" .  "$where;";





/*if ($conn->query($sql) === TRUE) {
    //header("Location: ogrenci.php");
    
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}*/

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="sub-header">
        <nav>
        <a href="index.html"><img src="Resim/home.png" alt=""></a>

            <div class="nav-links">
                <div>
                <li> <a href="filtre.php">Filtre</a></li>
            </div>
                    <ul>
                        <li> <a href="index.html">HOME</a></li>
                        <li> <a href="veli.php">Velilerimiz</a></li>
                        <li> <a href="mezunlar.php">Mezunlarımız</a></li>
                        <li> <a href="Ogretmen.php">Öğretmen</a></li>
                        <li> <a href="ogrenci.php">Öğrenci</a></li>
                        <li> <a href="idari_personel.php">İdari Personel</a></li>
                                

                        <li> <a href="temizlik_gorevlisi.php">Temizlik Görevlisi</a></li>
                        <li> <a href="dersler.php">Dersler</a></li>
                        <li> <a href="giderler.php">Giderler</a></li>
                        <li> <a href="malzemeler.php">Malzemeler</a></li>         



                    </ul>
            </div>
            
        </nav>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Dynamic Form</title>


            <h1>Ders Form</h1>
            </section>
        </body>

        <section class="sekmeler-us">

<br>

<section class="blog-content_ogrenciform">
        <table align="center" border="1px" style="width=100%; line-height:40px;"> 
        <tr> 
            
            </tr> 
                <th> ders kodu </th> 
                <th> ders aktifliği </th> 
                <th> ders ismi </th> 
                <th> öğretmen id </th> 
            </tr> 

            </section>
        </section>

            <?php
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $row["ders_kodu"] . "</td>";
                echo "<td>" . $row["aktiflik"] . "</td>";
                echo "<td>" . $row["ders_isim"] . "</td>";
                echo "<td>" . $row["öğretmen_id"] . "</td>";
                echo "</tr>";
            }
            ?>      
        </table>
    </body>
</html>