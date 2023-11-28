<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

$sql = "SELECT * FROM dersler";
$result = $conn->query($sql);

$data = array(); // Verileri depolamak için bir dizi oluşturuyoruz

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row; // Her bir satırdaki veriyi diziye ekliyoruz
      //  echo "ozi"
      //  echo $data[0];
    }
}
/*
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
            echo "</tr>";
            echo "</br>"; 
        } else {
            //echo "<tr><td colspan='4'>Veritabanında kayıt bulunmamaktadır.</td></tr>";
        }
    }
}
*/
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
            <a href="index.html"><img src="Resim/home.png" alt=""></a>
            <div class="nav-links">
                    <ul>
                    <li> <a href="index.html">HOME</a></li>
                                                <li> <a href="veli.php">Velilerimiz</a></li>
                                                <li> <a href="mezunlar.php">Mezunlarımız</a></li>
                                                <li> <a href="Ogretmen.php">Öğretmen</a></li>
                                                <li> <a href="ogretmen_part_time.php">Öğretmen part time</a></li>
                                                <li> <a href="ogrenci.php">Öğrenci</a></li>
                                                <li> <a href="idari_personel.php">İdari Personel</a></li>
                                                <li> <a href="idari_personel_part_time.php">idariPersonel</a></li>
                                                <li> <a href="temizlik_gorevlisi.php">Temizlik Görevlisi</a></li>
                                                <li> <a href="dersler.php">Dersler</a></li>
                                                <li> <a href="giderler.php">Giderler</a></li>        


                    </ul>
            </div>
        </nav>

      <h1>DERSLER</h1>
    </section>

    <section class="blog-content">

<h1>Ders Girişi</h1>

</section>

</body>



    
    <section class="contact-us">
        <div class="contact-col">
    
        <form method="POST" action="dersler_insert.php" enctype="multipart/form-data">
    
        <label for="ders_kodu">Ders Kodu:</label>
        <input type="text" name="ders_kodu" id="ders_kodu" placeholder="Lütfen ders_kodu giriniz" required>
    
    
        <label for="aktiflik">Aktiflik:</label>
        <input type="text" name="aktiflik" id="aktiflik" placeholder="Lütfen dersin aktiflik durumunu giriniz" required>
    
        <label for="ders_isim">Ders İsim:</label>
        <input type="text" name="ders_isim" id="ders_isim" placeholder="Lütfen ders ismini giriniz" required>
        
        <label for="öğretmen_id">Öğretmen Id:</label>
        <input type="text" name="öğretmen_id" id="öğretmen_id" placeholder="Lütfen öğretmen id giriniz" required>
    
        <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->
    
        <button type="submit" class="hero-btn red-btn">Gönder</button> 

        
        </form>
        <br>
        <br><br>
        <div class="contact-col">
    
        <form method="POST" action="ders_gün_saat_insert.php" enctype="multipart/form-data">
    
        <label for="ders_kodu">Ders Kodu:</label>
        <input type="text" name="ders_kodu" id="ders_kodu" placeholder="Lütfen Ders kodu giriniz" required>
    
    
        <label for="gün_adı">Gün Adı:</label>
        <input type="text" name="gün_adı" id="gün_adı" placeholder="Lütfen dersin Gününü giriniz" required>
    
        <label for="başlangıç_saati">Başlangıç Saati:</label>
        <input type="time" name="başlangıç_saati" id="başlangıç_saati" placeholder="Lütfen Ders Başlangıç Saati giriniz" required>
        
        <label for="bitiş_saati">Bitiş Saati:</label>
        <input type="time" name="bitiş_saati" id="bitiş_saati" placeholder="Lütfen Bitiş Saati giriniz" required>
    
        <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->
    
        <button type="submit" class="hero-btn red-btn">Gönder</button> 
        </form>
    
        </div>
        <br>
        <br>

        </div>
        <br>
        <br>
        
        
    
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
    <div style="text-align: center;">
        <h1>Ders Verileri</h1>
        <br>
    </div>
    <body style="background-color:lightgray;">
    
	<table align="center" border="1px" style="width=100%; line-height:40px;"> 
	<tr> 
		
		</tr> 
			  <th> ders kodu </th> 
			  <th> ders aktifliği </th> 
			  <th> ders ismi </th> 
			  <th> öğretmen id </th> 
              <th> Sil </th> 
		</tr> 

        <?php
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row["ders_kodu"] . "</td>";
            echo "<td>" . $row["aktiflik"] . "</td>";
            echo "<td>" . $row["ders_isim"] . "</td>";
            echo "<td>" . $row["öğretmen_id"] . "</td>";
            echo "<td><a href='dersler_delete.php?ders_kodu=" . $row["ders_kodu"] . "'>" . 'x' ."</a></td>";
            echo "</tr>";
        }

        
        ?>
    </table>
</body>
</section>
</html>
