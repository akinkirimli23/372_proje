<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

$sql = "SELECT * FROM giderler";
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

      <h1>Giderler</h1>
    </section>


        <section class="blog-content">
        
        </section>

</body>


<section class="blog-content">
            
            <section class="contact-us">
    
    

<div class="contact-col">
    <form method="POST" action="gider_insert.php" enctype="multipart/form-data">
        
        
        <label for="yıl">yıl:</label>
        <input type="text" name="yıl" id="yıl" placeholder="Lütfen yılı giriniz" required>

        <label for="ay">ay:</label>
        <input type="text" name="ay" id="ay" placeholder="Lütfen ayı giriniz" required>

        <label for="hafta">hafta:</label>
        <input type="text" name="hafta" id="hafta" placeholder="Lütfen haftayı giriniz" required>

        
        <label for="kira_gideri">kira_gideri:</label>
        <input type="number" name="kira_gideri" id="kira_gideri" placeholder="Lütfen kira giderini giriniz" required>

        <label for="temizlik_gideri">temizlik_gideri:</label>
        <input type="number" name="temizlik_gideri" id="temizlik_gideri" placeholder="Lütfen temizlik giderini giriniz" required>

        <label for="maaş_gideri">maaş_gideri:</label>
        <input type="number" name="maaş_gideri" id="maaş_gideri" placeholder="Lütfen maaş giderini giriniz" required>
    
        <label for="su_gideri">su_gideri:</label>
        <input type="number" name="su_gideri" id="su_gideri" placeholder="Lütfen su giderini giriniz" required>

        <label for="diğer_giderler">diğer_giderler:</label>
        <input type="number" name="diğer_giderler" id="diğer_giderler" placeholder="Lütfen diğer giderleri giriniz" required>

        <label for="bakım_gideri">bakım_gideri:</label>
        <input type="number" name="bakım_gideri" id="bakım_gideri" placeholder="Lütfen bakım giderini giriniz" required>


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
        <h1>Giderler Tablosu</h1>
        <br>
    </div>
    <body style="background-color:powderblue;">
    
	<table align="center" border="1px" style="width=100%; line-height:40px;"> 
	<tr> 
		
		</tr> 
			  <th> yıl </th> 
			  <th> ay </th> 
			  <th> hafta </th> 
			  <th> kira_gideri </th> 
              <th> temizlik_gideri </th> 
              <th> maaş_gideri </th> 
              <th> su_gideri </th> 
              <th> diğer_giderler </th> 
              <th> bakım_gideri </th> 
              <th> Sil </th> 

		</tr> 



        <?php
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row["yıl"] . "</td>";
            echo "<td>" . $row["ay"] . "</td>";
            echo "<td>" . $row["hafta"] . "</td>";
            echo "<td>" . $row["kira_gideri"] . "</td>";
            echo "<td>" . $row["temizlik_gideri"] . "</td>";
            echo "<td>" . $row["maaş_gideri"] . "</td>";
            echo "<td>" . $row["su_gideri"] . "</td>";
            echo "<td>" . $row["diğer_giderler"] . "</td>";
            echo "<td>" . $row["bakım_gideri"] . "</td>";
            echo "<td><a href='giderler_delete.php?yıl=" . $row["yıl"] . "&ay=" . $row["ay"] . "&hafta=" . $row["hafta"] . "' onclick=\"return confirm('Are you sure?')\">Delete</a></td>";


            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>