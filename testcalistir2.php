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
                if (isset($_SESSION['valid_user']))
                {

                  //basla
                  
                  echo '	<form id="form1" name="form1" method="POST">';
	   date_default_timezone_set("Europe/Istanbul"); 
     $tarih = date("Y/m/d H:i:s"); 
 
  $res1 =  $_SESSION['valid_user'];
  $res2 =  $_POST['testname'];
 $res3 = $_POST['testid'];
 $res4 = $_POST['question'];
 $res5 = $_POST['questionid'];
 $res6 = $_POST['ans3'];
 $res7 = $_SESSION['valid_user'];;
 $res8 = $tarih;
 $res9 = $_POST['testid'].'-'.$_POST['questionid'] . '-'.$_SESSION['valid_id'];
                   if(strlen($res2)>3)        
                   {
 
                     try
                       {

                         $kaydet = $db->prepare("INSERT INTO result set
                               res1  = :res1,
                               res2  = :res2,
                               res3  = :res3,
                               res4  = :res4,
                               res5  = :res5,
                               res6  = :res6,
                               res7  = :res7,
                               res8  = :res8,
                               res9  = :res9
                               ") ;
     
           
   
   
                               $insert = $kaydet->execute(array(
 
                               'res1'  => $res1,
                               'res2'  => $res2,
                               'res3'  => $res3,
                               'res4'  => $res4,
                               'res5'  => $res5,
                               'res6'  => $res6,
                               'res7'  => $res7,
                               'res8'  => $res8,
                               'res9'  => $res9
                             
                                ));
 
                             
                               
                         
                         
                       }
                                             catch(Exception $e) 		
                       {
 
           
 
                         
                       }
 
                   }
             
   ?>
   
   
   
 <?php
 
 
 
                               if (isset($_POST['sayi2']))
                             {
                               $sayi2 = $_POST['sayi2'];       
                                
                             }
                            else{
                                
                                 $sayi2 = 0; 
                            }
             
 /*
 echo'<h4>Soru 1 </h4>';
 echo'<INPUT TYPE="Radio" Name="Gender" Value="Male">Male <br>';
 echo'<INPUT TYPE="Radio" Name="Gender" Value="Male">Male2 <br>';
   */   
    
    $id = $_POST['id'];
    
    $sor = $db->prepare("SELECT * from testname WHERE id = ".$id);
      $sor->execute();
       while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
  {
  echo '<h1>' . $cek['testname1'] . '</h1>';
  $testname = $cek['testname1'];
   $testid = $cek['id'];
  
  
  }
  
     $sor = $db->prepare("SELECT * from question WHERE que2 LIKE '". $id ."' ORDER BY id  LIMIT ".$sayi2." , 1  ");
      $sor->execute();
       
 $sor11 = $db->prepare("SELECT * from question WHERE que2 LIKE '". $id ."'");
 $sor11->execute();
      $sayi = $sor11->rowCount();   
    
    
       while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
  {
  echo '<h4>' . $cek['que1'] . '</h4>';
  
  $question = $cek['que1'];
  $questionid = $cek['id'];
  
         
     $sor2 = $db->prepare("SELECT * from answer WHERE ans2 LIKE '". $cek['id'] ."' ORDER BY id ");
      $sor2->execute();
       while ($cek2 = $sor2 ->fetch(PDO::FETCH_ASSOC))
     {
       
       $kontrol =  $testid.'-'.$questionid . '-' .$_SESSION['valid_id'];
       $kontrol2 = 0 ;
       
       $sor12 = $db->prepare("SELECT * from result WHERE res9 LIKE '". $kontrol ."'");
 $sor12->execute();
      $kontrol2 = $sor12->rowCount();   
       
       
       if($kontrol2 == 0)
       {
       
     echo'<INPUT TYPE="Radio" Name="ans3" Value="'.  $cek2['ans3'].'">'. $cek2['ans3'] ; 
      echo'<br>';
     
       $ansid =  $cek2['id'];
    $pic = $cek2['ans1'];
     
     if(strlen($pic)>1)  
     {
     echo '<img width="30%" height="30%" src="dosyalar/'.$pic.'" >	';
      echo'<br>';
     }
     
       }
       else
       {
       
         
       }
     
     }
  
  
  }
 $bit = 0;
  if($sayi2 < $sayi)
  {
  $sayi2++;		 
    
  }
  else{
    echo'Test is over';
    $bit = 1;
    echo $id;
    
  }
    echo' <input type="hidden" class="form-control col-auto mb-2" placeholder="" name="sayi2" id="sayi2" value="'. $sayi2.'">';
    echo' <input type="hidden" class="form-control col-auto mb-2" placeholder="" name="id" id="id" value="'. $id.'">';
    
    
    
 if($bit==0)
 {
 echo '<button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Next</button>';	 
 }
 
 
 
  echo' <input type="hidden" class="form-control col-auto mb-2" placeholder="" name="id" id="id" value="'. $id.'">';
   echo' <input type="hidden" class="form-control col-auto mb-2" placeholder="" name="ansid" id="ansid" value="'. $ansid.'">';
   echo' <input type="hidden" class="form-control col-auto mb-2" placeholder="" name="testname" id="testname" value="'. $testname.'">';
    echo' <input type="hidden" class="form-control col-auto mb-2" placeholder="" name="testid" id="testid" value="'. $testid.'">';
     echo' <input type="hidden" class="form-control col-auto mb-2" placeholder="" name="question" id="question" value="'. $question.'">';
    echo' <input type="hidden" class="form-control col-auto mb-2" placeholder="" name="questionid" id="questionid" value="'. $questionid.'">';
     echo' <input type="hidden" class="form-control col-auto mb-2" placeholder="" name="id" id="id" value="'. $id.'">';
 

 
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  //Bitir

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
