<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

$sql = "SELECT * FROM öğrenci";
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

<style>
    .contact-col2 {
        width: 100%;
            height: 35  vh;
            display: flex;
            justify-content: center;
         
            overflow: hidden;
    }

    .contact-col2 label,
    .contact-col2 input,
    .contact-col2 select {
        margin-bottom: 20px;

        min-height: 50px;
        max-height: 100px   ;
        
        overflow: hidden;
        width: 450px;
    }

    .contact-col2 label {
        flex: 1;
        width: 50%;
        height: 100%;
        min-width: 100px;
        margin-right: 10px;
    }

    .contact-col2 input,
    .contact-col2 select {
        flex: 2;

    }

    .contact-col2 button {
        flex: 1;

        
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
                        <li> <a href="malzemeler.php">Malzemeler</a></li>         



                    </ul>
            </div>
        </nav>


      <h1>Öğrenciler</h1>

    </section>



</body>



<section class="sekmeler-us">

<section class="blog-content">
    
    
            <h2>Öğrenci İnsert  </h2>
            <br>
               <br>


          
<div class="contact-col">
    <form method="POST" action="ogrenci_insert.php" enctype="multipart/form-data">
     

    
        <label for="isim"><b>Ad:</b></label>
        <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required>

        <label for="soy_isim"><b>Soyad:</b></label>
        <input type="text" name="soy_isim" id="soy_isim" placeholder="Lütfen soyadınızı giriniz" required>

        <label for="yaş"><b>Yaş:</b></label>
        <input type="number" name="yaş" id="yaş" placeholder="Lütfen yaşınızı giriniz" required>

        <label for="cinsiyet"><b>Cinsiyet:</b></label>
        <select name="cinsiyet" id="cinsiyet" required>
            <option value="erkek">Erkek</option>
            <option value="kadin">Kadın</option>
            <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
        </select>
       
        <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->
        <br>
        <br>
        <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button> 
        <br>
        <br>
    </form>
</div>

            <h2>Öğrenci Update</h2>
               <br>
               <br>

            

            
            <div class="contact-col">
    <form method="POST" action="ogrenci_update.php" enctype="multipart/form-data">

        <label for="id"><b>ID:</b></label>
        <input type="text" name="id" id="id" placeholder="Lütfen ID giriniz" required value="Default Id">
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
            <option value="Default Yeni Cinsiyet"><b>Default Yeni Cinsiyet</b></option>
            <option value="erkek"><b>Erkek</b></option>
            <option value="kadin"><b>Kadın</b></option>
            <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
        </select>
        <br>
        <br>
        <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->
<br>
        
        <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button>
        <br>
        <br>
    </form>
</div>


<br>


            <h2>Öğrenci Ders İnsert</h2>
            <br>
               <br>

            
<div class="contact-col">
    <form method="POST" action="öğrenci_ders_insert.php" enctype="multipart/form-data">
     

        <label for="öğrenci_id"><b>Öğrenci_id:</b></label>
        <input type="number" name="öğrenci_id" id="öğrenci_id" placeholder="Lütfen öğrenci_id giriniz" required>

      
        <input type="text" name="ders_kodu" id="ders_kodu" placeholder="Lütfen ders_kodu giriniz" required>

   
        <br>
        <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

        <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button> 
        <br>
        <br>
    </form>
</div>

<br>

<h2>Öğrenci Ders İnsert</h2>
            <br>
               <br>




<div class="contact-col">
    <form method="POST" action="öğrenci_gün_ve_saat_insert.php" enctype="multipart/form-data">
     

    
        <label for="öğrenci_id"><b>Öğrenci ID:</b></label>
      

        <label for="başlangıç_saat"><b>Başlangıç Saat:</b></label>
        <input type="time" name="başlangıç_saat" id="başlangıç_saat" placeholder="Lütfen Başlangıç Saat giriniz" required>


        <label for="gün_adı"><b>Gün Adı:</b></label>
        <input type="text" name="gün_adı" id="gün_adı" placeholder="Lütfen Gün Adı giriniz" required>

        <label for="bitiş_saati"><b>Bitiş Saati:</b></label>
        <input type="time" name="bitiş_saati" id="bitiş_saati" placeholder="Lütfen Bitiş Saati giriniz" required>

        
       
        <br>
        <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

        <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button> 
    </form>
</div>
</div>






	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
    <div style="text-align: center;">
        <h1>Öğrenci Verileri</h1>
        <br>
    </div>
    <body style="background:powderblue;">

    
	<table align="center" border="1px" style="width=100%; line-height:40px;"> 
	<tr> 
		
		</tr> 
			  <th>  ID </th> 
			  <th> İsim </th> 
			  <th> Soy isim </th> 
			  <th> Yaş </th> 
              <th> Cinsiyet </th> 
              <th> Sil </th> 
              <th> Ogrenci Ders Programı </th> 
              <th> Ogrenci Müsait Zaman Programı </th> 
		</tr> 

        </section>
        </section>


        </section>
        </section>

</body>

        <?php
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row["id"]  . "</td>";
            echo "<td>" . $row["isim"] . "</td>";
            echo "<td>" . $row["soy_isim"] . "</td>";
            echo "<td>" . $row["yaş"] . "</td>";
   
            echo "<td><a href='ogrenci_delete.php?id=" . $row["id"] . "' onclick=\"return confirm('Are you sure?')\">Delete</a></td>";
            echo "<td> <a href = 'öğrenci_ders_programi.php ? id=" . $row["id"] . "'>" . 'göster' . "</a></td>";
            echo "<td> <a href = 'ogrenci_musait_zamanlar_programi.php ? id=" . $row["id"] . "'>" . 'göster' . "</a></td>";    
            echo "</tr>";
        }
        ?>      
    </table>
</body>
</html>