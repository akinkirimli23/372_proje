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

$sql = "SELECT * FROM veli";
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

      <h1>Velilerimiz</h1>

    </section>

    


    <section class="sekmeler-us">

        <section class="blog-content">
            
        <h2>Veli İnsert  </h2>
            <br>
               <br>



    <div class="contact-col">

    <form method="POST" action="veli_insert.php" enctype="multipart/form-data">

    <label for="öğrenci_id">Öğrenci Id:</label>
    <input type="number" name="öğrenci_id" id="öğrenci_id" placeholder="Lütfen öğrenci id'sini giriniz" required>    

    <label for="ad"><b>Ad:</b></label>
    <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required>

    <label for="soyad"><b>Soyad:</b></label>
    <input type="text" name="soy_isim" id="soy_isim" placeholder="Lütfen soyadınızı giriniz" required>
    

    <label for="yaş"><b>Yaş:</b></label>
    <input type="number" name="yaş" id="yaş" placeholder="Lütfen yaşınızı giriniz" required>

    <label for="cinsiyet">Cinsiyet:</label>
    <select name="cinsiyet" id="cinsiyet" required>
        <option value="erkek">Erkek</option>
        <option value="kadin">Kadın</option>
        <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
    </select>
    <br>
    <br>   

    <label for="adres"><b>Adres:</b></label>
    <textarea rows="4" name="adres" id="adres" placeholder="Lütfen adresinizi giriniz" required></textarea>

    <label for="telefon"><b>Telefon:</b></label>
    <input type="tel" name="telefon" id="telefon" placeholder="Lütfen telefon numaranızı giriniz" required>


    <label for="ünvan"><b>Ünvan:</b></label>
    <input type="text" name="ünvan" id="ünvan" placeholder="Lütfen unvan giriniz" required>
<br>
    <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

    <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button> 
</form>
    
    </div>
    <br>
    <br>
    <br>

            
    <div class="contact-col">
     <form method="POST" action="veli_update.php" enctype="multipart/form-data">

        <label for="öğrenci_id"><b>Öğrenci ID:</b></label>
        <input type="number" name="öğrenci_id" id="öğrenci_id" placeholder="Lütfen ID giriniz" required value=0>
        <br>

        <label for=""><b>Öğrenci Id filtre:</b></label>
            <select name="ogrenci_id_filtre" id="ogrenci_id_filtre" required>
                <option value="=">Eşittir</option>
                <option value=">">Büyüktür</option>
                <option value="<">Küçüktür</option>
                <option value=">=">Büyük eşittir</option>
                <option value="<=">Küçük eşittir</option>
                <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
            </select>
            <br>
            <br>

        <label for="isim"><b>Ad:</b></label>
        <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required value="Default Ad">

        <label for="yeni_isim"><b>Yeni Ad:</b></label>
        <input type="text" name="yeni_isim" id="yeni_isim" placeholder="Lütfen yeni adınızı giriniz" required value="Default Yeni Ad">
        <br>
        <label for="soy_isim"><b>Soyad:</b></label>
        <input type="text" name="soy_isim" id="soy_isim" placeholder="Lütfen soyadınızı giriniz" required value="Default Soyad">

        <label for="yeni_soy_isim"><b>Yeni Soyad:</b></label>
        <input type="text" name="yeni_soy_isim" id="yeni_soy_isim" placeholder="Lütfen yeni soyadınızı giriniz" required value="Default Yeni Soyad">
        <br>
        <label for="yaş"><b>Yaş:</b></label>
        <input type="number" name="yaş" id="yaş" placeholder="Lütfen yaşınızı giriniz" required value=0>

        <label for=""><b>Yaş filtre:</b></label>
            <select name="yaş_filtre" id="yaş_filtre" required>
                <option value="=">Eşittir</option>
                <option value=">">Büyüktür</option>
                <option value="<">Küçüktür</option>
                <option value=">=">Büyük eşittir</option>
                <option value="<=">Küçük eşittir</option>
                <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
            </select>
            <br>
            <br>
        
        <label for="yeni_yaş"><b>Yeni Yaş:</b></label>
        <input type="number" name="yeni_yaş" id="yeni_yaş" placeholder="Lütfen yeni yaşınızı giriniz" required  value=0>
        <br>
        <label for="cinsiyet"><b>Cinsiyet:</b></label>
        <select name="cinsiyet" id="cinsiyet" required>
            <option value="Default Cinsiyet">Default Cinsiyet</option>
            <option value="erkek">Erkek</option>
            <option value="kadin">Kadın</option>
        </select>

        <label for="yeni_cinsiyet"><b>Yeni Cinsiyet:</b></label>
        <select name="yeni_cinsiyet" id="yeni_cinsiyet" required>
            <option value="Default Yeni Cinsiyet">Default Yeni Cinsiyet</option>
            <option value="erkek">Erkek</option>
            <option value="kadin">Kadın</option>
            <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
        </select>
        <br>
        <br>
        <label for="adres"><b>adres:</b></label>
        <input type="text" name="adres" id="adres" placeholder="Lütfen adres giriniz" required value="Default Adres">

        <label for="yeni_adres"><b>Yeni adres:</b></label>
        <input type="text" name="yeni_adres" id="yeni_adres" placeholder="Lütfen yeni adres giriniz" required value="Default Yeni adres">
        <br>
        <br>
        <label for="telefon"><b>telefon:</b></label>
        <input type="text" name="telefon" id="telefon" placeholder="Lütfen telefon giriniz" required value="Default telefon">

        <label for="yeni_telefon"><b>Yeni telefon:</b></label>
        <input type="text" name="yeni_telefon" id="yeni_telefon" placeholder="Lütfen yeni telefon giriniz" required value="Default Yeni telefon">
        <br>
        <label for="ünvan"><b>Ünvan:</b></label>
        <input type="text" name="ünvan" id="ünvan" placeholder="Lütfen ünvan giriniz" required value="Default ünvan">

        <label for="yeni_ünvan"><b>Yeni Ünvan:</b></label>
        <input type="text" name="yeni_ünvan" id="yeni_ünvan" placeholder="Lütfen yeni ünvan giriniz" required value="Default Yeni ünvan">
        <br>

        <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

        <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button> 
        <br>
        <br>
    </form>
</div>




<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
    <div style="text-align: center;">
        <h1>Veli Verileri</h1>
        <br>
    </div>
    <body style="background:powderblue;">
    
	<table align="center" border="1px" style="width=100%; line-height:40px;"> 
	<tr> 
		
		</tr> 
			  <th> Öğrenci ID </th> 
			  <th> İsim </th> 
			  <th> Soy isim </th> 
			  <th> Yaş </th> 
              <th> Cinsiyet </th> 
              <th> Adres </th>
              <th> Telefon </th> 
              <th> ünvan </th>     
              <th> Sil </th> 
		</tr> 

</section>
        </section>



</body>
	
        <?php
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td><a href>" . $row["Öğrenci_id"] . "</a></td>";
            echo "<td>" . $row["isim"] . "</td>";
            echo "<td>" . $row["soy_isim"] . "</td>";
            echo "<td>" . $row["yaş"] . "</td>";
            echo "<td>" . $row["cinsiyet"] . "</td>";
            echo "<td>" . $row["adres"] . "</td>";
            echo "<td>" . $row["telefon"] . "</td>";
            echo "<td>" . $row["ünvan"] . "</td>";
            echo "<td><a href='veli_delete.php ? Öğrenci_id=" . $row["Öğrenci_id"] . "' onclick=\"return confirm('Are you sure?')\">X</a></td>";

            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>
