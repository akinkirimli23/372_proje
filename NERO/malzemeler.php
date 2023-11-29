<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

$sql = "SELECT * FROM malzemeler";
$result = $conn->query($sql);

$data = array(); // Verileri depolamak için bir dizi oluşturuyoruz

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row; // Her bir satırdaki veriyi diziye ekliyoruz
      //  echo "ozi"
      //  echo $data[0];
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
        <a href="index.html"><img src="Resim/home.png" alt=""></a>
            <div class="nav-links">
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

      <h1>Malzemeler</h1>
    </section>

    <section class="sekmeler-us">

<section class="blog-content">
    
<h2>Malzeme İnsert  </h2>
    <br>
       <br>




    

<div class="contact-col">
    
        <form method="POST" action="malzemeler_insert.php" enctype="multipart/form-data">
    
        <label for="ders_kodu"><b>Ders Kodu:</b></label>
        <input type="int" name="ders_kodu" id="ders_kodu" placeholder="Lütfen ders kodunu giriniz" required>
    
        <label for="ingilizce_sozluk"><b>İngilizce Sözlük:</b></label>
        <input type="int" name="ingilizce_sozluk" id="ingilizce_sozluk" placeholder="Lütfen ingilizce sözlük sayısını giriniz" required>
        
        <label for="almanca_sozluk"><b>Almanca Sözlük:</b></label>
        <input type="int" name="almanca_sozluk" id="almanca_sozluk" placeholder="Lütfen almanca sözlük sayısını giriniz" required>
        
        <label for="satranc_takimi"><b>Satranç Takımı:</b></label>
        <input type="int" name="satranc_takimi" id="satranc_takimi" placeholder="Lütfen satranc takimi sayısını giriniz" required>
       
        <label for="bilgisayar"><b>Bilgisayar:</b></label>
        <input type="int" name="bilgisayar" id="bilgisayar" placeholder="Lütfen bilgisayar sayısını giriniz" required>
    
        <label for="güç_kaynağı"><b>Satranç Takımı:</b></label>
        <input type="int" name="güç_kaynağı" id="güç_kaynağı" placeholder="Lütfen  güç kaynağı sayısını giriniz" required>
       
<br>
        
        <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

        <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button> 

    </form>
</div>



	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
    <div style="text-align: center;">
        <h1>Malzemeler Tablosu</h1>
        <br>
    </div>
    <body style="background:powderblue;">
	<table align="center" border="1px" style="width=100%; line-height:40px;"> 
	<tr> 
		
		</tr> 
			  <th> Ders Kodu </th> 
			  <th> Hesap Makinesi </th> 
			  <th> İngilizce Sözlük </th> 
			  <th> Almanca Sözlük </th> 
              <th> Satranç takımı </th> 
              <th> Bilgisayar </th> 
              <th> Güç kaynağı </th> 

		</tr> 
        </section>
        </section>


        <?php
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row["ders_kodu"] . "</td>";
            echo "<td>" . $row["hesap_makinesi"] . "</td>";
            echo "<td>" . $row["ingilizce_sozluk"] . "</td>";
            echo "<td>" . $row["almanca_sozluk"] . "</td>";
            echo "<td>" . $row["satranc_takimi"] . "</td>";
            echo "<td>" . $row["bilgisayar"] . "</td>";
            echo "<td>" . $row["güç_kaynağı"] . "</td>";
            echo "<td><a href='giderler_delete.php?yıl=" . $row["yıl"] . "&ay=" . $row["ay"] . "&hafta=" . $row["hafta"] . "' onclick=\"return confirm('Are you sure?')\">Delete</a></td>";


            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>