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
      //  echo "ozi"
      //  echo $data[0];
    }
}

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
                                               
                                                <li> <a href="ogrenci.php">Öğrenci</a></li>
                                                <li> <a href="idari_personel.php">İdari Personel</a></li>
                                                <li> <a href="temizlik_gorevlisi.php">Temizlik Görevlisi</a></li>
                                                <li> <a href="dersler.php">Dersler</a></li>

                    </ul>
            </div>
        </nav>

      <h1>Öğrenciler</h1>
      <h1>Öğrenci İnsert</h1>
    </section>




</body>


<section class="blog-content">
            
            <section class="contact-us">
    <div style="text-align: center;">
            <h1>Öğrenci İnsert</h1>
            <br>
    </div>
<div class="contact-col">


    <form method="POST" action="ogrenci_insert.php" enctype="multipart/form-data">
     
        <label for="isim">Ad:</label>
        <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required>

        <label for="soy_isim">Soyad:</label>
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
        <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

        <button type="submit">Gönder</button>
    </form>
</div>
    <div style="text-align: center;">
            <h1>Öğrenci Update</h1>,      
            <br>
    </div>
<div class="contact-col">
    <form method="POST" action="ogrenci_update.php" enctype="multipart/form-data">
     

    
        <label for="isim">Ad:</label>
        <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required>

        <label for="soy_isim">Soyad:</label>
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
        <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

        <button type="submit">Gönder</button>
    </form>
</div>  
    <div style="text-align: center;">
            <h1>Öğrenci Ders İnsert</h1>
            <br>
    </div>
<div class="contact-col">
    <form method="POST" action="öğrenci_ders_insert.php" enctype="multipart/form-data">
     

        <label for="öğrenci_id">öğrenci_id:</label>
        <input type="number" name="öğrenci_id" id="öğrenci_id" placeholder="Lütfen öğrenci_id giriniz" required>

        <label for="ders_kodu">ders_kodu:</label>
        <input type="text" name="ders_kodu" id="ders_kodu" placeholder="Lütfen ders_kodu giriniz" required>

        <br>
        <br>
        <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

        <button type="submit">Gönder</button>
    </form>
</div>



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
              <th> Cinnnsiyet </th> 
              <th> Sil </th> 
		</tr> 



        <?php
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td><a href='öğrenci_ders_programı.php?id=" . $row["id"] . "'>"  . $row["id"]  . "</a></td>";
            echo "<td>" . $row["isim"] . "</td>";
            echo "<td>" . $row["soy_isim"] . "</td>";
            echo "<td>" . $row["yaş"] . "</td>";
            echo "<td>" . $row["cinsiyet"] . "</td>";
            echo "<td><a href='ogrenci_delete.php?id=" . $row["id"] . "'>" . 'x' ."</a></td>";
            echo "</tr>";
        }
        ?>      
    </table>
</body>
</html>