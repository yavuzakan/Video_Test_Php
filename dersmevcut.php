<?php
session_start();
include 'head.php';

include 'baglan.php';
?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>  
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
                    <?php
                         include 'menu1.php';
                    ?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <?php
                            include 'menu2.php';
                            ?>
                    </div>
                </nav>
                <!-- Page content-->
                
                <div class="container-fluid">
                
                <?php
				
				$dil = $_SESSION['dil'];
if ($dil == "turk")
{
	 $ders = "Eğitim";
	  $izle = "İzle";
	$eski = "Eski";
	
}
if ($dil == "eng")
{
		$ders = "Training";
		$izle = "Watch";
		$eski = "Old";
	
}
				
				
				
                if (isset($_SESSION['valid_user']))
                {
                      //echo '<a  href="dersmevcut.php?aktif=1">Eski Dersler </a>';


                      $testid = '1';
	
                      $sql = "SELECT * from dersata WHERE userid LIKE '". $_SESSION['valid_id'] ."' and aktif LIKE '0'";

                      if(isset($_GET['aktif']))
                      {
                        $sql = "SELECT * from dersata WHERE userid LIKE '". $_SESSION['valid_id'] ."' and aktif NOT LIKE '0'";
                        echo '<a  href="dersmevcut.php"> '.$ders.' </a>';
    
                      }
                      else
                      {
                        echo '<a  href="dersmevcut.php?aktif=1">'.$eski.'</a>';
    
                        $sql = "SELECT * from dersata WHERE userid LIKE '". $_SESSION['valid_id'] ."' and aktif LIKE '0'";
    
                      }


                                $sor1 = $db->prepare($sql);
                               $sor1->execute();
                     
                     echo'<table>
                  <tr>
                     <th>'.$ders.'   </th>
                    
                   
                 
                     <th style="width:10%" >'.$izle.'</th>
                 
                  
                   </tr>
                  
                 ';
                                    while ($cek1 = $sor1 ->fetch(PDO::FETCH_ASSOC))
                  {
                    $dersataid = $cek1['id']; 
                     $dersid = $cek1['dersid'];
                    $dk = $cek1['dk'];
                    
                       $sql = "SELECT * from ders WHERE id = ".$dersid." ORDER BY id DESC";
                            $sor = $db->prepare($sql);
                      $sor->execute();
                                               
                    
                    
                       while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
                  {
                    
                      
                     echo'   
                           <form id="form1" name="form1" style="width:100%" action="videoizle.php" method="POST" > 
                   
                 <input type="hidden" id="id" name="id" value="'. $cek['id'] .'">
                 <input type="hidden" id="ders5" name="ders5" value="'. $cek['ders5'] .'">
                 <input type="hidden" id="dersataid" name="dersataid" value="'. $dersataid .'">
                 <input type="hidden" id="dk" name="dk" value="'. $dk .'">
                   <tr>
                     <th>  <input type="text" name="ders1"  class="border p-3 w-100 my-2" value="'. $cek['ders1'] .'" disabled> </a></th>
                 
                 
                   
                   
                   <th>  <button type="submit" class="btn btn-warning">'.$izle.'</button> </th>
                  
                                </form> 
                           
                           ';
                           
                    
                  }
                   }	
                   echo'</table><hr><br/>';	








               
            
                }
                else
                {

                      include 'login.php';

                }


                ?>
                </div>

            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>




</html>
