<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v3";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    // Retrieve the id from the URL parameter
    $öğrenci_id = $_GET['id'];

    // Now you can use $id in your code
    echo "Selected student ID: " . $öğrenci_id;
} else {
    // Handle the case where 'id' is not set in the URL
    echo "Student ID is not provided in the URL.";
}
#$sql = "SELECT * FROM öğrenci_ders JOIN dersler on öğrenci_ders.ders_kodu = dersler.ders_kodu JOIN ders_gün_saat on dersler.ders_kodu=ders_gün_saat.ders_kodu WHERE id = '$id';";
$sql = "SELECT * FROM öğrenci_ders  WHERE öğrenci_id = '$öğrenci_id';";

$result = $conn->query($sql);

$data = array(); // Verileri depolamak için bir dizi oluşturuyoruz

//if ($result->num_rows > 0) {
  //  while ($row = $result->fetch_assoc()) {
    //    $data[] = $row; // Her bir satırdaki veriyi diziye ekliyoruz
      //  echo "ozi"
      //  echo $data[0];
   // }
//}


$size = count($data);

for($x = 0; $x < $size; $x++){
    if($data[$x]["yaş"] == "31"){
        if (!empty($data)) {
            $row = $data[$x];
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>" ;    
            echo "<td>" . $row["isim"] . "</td>";
            echo "<td>" . $row["soy_isim"] . "</td>";
            echo "<td>" . $row["yaş"] . "</td>";
            echo "<td>" . $row["cinsiyet"] . "</td>";
            echo "<td>" . $row["ders_kodu"] . "</td>";
            echo "<td>" . $row["gün_adı"] . "</td>";
            echo "<td>" . $row["başlangıç_saati"] . "</td>";
            echo "<td>" . $row["bitiş_saati"] . "</td>";
            echo "</tr>";
            echo "</br>"; 
        } else {
            //echo "<tr><td colspan='4'>Veritabanında kayıt bulunmamaktadır.</td></tr>";
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

      <h1>Öğrenciler</h1>
    </section>


        <section class="blog-content">
            

        </section>



</body>
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
    <div style="text-align: center;">
        <h1>Öğrenci Verileri</h1>
        <br>
    </div>
    <body style="background-color:powderblue;">
    
	<table align="center" border="1px" style="width=100%; line-height:40px;"> 
	<tr> 
		
		</tr> 
			  <th>  ID </th> 
			  <th> İsim </th> 
			  <th> Soy isim </th> 
			  <th> Yaş </th> 
              <th> Cinsiyet </th> 
		</tr> 

       
    </table>
</body>
</html>
