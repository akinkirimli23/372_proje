<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_proje_v4";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

$sql = "SELECT * FROM Malzemeler";
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

      
    </section>

    <section class="blog-content">

<h1>Malzemeler</h1>

</section>

</body>

    
    <section class="contact-us">

<div class="contact-col">
    <form method="POST" action="malzeme_insert.php" enctype="multipart/form-data">
        
        
        <label for="malzeme_isim">Malzeme İsmi:</label>
        <input type="text" name="malzeme_isim" id="malzeme_isim" placeholder="Lütfen malzeme ismini giriniz" required>

        <label for="malzeme_stok">Malzeme Stoğu:</label>
        <input type="number" name="malzeme_stok" id="malzeme_stok" placeholder="Lütfen malzeme stoğunu giriniz" required>

        <br>
        <br>

        <button type="submit" class="hero-btn red-btn">Gönder</button> 
    </form>
</div>



	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
    <div style="text-align: center;">
        <h1>Malzeme Verileri</h1>
        <br>
    </div>
    <body style="background-color:lightgray;">
    
	<table align="center" border="1px" style="width=100%; line-height:40px;"> 
	<tr> 
		
		</tr> 
			  <th> Malzeme ID </th> 
			  <th> Malzeme isim </th> 
			  <th> Malzeme Stok </th> 
              <th> Sil </th> 
		</tr> 



        <?php
        foreach ($data as $row) {
            echo "<tr>";

            echo "<td>" . $row["malzeme_id"] . "</td>";
            echo "<td>" . $row["malzeme_isim"] . "</td>";
            echo "<td>" . $row["malzeme_stok"] . "</td>";

            echo "<td><a href='malzeme_delete.php ? malzeme_id=" . $row["malzeme_id"] . "' onclick=\"return confirm('Are you sure?')\">X</a></td>";

            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>