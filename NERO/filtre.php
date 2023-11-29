<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="header">
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
        
        
  

    </body>

    <section class="sekmeler-us1">

<section class="blog-content">
       
        

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Dynamic Form</title>
            <script>
                // Function to toggle form visibility based on tablo_ismi value
                function toggleFormVisibility() {
                    var tabloIsmi = document.getElementById("tablo_ismi").value;
                    var ogretmenForm = document.getElementById("ogretmenForm");
                    var ogrenciForm = document.getElementById("ogrenciForm");
                    var idariPersonelForm = document.getElementById("idariPersonelForm");
                    var temizlikPersoneliForm = document.getElementById("temizlikPersoneliForm");
                    var mezunForm = document.getElementById("mezunForm");
                    var veliForm = document.getElementById("veliForm");



                    

        
                    // Check if tablo_ismi is "öğretmenler"
                    if (tabloIsmi.toLowerCase() === "öğretmen") {
                        ogretmenForm.style.display = "block";
                        ogrenciForm.style.display = "none";
                        idariPersonelForm.style.display = "none";
                        temizlikPersoneliForm.style.display = "none";
                        mezunForm.style.display = "none";
                        veliForm.style.display = "none";
                        dersForm.style.display = "none";
                    } 
                    else if(tabloIsmi.toLowerCase() === "öğrenci"){
                        ogretmenForm.style.display = "none";
                        ogrenciForm.style.display = "block";
                        idariPersonelForm.style.display = "none";
                        temizlikPersoneliForm.style.display = "none";
                        mezunForm.style.display = "none";
                        veliForm.style.display = "none";
                        dersForm.style.display = "none";
                    }
                    else if(tabloIsmi.toLowerCase() === "idari personel"){
                        ogretmenForm.style.display = "none";
                        ogrenciForm.style.display = "none";
                        idariPersonelForm.style.display = "block";
                        temizlikPersoneliForm.style.display = "none";
                        mezunForm.style.display = "none";
                        veliForm.style.display = "none";
                        dersForm.style.display = "none";
                    }
                    else if(tabloIsmi.toLowerCase() === "temizlik personeli"){
                        ogretmenForm.style.display = "none";
                        ogrenciForm.style.display = "none";
                        idariPersonelForm.style.display = "none";
                        temizlikPersoneliForm.style.display = "block";
                        mezunForm.style.display = "none";
                        veliForm.style.display = "none";
                        dersForm.style.display = "none";
                    }
                    else if(tabloIsmi.toLowerCase() === "mezun"){
                        ogretmenForm.style.display = "none";
                        ogrenciForm.style.display = "none";
                        idariPersonelForm.style.display = "none";
                        temizlikPersoneliForm.style.display = "none";
                        mezunForm.style.display = "block";
                        veliForm.style.display = "none";
                        dersForm.style.display = "none";
                    }
                    else if(tabloIsmi.toLowerCase() === "veli"){
                        ogretmenForm.style.display = "none";
                        ogrenciForm.style.display = "none";
                        idariPersonelForm.style.display = "none";
                        temizlikPersoneliForm.style.display = "none";
                        mezunForm.style.display = "none";
                        veliForm.style.display = "block";
                        dersForm.style.display = "none";
                    }
                    else if(tabloIsmi.toLowerCase() === "ders"){
                        ogretmenForm.style.display = "none";
                        ogrenciForm.style.display = "none";
                        idariPersonelForm.style.display = "none";
                        temizlikPersoneliForm.style.display = "none";
                        mezunForm.style.display = "none";
                        veliForm.style.display = "none";
                        dersForm.style.display = "block";
                    }
                }
            </script>
        </head>
        <body>
        
        <div class="contact-col1">
            <form method="POST" enctype="multipart/form-data" onsubmit="toggleFormVisibility(); return false;">

                <label for="tablo_ismi"><b>Tablo İsmi:</b></label>
                <input type="text" name="tablo_ismi" id="tablo_ismi" placeholder="Lütfen tablo ismi giriniz" required>
            </form>
        </div>
        
        <!-- Öğretmenler Form -->
        <div class="contact-col1" id="ogretmenForm" style="display: none;">
            <!-- Your Öğretmenler Form content goes here -->
            <h1>Öğretmen Form</h1>
            <form method="POST" action="ogretmenform.php">

                <label for="öğretmen_id"><b>Id:</b></label>
                <input type="number" name="öğretmen_id" id="öğretmen_id" placeholder="Lütfen Id'nizi giriniz" required value=0>

                <select name="öğretmen_id_filtre" id="öğretmen_id_filtre" required>
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
                <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required value="Default">
            
                <label for="soyad"><b>Soyad:</b></label>
                <input type="text" name="soy_isim" id="soy_isim" placeholder="Lütfen soyadınızı giriniz" required value="Default">
                
            
                <label for="yaş"><b>Yaş:</b></label>
                <input type="number" name="yaş" id="yaş" placeholder="Lütfen yaşınızı giriniz" required value=0>

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
                <label for="cinsiyet"><b>Cinsiyet:</b></label>
                <input type="text" name="cinsiyet" id="cinsiyet" placeholder="Lütfen cinsiyetinizi giriniz" required value="Default">
                <br>
                <br>
                
                <label for="adres"><b>Adres:</b></label>
                <input rows="4" name="adres" id="adres" placeholder="Lütfen adresinizi giriniz" required value="Default">
            
                <label for="telefon"><b>Telefon:</b></label>
                <input type="tel" name="telefon" id="telefon" placeholder="Lütfen telefon numaranızı giriniz" required value="Default">
            
                <label for="maaş"><b>Maaş:</b></label>
                <input type="number" name="maaş" id="maaş" placeholder="Lütfen maaşınızı giriniz" required value=0>
                
                <select name="maaş_filtre" id="maaş_filtre" required>
                    <option value="=">Eşittir</option>
                    <option value=">">Büyüktür</option>
                    <option value="<">Küçüktür</option>
                    <option value=">=">Büyük eşittir</option>
                    <option value="<=">Küçük eşittir</option>
                    <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
                </select>
                <br>
                <br>
                <label for="çalışma_durumu"><b>Part-Time Çalışma Durumu:</b></label>
                <input type="text" name="çalışma_durumu" id="çalışma_durumu" placeholder="Lütfen çalışma durumunuzu giriniz" required value="Default">
            
                <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->
            
                <button type="submit"><b>Gönder</b></button>
                <!-- Add your Öğretmenler form fields here -->
            </form>
        </div>

        <div class="contact-col1" id="ogrenciForm" style="display: none;">
            <!-- Your Öğretmenler Form content goes here -->
            <h1>Öğrenci Form</h1>
            <form method="POST" action="ogrenciform.php">
                <label for="id">Id:</label>
                <input type="text" name="id" id="id" placeholder="Lütfen Id'nizi giriniz" required value=0>

                <label for="">ID filtre:</label>
                <select name="id_filtre" id="id_filtre" required>
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
                <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required value="Default">
                

                <label for="soy_isim"><b>Soyad:</b></label>
                <input type="text" name="soy_isim" id="soy_isim" placeholder="Lütfen soyadınızı giriniz" required value="Default">

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
                <label for="cinsiyet"><b>Cinsiyet:</b></label>
                <input type="text" name="cinsiyet" id="cinsiyet" placeholder="Lütfen cinsiyetinizi giriniz" required value="Default">

                <br>
                <br>
                <br>
                <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

                <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button> 
                <br>
                <br>
                <!-- Add your Öğretmenler form fields here -->
            </form>
        </div> 


        <div class="contact-col1" id="idariPersonelForm" style="display: none;">
            <!-- Your Öğretmenler Form content goes here -->
            <h1>İdari Personel Form</h1>
            <form method="POST" action="idariPersonelForm.php">

                <label for="idari_personel_id"><b>İdari Personel ID:</b></label>
                <input type="number" name="idari_personel_id" id="idari_personel_id" placeholder="Lütfen İdari Personel ID giriniz" required value=0>
                
                <label for=""><b>İdari Personel ID filtre:</b></label>
                <select name="idari_personel_id_filtre" id="idari_personel_id_filtre" required>
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
                <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required value="Default">

                <label for="soy_isim"></b>Soyad:</b></label>
                <input type="text" name="soy_isim" id="soy_isim" placeholder="Lütfen soyadınızı giriniz" required value="Default">

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
            
                <label for="cinsiyet"><b>Cinsiyet:</b></label>
                <input type="text" name="cinsiyet" id="cinsiyet" placeholder="Lütfen cinsiyetinizi giriniz" required value="Default">
                <br>
                <label for="adres"><b>Adres:</b></label>
                <input rows="4" name="adres" id="adres" placeholder="Lütfen adresinizi giriniz" required value="Default">

                <label for="telefon"><b>Telefon:</b></label>
                <input type="tel" name="telefon" id="telefon" placeholder="Lütfen telefon numaranızı giriniz" required value="Default">

                <label for="maaş"><b>Maaş:</b></label>
                <input type="number" name="maaş" id="maaş" placeholder="Lütfen maaşınızı giriniz" required value=0>
                
                <label for=""><b>Maaş filtre:</b></label>
                <select name="maaş_filtre" id="maaş_filtre" required>
                    <option value="=">Eşittir</option>
                    <option value=">">Büyüktür</option>
                    <option value="<">Küçüktür</option>
                    <option value=">=">Büyük eşittir</option>
                    <option value="<=">Küçük eşittir</option>
                    <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
                    
                </select>
               

                <label for="çalışma_durumu"><b>Çalışma Durumu:</b></label>
                <input type="text" name="çalışma_durumu" id="çalışma_durumu" placeholder="Lütfen çalışma durumu giriniz" required value="Default">

                    <br>
                    <br>
                    <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

                    <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button> 
                            <!-- Add your Öğretmenler form fields here -->
            </form>
        </div>


        <div class="contact-col1" id="temizlikPersoneliForm" style="display: none;">
            <!-- Your Öğretmenler Form content goes here -->
            <h1>Temizlik Personeli Form</h1>
            <form method="POST" action="temizlikPersoneliForm.php">

                <label for="idari_personel_id"><b>Temizlik Personeli ID:</b></label>
                <input type="number" name="temizlik_personeli_id" id="temizlik_personeli_id" placeholder="Lütfen İdari Personel ID giriniz" required value=0>
                
                <label for=""><b>Temizlik Personeli ID filtre:</b></label>
                <select name="temizlik_personeli_id_filtre" id="temizlik_personeli_id_filtre" required>
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
                <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required value="Default">

                <label for="soy_isim"><b>Soyad:</b></label>
                <input type="text" name="soy_isim" id="soy_isim" placeholder="Lütfen soyadınızı giriniz" required value="Default">

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
                <label for="cinsiyet"><b>Cinsiyet:</b></label>
                <input type="text" name="cinsiyet" id="cinsiyet" placeholder="Lütfen cinsiyetinizi giriniz" required value="Default">

                <br>
                <br>
                <label for="adres"><b>Adres:</b></label>
                <input rows="4" name="adres" id="adres" placeholder="Lütfen adresinizi giriniz" required value="Default">

                <label for="telefon"><b>Telefon:</b></label>
                <input type="tel" name="telefon" id="telefon" placeholder="Lütfen telefon numaranızı giriniz" required value="Default">

                <label for="maaş"><b>Maaş:</b></label>
                <input type="number" name="maaş" id="maaş" placeholder="Lütfen maaşınızı giriniz" required value=0>
                
                <label for=""><b>Maaş filtre:</b></label>
                <select name="maaş_filtre" id="maaş_filtre" required>
                    <option value="=">Eşittir</option>
                    <option value=">">Büyüktür</option>
                    <option value="<">Küçüktür</option>
                    <option value=">=">Büyük eşittir</option>
                    <option value="<=">Küçük eşittir</option>
                    <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
                </select>

                <label for="çalışma_durumu"><b>Çalışma Durumu:</b></label>
                <input type="text" name="çalışma_durumu" id="çalışma_durumu" placeholder="Lütfen çalışma durumu giriniz" required value="Default">

                    <br>
                    <br>
                <!-- Add your Öğretmenler form fields here -->
                <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button> 
            </form>
        </div>



        <div class="contact-col1" id="mezunForm" style="display: none;">
            <!-- Your Öğretmenler Form content goes here -->
            <h1>Mezun Öğrenci Form</h1>
            <form method="POST" action="mezunForm.php">

                <label for="id"><b>Id:</b></label>
                <input type="text" name="id" id="id" placeholder="Lütfen Id'nizi giriniz" required value=0>

                <label for="">ID filtre:</label>
                <select name="id_filtre" id="id_filtre" required>
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
                <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required value="Default">

                <label for="soy_isim"><b>Soyad:</b></label>
                <input type="text" name="soy_isim" id="soy_isim" placeholder="Lütfen soyadınızı giriniz" required value="Default">

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
                <label for="cinsiyet"><b>Cinsiyet:</b></label>
                <input type="text" name="cinsiyet" id="cinsiyet" placeholder="Lütfen cinsiyetinizi giriniz" required value="Default">

                <br>
                <br>
                <label for="adres"><b>Adres:</b></label>
                <input rows="4" name="adres" id="adres" placeholder="Lütfen adresinizi giriniz" required value="Default">

                <label for="telefon"><b>Telefon:</b></label>
                <input type="tel" name="telefon" id="telefon" placeholder="Lütfen telefon numaranızı giriniz" required value="Default">


                <label for="şirket_isim"><b>Şirket İsim:</b></label>
                <input type="text" name="şirket_isim" id="şirket_isim" placeholder="Lütfen çalışma durumu giriniz" required value="Default">

                    <br>
                    <br>
                <!-- Add your Öğretmenler form fields here -->
                <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button> 
            </form>
        </div>


        <div class="contact-col1" id="veliForm" style="display: none;">
            <!-- Your Öğretmenler Form content goes here -->
            <h1>Veli Form</h1>
            <form method="POST" action="veliForm.php">

                <label for="Öğrenci_id"></b>Id:<b></label>
                <input type="text" name="Öğrenci_id" id="Öğrenci_id" placeholder="Lütfen Id'nizi giriniz" required value=0>

                <label for=""><b>Öğrenci ID filtre:</b></label>
                <select name="Öğrenci_id_filtre" id="Öğrenci_id_filtre" required>
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
                <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required value="Default">

                <label for="soy_isim"><b>Soyad:</b></label>
                <input type="text" name="soy_isim" id="soy_isim" placeholder="Lütfen soyadınızı giriniz" required value="Default">

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
                <label for="cinsiyet"><b>Cinsiyet:</b></label>
                <input type="text" name="cinsiyet" id="cinsiyet" placeholder="Lütfen cinsiyetinizi giriniz" required value="Default">
                <br>
                <br>
                <label for="adres"><b>Adres:</b></label>
                <input rows="4" name="adres" id="adres" placeholder="Lütfen adresinizi giriniz" required value="Default">

                <label for="telefon"><b>Telefon:</b></label>
                <input type="tel" name="telefon" id="telefon" placeholder="Lütfen telefon numaranızı giriniz" required value="Default">


                <label for="ünvan"><b>Şirket İsim:</b></label>
                <input type="text" name="ünvan" id="ünvan" placeholder="Lütfen çalışma durumu giriniz" required value="Default">

                    <br>
                    <br>
                <!-- Add your Öğretmenler form fields here -->
                <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button> 
            </form>
        </div>


        <div class="contact-col1" id="dersForm" style="display: none;">
            <!-- Your Öğretmenler Form content goes here -->
            <h1>Ders Form</h1>
            <form method="POST" action="dersForm.php">
                <label for="ders_kodu"><b>Ders Kodu:</b></label>
                <input type="text" name="ders_kodu" id="ders_kodu" placeholder="Lütfen Id'nizi giriniz" required value="Default">

                <label for=""><b>Ders Kodu filtre:</b></label>
                <select name="ders_kodu_filtre" id="ders_kodu_filtre" required>
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
                <input type="text" name="isim" id="isim" placeholder="Lütfen adınızı giriniz" required value="Default">
                

                <label for="ders_isim"><b>ders isim:</b></label>
                <input type="text" name="ders_isim" id="ders_isim" placeholder="Lütfen soyadınızı giriniz" required value="Default">

                <label for="öğretmen_id"><b>Öğretmen ID:</b></label>
                <input type="number" name="öğretmen_id" id="öğretmen_id" placeholder="Lütfen yaşınızı giriniz" required value=0>

                <label for=""><b>Öğretmen ID filtre:</b></label>
                <select name="öğretmen_id_filtre" id="öğretmen_id_filtre" required>
                    <option value="=">Eşittir</option>
                    <option value=">">Büyüktür</option>
                    <option value="<">Küçüktür</option>
                    <option value=">=">Büyük eşittir</option>
                    <option value="<=">Küçük eşittir</option>
                    <!-- Diğer cinsiyet seçenekleri ekleyebilirsiniz -->
                </select>

                
                <br>
                <br>
                <br>
                <!--textarea rows="8" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz" required></textarea-->

                <button type="submit" class="hero-btn red-btn"><b>Gönder</b></button> 
                <br>
                <br>
                <!-- Add your Öğretmenler form fields here -->
            </form>
        </div>
        
        <!-- Other Form -->
        <div id="otherForm" style="display: none;">
            <!-- Your Other Form content goes here -->
            <h2>Other Form</h2>
            <form method="POST" action="other_form.php">
                <!-- Add your Other form fields here -->
            </form>
        </div>
        
        </body>
   
    </section>
    </section>
    </section>
    </body>
    </section>
</body>
</html>