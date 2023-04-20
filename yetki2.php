
<?php
session_start();
include 'baglan.php';






      try
      {


                     
                     	 
                   $sql2 = "UPDATE user set user4 = '".$_POST['user4']."' where id= ".$_POST['id']." ";
                                  
                                
                        $sqlyap2 = $db ->prepare($sql2);
                        $sqlyap2->execute();



                        echo '<script language="javascript">';
                        echo 'alert("OK")';   
                        echo '</script>';  	   
                        echo '<script> window.location = "index.php" </script>';
                        exit; 
                
                  



        



      }
      catch(Exception $e)
      {
        echo '<script language="javascript">';
        echo 'alert("Database Error")';   
        echo '</script>';  	   
        echo '<script> window.location = "index.php" </script>';
        exit; 



      } 




?>