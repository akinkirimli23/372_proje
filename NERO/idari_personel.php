<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

$sql = "SELECT * FROM idari_personel";
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
                        <li> <a href="malzeme.php">Malzemeler</a></li>         

                    </ul>
            </div>
        </nav>

        <h1>İdari Personel</h1>
    </section>

    </body>

    <section class="sekmeler-us">

        <section class="blog-content">
      
       
        <h2>İdare Personel İnsert  </h2>
            <br>
               <br>
  
  
    

<div class="contact-col">
    <form method="POST" action="idari_personel_insert.php" enctype="multipart/form-data">
        
        
        <label for="isim"><b>Ad:</b></label>
        <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required>

        <label for="soy_isim"><b>Soyad:</b></label>
        <input type="text" name="soy_isim" id="soy_isim" placeholder="Lütfen soyadınızı giriniz" required>

        <label for="yaş"><b>Yaş:</b></label>
        <input type="number" name="yaş" id="yaş" placeholder="Lütfen yaşınızı giriniz" required>

        <label for="cinsiyet"><b>Cinsiyet:</b></label>
        <select name="cinsiyet" id="cinsiyet" required>
            <option value="erkek"><b>Erkek</b></option>
            <option value="kadin"><b>Kadın</b></option>
            <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
        </select>
        <br>
        <br>

        <label for="adres"><b>Adres:</b></label>
    <textarea rows="4" name="adres" id="adres" placeholder="Lütfen adresinizi giriniz" required></textarea>

    <label for="telefon"><b>Telefon:</b></label>
    <input type="tel" name="telefon" id="telefon" placeholder="Lütfen telefon numaranızı giriniz" required>

    <label for="maaş"><b>Maaş:</b></label>
    <textarea rows="4" name="maaş" id="maaş" placeholder="Lütfen maaş giriniz" required></textarea>

    <label for="çalışma_durumu"><b>Çalışma Durumu:</b></label>
    <input type="text" name="çalışma_durumu" id="çalışma_durumu" placeholder="Lütfen çalışma durumu giriniz" required>

        <br>
       
        <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

        <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button> 
    </form>
</div>

<br>
<br>

     
<h2>İdare Personel Müsaitlik </h2>
          <br>
          <br>
<div class="contact-col">
    <form method="POST" action="parttimeidari_personel_gün_ve_saat_insert.php" enctype="multipart/form-data">
     

    
        <label for="idari_personel_id"><b>İdari Personel ID:</b></label>
        <input type="number" name="idari_personel_id" id="idari_personel_id" placeholder="Lütfen İdari Personel ID giriniz" required>

        <label for="gün_adı"><b>Gün Adı:</b></label>
        <input type="text" name="gün_adı" id="gün_adı" placeholder="Lütfen Gün Adı giriniz" required>

        <label for="başlangıç_saat">Başlangıç Saat:</label>
 

        <label for="bitiş_saati"><b>Bitiş Saati:</b></label>
        <input type="time" name="bitiş_saati" id="bitiş_saati" placeholder="Lütfen Bitiş Saati giriniz" required>

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
        <h1>İdari Personel Verileri</h1>
        <br>
    </div>
    <body style="background:powderblue;">    
	<table align="center" border="1px" style="width=100%; line-height:40px;"> 
	<tr> 
		
		</tr> 
			  <th>  İdari Personel ID </th> 
			  <th> İsim </th> 
			  <th> Soy isim </th> 
			  <th> Yaş </th> 
              <th> Cinsiyet </th> 
              <th> Adres </th> 
              <th> Telefon </th> 
              <th> Maaş </th> 
              <th> Çalışma Durumu </th> 
              <th> Müsaitlik </th> 
              <th> Sil </th> 

		</tr> 



        <?php
        foreach ($data as $row) {
            echo "<tr>";
           echo "<td>" . $row["idari_personel_id"] . "</td>";
            echo "<td>" . $row["isim"] . "</td>";
            echo "<td>" . $row["soy_isim"] . "</td>";
            echo "<td>" . $row["yaş"] . "</td>";
            echo "<td>" . $row["cinsiyet"] . "</td>";
            echo "<td>" . $row["adres"] . "</td>";
            echo "<td>" . $row["telefon"] . "</td>";
            echo "<td>" . $row["maaş"] . "</td>";
            echo "<td>" . $row["çalışma_durumu"] . "</td>";

            echo "<td><a href = 'idari_personel_musait_zamanlar_programi.php ? idari_personel_id=" . $row["idari_personel_id"] . "'>"  . "Müsaitlik"  . "</a></td>";
            echo "<td><a href='idari_personel_delete.php?idari_personel_id=" . $row["idari_personel_id"] . "' onclick=\"return confirm('Are you sure?')\">Delete</a></td>";
               
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>