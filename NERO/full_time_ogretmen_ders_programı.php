<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v3";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

if (isset($_GET['öğretmen_id'])) {
    // Retrieve the id from the URL parameter
    $öğretmen_id = $_GET['öğretmen_id'];

    // Now you can use $id in your code
    echo "Selected öğretmen ID: " . $öğretmen_id;
} else {
    // Handle the case where 'id' is not set in the URL
    echo "Student ID is not provided in the URL.";
}

$sql = "SELECT *
        FROM öğretmen
        JOIN dersler ON öğretmen.öğretmen_id = dersler.öğretmen_id  
        JOIN ders_gün_saat ON ders_gün_saat.ders_kodu = dersler.ders_kodu
        WHERE öğretmen.öğretmen_id = '$öğretmen_id';";


$result = $conn->query($sql);

$data = array(); 

if ($result->num_rows > 0) {    
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;        
  }
}

$ders_programı = array(
    array("8.00 - 9.00", "", "", "", "", "", "", ""),
    array("9.00 - 10.00", "", "", "", "", "", "", ""),
    array("10.00 - 11.00", "", "", "", "", "", "", ""),
    array("11.00 - 12.00", "", "", "", "", "", "", ""),
    array("12.00 - 13.00", "", "", "", "", "", "", ""),
    array("13.00 - 14.00", "", "", "", "", "", "", ""),
    array("14.00 - 15.00", "", "", "", "", "", "", ""),
    array("15.00 - 16.00", "", "", "", "", "", "", ""),
    array("16.00 - 17.00", "", "", "", "", "", "", ""),
    array("17.00 - 18.00", "", "", "", "", "", "", "")
);

foreach ($data as $row) {
    if($row["aktiflik"] == "aktif"){
        if($row["gün_adı"] == "Pazartesi"){
            $gün = 1;
        }
        else if($row["gün_adı"] ==  "Salı"){
            $gün = 2;
        }
        else if($row["gün_adı"] ==  "Çarşamba"){
            $gün = 3;
        }
        else if($row["gün_adı"] ==  "Perşembe"){
            $gün = 4;
        }
        else if($row["gün_adı"] ==  "Cuma"){
            $gün = 5;
        }
        else if($row["gün_adı"] ==  "Cumartesi"){
            $gün = 6;
        }
        else if($row["gün_adı"] ==  "Pazar"){
            $gün = 7;
        }
        else{

        }
        

        $startTime = $row["başlangıç_saati"];
        $endTime = $row["bitiş_saati"];

        // Convert the time strings to DateTime objects
        $startTimeObj = DateTime::createFromFormat('H:i:s', $startTime);
        $endTimeObj = DateTime::createFromFormat('H:i:s', $endTime);

        if ($startTimeObj && $endTimeObj) {
            // Extract the hour component
            $hourAsInt = (int) $startTimeObj->format('G');
            $hourAsInt2 = (int) $endTimeObj->format('G');

        } else {
        }
        //$hourAsInt = date("G", strtotime($row["başlangıç_saati"]));
        //$hourAsInt2 = date("G", strtotime($row["bitiş_saati"]));
        $saat_başlangıç = $hourAsInt - 8;
        $saat_bitiş = $hourAsInt2 - 8;
        
        for($i = $saat_başlangıç ; $i < $saat_bitiş ; $i++){
            $ders_programı[$i][$gün] = "$row[ders_isim]";
        }
    }
}

$conn->close();
?>  

<!DOCTYPE html>
<html> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website Design</title>
    <link rel="stylesheet" href="style.css ">

    <style>
.full-width-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

    table {
        width: 100%;
        height: 100%;
        text-align: center;
    }
    </style>
</head>



<body>  


    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="Resim/e-okul_küçük_resim.jpg" alt=""></a>
            <div class="nav-links">
                    <ul>
                    <li> <a href="index.html">HOME</a></li>
                                                <li> <a href="veli.php">Velilerimiz</a></li>
                                                <li> <a href="mezunlar.php">Mezunlarımız</a></li>
                                                <li> <a href="Ogretmen.php">Öğretmen</a></li>
                                               
                                                <li> <a href="Öğrenci.php">Öğrenci</a></li>
                                                <li> <a href="idari_personel.php">İdari Personel</a></li>
                                                <li> <a href="temizlik_gorevlisi.php">Temizlik Görevlisi</a></li>
                                                <li> <a href="dersler.php">Dersler</a></li>
                       


                    </ul>
            </div>
        </nav>

      <h1>Öğretmenler</h1>
    </section>


        <section class="blog-content">
            

        </section>



</body>
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
    <div style="text-align: center;">
        <h1>Öğretmen Ders Programı</h1>
        <br>
    </div>
    <body style="background-color:powderblue;">
    
	<table align="center" border="1px" style="width=50%; line-height:40px;"> 
	<tr> 
		
		</tr> 
            <th>Saat/Ders</th>
            <th>Pazartesi</th>
            <th>Salı</th>
            <th>Çarşamba</th>
            <th>Perşembe</th>
            <th>Cuma</th>
            <th>Cumartesi</th>
            <th>Pazar</th>
		</tr> 

        <?php

        for($i = 0 ; $i < 10 ; $i++){
           // for ($j=0 ; $j<8 ; $j++) {
                
                    echo "<tr>";
                    echo "<td>" . $ders_programı[$i][0] . "</td>";
                    echo "<td>" . $ders_programı[$i][1] . "</td>";
                    echo "<td>" . $ders_programı[$i][2] . "</td>";
                    echo "<td>" . $ders_programı[$i][3] . "</td>";
                    echo "<td>" . $ders_programı[$i][4] . "</td>";
                    echo "<td>" . $ders_programı[$i][5] . "</td>";
                    echo "<td>" . $ders_programı[$i][6] . "</td>";
                    echo "<td>" . $ders_programı[$i][7] . "</td>";
                    echo "</tr>";
                

            //}
        }
        ?>
    </table>
</body>
</html>
