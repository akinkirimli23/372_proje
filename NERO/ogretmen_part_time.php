<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";

$dbname = "db_proje_v4";



$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}
/*
$id = $_POST['id'];
$ad = $_POST['ad'];
$soyisim = $_POST['soyisim'];
$yas = $_POST['yas'];
$cinsiyet = $_POST['cinsiyet'];
$adres = $_POST['adres'];
$telefon = $_POST['telefon'];
$maas = $_POST['maas'];
$calismadurumu = $_POST['calismadurumu'];
*/

$sql = "SELECT * FROM öğretmen";
$result = $conn->query($sql);

$data = array(); // Verileri depolamak için bir dizi oluşturuyoruz

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row; // Her bir satırdaki veriyi diziye ekliyoruz
      //  echo "ozi"
      //  echo $data[0];
    }
}

/*$size = count($data);
for($x = 0; $x < $size; $x++){
    if($data[$x]["yaş"] == "31"){
        if (!empty($data)) {
            $firstRow = $data[$x];
            echo "<tr>";
            echo "<td>" . $firstRow["öğretmen_id"] . "</td>" ;    
            echo "<td>" . $firstRow["isim"] . "</td>";
            echo "<td>" . $firstRow["soy_isim"] . "</td>";
            echo "<td>" . $firstRow["yaş"] . "</td>";
            echo "<td>" . $firstRow["cinsiyet"] . "</td>";
            echo "<td>" . $firstRow["adres"] . "</td>";
            echo "<td>" . $firstRow["telefon"] . "</td>";
            echo "<td>" . $firstRow["maaş"] . "</td>";
            echo "<td>" . $firstRow["çalışma_durumu"] . "</td>";
            echo "</tr>";
            echo "</br>"; 
        } else {
            //echo "<tr><td colspan='4'>Veritabanında kayıt bulunmamaktadır.</td></tr>";
        }
    }
}*/
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
                        <li> <a href="idari_personel_part_time.php">idari Personel Part Time</a></li>
                        <li> <a href="temizlik_gorevlisi.php">Temizlik Görevlisi</a></li>
                        <li> <a href="dersler.php">Dersler</a></li>
                        <li> <a href="giderler.php">Giderler</a></li>    


                    </ul>
            </div>
        </nav>


      <h1>Ogretmenler Part Time</h1>

    </section>


        <section class="blog-content">
            
        <section class="contact-us">



    <div class="contact-col">

    <form method="POST" action="Ogretmen_insert.php" enctype="multipart/form-data">

   

    <label for="ad">Ad:</label>
    <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required>

    <label for="soyad">Soyad:</label>
    <input type="text" name="soy_isim" id="soy_isim" placeholder="Lütfen soyadınızı giriniz" required>
    

    <label for="yaş">Yaş:</label>
    <input type="number" name="yaş" id="yaş" placeholder="Lütfen yaşınızı giriniz" required>

    <label for="cinsiyet">Cinsiyet:</label>
    <select name="cinsiyet" id="cinsiyet" required>
        <option value="erkek">Erkek</option>
        <option value="kadin">Kadın</option>
        <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
    </select>
    <br>
    <br>
    
    <label for="adres">Adres:</label>
    <textarea rows="4" name="adres" id="adres" placeholder="Lütfen adresinizi giriniz" required></textarea>

    <label for="telefon">Telefon:</label>
    <input type="tel" name="telefon" id="telefon" placeholder="Lütfen telefon numaranızı giriniz" required>

    <label for="maaş">Maaş:</label>
    <input type="text" name="maaş" id="maaş" placeholder="Lütfen maaşınızı giriniz" required>

    <label for="çalışma_durumu">Part-Time Çalışma Durumu:</label>
    <input type="text" name="çalışma_durumu" id="çalışma_durumu" placeholder="Lütfen çalışma durumunuzu giriniz" required>

    <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

    <button type="submit">Gönder</button>
    </form>


        
    </div>
</div>
<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
    <div style="text-align: center;">
        <h1>Oğretmen Verileri</h1>
        <br>
    </div>
    <body style="background:powderblue;">
    
	<table align="center" border="1px" style="width=100%; line-height:40px;"> 
	<tr> 
		
		</tr> 
			  <th> Ogretmen ID </th> 
			  <th> İsim </th> 
			  <th> Soy isim </th> 
			  <th> Yaş </th> 
              <th> Cinsiyet </th> 
              <th> Adres </th>
              <th> Telefon </th> 
              <th> Maaş </th> 
              <th> Part time </th>     
			  <th> Sil </th> 
		</tr> 

</section>
        </section>



</body>
	

        <?php
        foreach ($data as $row) {
            $calisma_durumu = $row["çalışma_durumu"];
            if($calisma_durumu == "part time"){
                echo "<tr>";
                echo "<td><a href>" . $row["öğretmen_id"] . "</a></td>";
                echo "<td>" . $row["isim"] . "</td>";
                echo "<td>" . $row["soy_isim"] . "</td>";
                echo "<td>" . $row["yaş"] . "</td>";
                echo "<td>" . $row["cinsiyet"] . "</td>";
                echo "<td>" . $row["adres"] . "</td>";
                echo "<td>" . $row["telefon"] . "</td>";
                echo "<td>" . $row["maaş"] . "</td>";
                echo "<td>" . $row["çalışma_durumu"] . "</td>";
                
                echo "<td><a href='Ogretmen_delete.php ? öğretmen_id=" . $row["öğretmen_id"] . "' onclick=\"return confirm('Are you sure?')\">Delete</a></td>";
                echo "</tr>";
            }

        }
        ?>

    </table>
</body>
</html> 