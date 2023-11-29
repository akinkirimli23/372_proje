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
                        <li> <a href="malzeme.php">Malzemeler</a></li>         
  


                    </ul>
            </div>
        </nav>

      <h1>Öğretmenler</h1>
    </section>


    </body>
       
    <section class="sekmeler-us">

<section class="blog-content">
    
     
<h2>Öğretmen İnsert  </h2>
            <br>
               <br>
    <div class="contact-col">

    <form method="POST" action="Ogretmen_insert.php" enctype="multipart/form-data">

   


    <label for="ad"><b>Ad:</b></label>
    <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required>

    <label for="soyad"><b>Soyad:</b></label>
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
    <input type="text" name="maaş" id="maaş" placeholder="Lütfen maaşınızı giriniz" required>

    <label for="çalışma_durumu"><b>Part-Time Çalışma Durumu:</b></label>
    <input type="text" name="çalışma_durumu" id="çalışma_durumu" placeholder="Lütfen çalışma durumunuzu giriniz" required>
<br>
    <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

    <button type="submit">Gönder</button>
    <br>
    <br>
    </form>
    </div>

    <h2>Öğretmen Update
               <br>
               <br>

    </h2>

            
            <div class="contact-col2">
     <form method="POST" action="Ogretmen_update.php" enctype="multipart/form-data">

        <label for="öğretmen_id">ID:</label>
        <input type="number" name="öğretmen_id" id="öğretmen_id" placeholder="Lütfen ID giriniz" required value=0>
        <br>

        <label for="">Öğretmen Id filtre:</label>
            <select name="öğretmen_id_filtre" id="öğretmen_id_filtre" required>
                <option value="=">Eşittir</option>
                <option value=">">Büyüktür</option>
                <option value="<">Küçüktür</option>
                <option value=">=">Büyük eşittir</option>
                <option value="<=">Küçük eşittir</option>
                <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
            </select>
            <br>

        <label for="isim">Ad:</label>
        <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required value="Default Ad">

        <label for="yeni_isim">Yeni Ad:</label>
        <input type="text" name="yeni_isim" id="yeni_isim" placeholder="Lütfen yeni adınızı giriniz" required value="Default Yeni Ad">
        <br>
        <label for="soy_isim">Soyad:</label>
        <input type="text" name="soy_isim" id="soy_isim" placeholder="Lütfen soyadınızı giriniz" required value="Default Soyad">

        <label for="yeni_soy_isim">Yeni Soyad:</label>
        <input type="text" name="yeni_soy_isim" id="yeni_soy_isim" placeholder="Lütfen yeni soyadınızı giriniz" required value="Default Yeni Soyad">
        <br>
        <label for="yaş">Yaş:</label>
        <input type="number" name="yaş" id="yaş" placeholder="Lütfen yaşınızı giriniz" required value=0>

        <label for="">Yaş filtre:</label>
            <select name="yaş_filtre" id="yaş_filtre" required>
                <option value="=">Eşittir</option>
                <option value=">">Büyüktür</option>
                <option value="<">Küçüktür</option>
                <option value=">=">Büyük eşittir</option>
                <option value="<=">Küçük eşittir</option>
                <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
            </select>
            <br>
        
        <label for="yeni_yaş">Yeni Yaş:</label>
        <input type="number" name="yeni_yaş" id="yeni_yaş" placeholder="Lütfen yeni yaşınızı giriniz" required  value=0>
        <br>
        <label for="cinsiyet">Cinsiyet:</label>
        <select name="cinsiyet" id="cinsiyet" required>
            <option value="Default Cinsiyet">Default Cinsiyet</option>
            <option value="erkek">Erkek</option>
            <option value="kadin">Kadın</option>
        </select>

        <label for="yeni_cinsiyet">Yeni Cinsiyet:</label>
        <select name="yeni_cinsiyet" id="yeni_cinsiyet" required>
            <option value="Default Yeni Cinsiyet">Default Yeni Cinsiyet</option>
            <option value="erkek">Erkek</option>
            <option value="kadin">Kadın</option>
            <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
        </select>
        <br>
        <label for="adres">adres:</label>
        <input type="text" name="adres" id="adres" placeholder="Lütfen adres giriniz" required value="Default Adres">

        <label for="yeni_adres">Yeni adres:</label>
        <input type="text" name="yeni_adres" id="yeni_adres" placeholder="Lütfen yeni adres giriniz" required value="Default Yeni adres">
        <br>
        <br>
        <label for="telefon">telefon:</label>
        <input type="text" name="telefon" id="telefon" placeholder="Lütfen telefon giriniz" required value="Default telefon">

        <label for="yeni_telefon">Yeni telefon:</label>
        <input type="text" name="yeni_telefon" id="yeni_telefon" placeholder="Lütfen yeni telefon giriniz" required value="Default Yeni telefon">
        <br>
        <label for="maaş">maaş:</label>
        <input type="number" name="maaş" id="maaş" placeholder="Lütfen maaş giriniz" required value=0>

        <label for="">maaş filtre:</label>
            <select name="maaş_filtre" id="maaş_filtre" required>
                <option value="=">Eşittir</option>
                <option value=">">Büyüktür</option>
                <option value="<">Küçüktür</option>
                <option value=">=">Büyük eşittir</option>
                <option value="<=">Küçük eşittir</option>
                <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
            </select>
            <br>

        <label for="yeni_maaş">Yeni maaş:</label>
        <input type="number" name="yeni_maaş" id="yeni_maaş" placeholder="Lütfen yeni maaş giriniz" required value=0>
        <br>
        <label for="çalışma_durumu">çalışma_durumu:</label>
        <input type="text" name="çalışma_durumu" id="çalışma_durumu" placeholder="Lütfen yeni çalışma durumu giriniz" required value="Default çalışma durumu">

        <label for="yeni_çalışma_durumu">Yeni maaş:</label>
        <input type="text" name="yeni_çalışma_durumu" id="yeni_çalışma_durumu" placeholder="Lütfen yeni_çalışma_durumu giriniz" required value="Default Yeni çalışma durumu">
        <br>

        <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

        <button type="submit">Gönder</button>
        <br>
        <br>
    </form>
