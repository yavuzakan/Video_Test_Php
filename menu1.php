


<?php

$dil = $_SESSION['dil'];
if ($dil == "turk")
{
	 $menu11 = "Eğitimlerim";
	  $menu12 = "Testlerim";
	   $menu13 = "Şifre Değiştir";
	   $menu14 = "Çıkış";
	
}
if ($dil == "eng")
{
				$menu11 = "My Tutorials";
				$menu12 = "My Tests";
				$menu13 = "Change Password";
				$menu14 = "Exit";
	
}



            if (isset($_SESSION['valid_user']))
                {

      echo '
      
      
                      <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Video / Test </div>
                <div class="list-group list-group-flush">
                  <a class="list-group-item list-group-item-action list-group-item-light p-3" href="dersmevcut.php">'.$menu11.'</a>
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="testcalistir.php">'.$menu12.'</a>
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="password.php">'.$menu13.'</a>
          <a class="list-group-item list-group-item-action list-group-item-light p-3" href="x.php">'.$menu14.' </a>
                </div>
            </div>

      
      
      
      
      
      
      
      ';
               
            
              }
              else
              {

                echo '
                <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Video / Test </div>
                <div class="list-group list-group-flush">
                  
                </div>
            </div> ';  

              }


              ?>