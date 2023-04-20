
<?php

$dil = $_SESSION['dil'];
if ($dil == "turk")
{
		$menu20 = "Bilgi / Belge";
		$menu21 = "Dosya Yükle";
		$menu22 = "Dosya Indir";
		$menu23 = "Bilgileri Göster";
		$menu24 = "Bilgi Ekle";
		$menu25 = "Yetki";
		$menu26 = "Personel";
		$menu27 = "Şifre Değiştir";
		$menu28 = "Personel Ekle";
		$menu29 = "Info Ekle";
		$menu30 = "Info Düzenle";
		$menu31 = "Test";
		$menu32 = "Test Ekle";
		$menu33 = "Soru Ekle";
		$menu34 = "Cevap Ekle";
		$menu35 = "Test Onayla";
		$menu36 = "Test Ata";
		$menu37 = "Test Çalıştır";
		$menu38 = "Test Ortalama";
		$menu39 = "Test kullanici Ortalama";
		$menu40 = "Test Soru Düzenle";
		$menu41 = "Test Cevap Düzenle";
		$menu42 = "Eğitim";
		$menu43 = "Egitim Ekle";
		$menu44 = "Egitim Düzenle";
		$menu45 = "Egitim Video";
		$menu46 = "Egitim Video İzle";
		$menu47 = "Eğitim Atama";
		$menu48 = "Eğitim İzle";
		$menu49 = "Rapor";
		
		
			
}
if ($dil == "eng")
{
		$menu20 = "Info / Document";
		$menu21 = "Upload File";
		$menu22 = "Download File";
		$menu23 = "Show Info";
		$menu24 = "Add Info";
		$menu25 = "Authorization";
		$menu26 = "Staff";
		$menu27 = "Change Password";
		$menu28 = "Add Staff";
		$menu29 = "Add Info";
		$menu30 = "Edit Info";
		$menu31 = "Test";
		$menu32 = "Add Test";
		$menu33 = "Add Question";
		$menu34 = "Add Reply";
		$menu35 = "Confirm Test";
		$menu36 = "Assign Test";
		$menu37 = "Run Test";
		$menu38 = "Test Average";
		$menu39 = "Test User Average";
		$menu40 = "Edit Test Question";
		$menu41 = "Edit Test Answer";
		$menu42 = "Tutorial";
		$menu43 = "Add Tutorial";
		$menu44 = "Edit Tutorial";
		$menu45 = "Training Video";
		$menu46 = "Watch Tutorial Video";
		$menu47 = "Assign Training";
		$menu48 = "Watch Tutorial";
		$menu49 = "Report";
			
}


            if (isset($_SESSION['valid_user']))
                {
					         if($_SESSION['valid_durum'] == 'admin')
                                            {


      echo '
      
      
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                               
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$menu20.'</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                
                                
                                
                                    <a class="dropdown-item" href="deneme.php?link=dosyayukle.php&link2=deneme.php&button=Upload">'.$menu21.'</a>
                                    <a class="dropdown-item" href="deneme.php?link=dosyaindir.php&link2=deneme.php&button=Download">'.$menu22.'</a>
                                    <a class="dropdown-item" href="deneme.php?link=infogoster.php&link2=deneme.php&button=Show">'.$menu23.'</a>


                                    <a class="dropdown-item" href="addinfo.php?link=infogoster.php&link2=addinfo.php&button=Show">'.$menu24.'</a>
                                    <a class="dropdown-item" href="deneme.php?link=yetki.php&link2=deneme.php&button=Yetki">'.$menu25.'</a>
                                    
                                    
                                    
                                    
                                </div>
                            </li>
    


                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$menu26.'</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                
                                
                                <a class="dropdown-item" href="password.php">'.$menu27.'</a>
                                <a class="dropdown-item" href="register.php">'.$menu28.'</a>
                                <a class="dropdown-item" href="infoekle.php">'.$menu29.'</a>
                                <a class="dropdown-item" href="infoduzenle.php">'.$menu30.'</a>

                                    
                                    
                                </div>
                            </li>









                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$menu31.'</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                
                                
                                
                                    <a class="dropdown-item" href="testekle.php">'.$menu32.'</a>
                                    <a class="dropdown-item" href="testsoruekle.php">'.$menu33.'</a>
                                    <a class="dropdown-item" href="testcevapekle.php">'.$menu34.'</a>
                                    <a class="dropdown-item" href="testonayla.php">'.$menu35.'</a>
                                    <a class="dropdown-item" href="testata.php">'.$menu36.'</a>
                                    <a class="dropdown-item" href="testcalistir.php">'.$menu37.'</a>

                                    <a class="dropdown-item" href="testortalama.php">'.$menu38.'</a>
                                    <a class="dropdown-item" href="testkulortalama.php">'.$menu39.'</a>

                                    <a class="dropdown-item" href="testsoruduzenle.php">'.$menu40.'</a>
                                    <a class="dropdown-item" href="testcevapduzenle.php">'.$menu41.'</a>


                                    
                                    
                                </div>
                            </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$menu42.'</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    
                                    

                                        <a class="dropdown-item" href="dersekle.php">'.$menu43.'</a>
                                        <a class="dropdown-item" href="dersduzenle.php">'.$menu44.'</a>
                                        <a class="dropdown-item" href="dersvideoekle.php">'.$menu45.'</a>
                                        <a class="dropdown-item" href="dersizle.php">'.$menu46.'</a>
                                        <a class="dropdown-item" href="videoupload.php">Upload*</a>
                                        <a class="dropdown-item" href="dersata.php">'.$menu47.'</a>
                                        <a class="dropdown-item" href="dersmevcut.php">'.$menu48.'</a>
                                        
                                        <a class="dropdown-item" href="dersrapor.php">'.$menu49.'</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="x.php">eXit</a>
                                    </div>
                                </li>






                            </ul>
                        </div>
      
      
      
      
      
      
      
      
      ';
               
            
				}}
              else
              {


              }


              ?>