</div>
        


    <div class="contact-col">
    <form method="POST" action="parttimeöğretmen_gün_ve_saat_insert.php" enctype="multipart/form-data">
     

    
        <label for="öğretmen_id"><b>Öğretmen ID:</b></label>
        <input type="number" name="öğretmen_id" id="öğretmen_id" placeholder="Lütfen İdari Personel ID giriniz" required>

        <label for="gün_adı"><b>Gün Adı:</b></label>
        <input type="text" name="gün_adı" id="gün_adı" placeholder="Lütfen Gün Adı giriniz" required>

        <label for="başlangıç_saati"><b>Başlangıç Saat:</b></label>
        <input type="time" name="başlangıç_saati" id="başlangıç_saati" placeholder="Lütfen Başlangıç Saat giriniz" required>

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
        <h1>Öğretmen Verileri</h1>
        <br>
    </div>
    <body style="background:powderblue;">
    
	<table align="center" border="1px" style="width=100%; line-height:40px;"> 
	<tr> 
		
		</tr> 
			  <th> Öğretmen ID </th> 
			  <th> İsim </th> 
			  <th> Soy isim </th> 
			  <th> Yaş </th> 
              <th> Cinsiyet </th> 
              <th> Adres </th>
              <th> Telefon </th> 
              <th> Maaş </th> 
              <th> Part time </th>     
              <th> Ders Programı Göster </th> 
              <th> Müsaitlik Göster </th>
              <th> Sil </th>  


		</tr> 

</section>
        </section>



</body>
	

        <?php
        foreach ($data as $row) {

            $calisma_durumu = $row["çalışma_durumu"];
            

                echo "<tr>";
                echo "<td><a href = 'full_time_ogretmen_ders_programı.php ? öğretmen_id=" . $row["öğretmen_id"] . "'>"  . $row["öğretmen_id"]  . "</a></td>";
                echo "<td>" . $row["isim"] . "</td>";
                echo "<td>" . $row["soy_isim"] . "</td>";
                echo "<td>" . $row["yaş"] . "</td>";
                echo "<td>" . $row["cinsiyet"] . "</td>";
                echo "<td>" . $row["adres"] . "</td>";
                echo "<td>" . $row["telefon"] . "</td>";
                echo "<td>" . $row["maaş"] . "</td>";
                echo "<td>" . $row["çalışma_durumu"] . "</td>";

                echo "<td><a href = 'full_time_ogretmen_ders_programı.php ? öğretmen_id=" . $row["öğretmen_id"] . "'>"  . "Program"  . "</a></td>";
                echo "<td><a href = 'ogretmen_musait_zamanlar_programi.php ? öğretmen_id=" . $row["öğretmen_id"] . "'>"  . "Müsaitlik"  . "</a></td>";
                echo "<td><a href='Ogretmen_delete.php ? öğretmen_id=" . $row["öğretmen_id"] . "' onclick=\"return confirm('Are you sure?')\">X</a></td>";
                echo "</tr>";
            


        }
        ?>
    </table>
</body>
</html>