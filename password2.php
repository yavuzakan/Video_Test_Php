
<?php
session_start();
include 'baglan.php';

  if ( ""== $_POST['user2'] OR ""== $_POST['user21'] OR ""== $_POST['user22']  )
    {
echo "1";
    }
    else
    {


      $user2 = $_POST['user2'];
      $user21 = $_POST['user21'];
      $user22 = $_POST['user22'];

      if($user21 !== $user22)        
      {
          echo '<script language="javascript">';
          echo 'alert("Password Error")';   
          echo '</script>';  	   
          echo '<script> window.location = "password.php" </script>'; 
          exit;
      }	
          if(strlen($user21)<6)        
      {
          echo '<script language="javascript">';
          echo 'alert("Password Error")';   
          echo '</script>';  	   
          echo '<script> window.location = "password.php" </script>';
          exit; 
          
      }    


      $user222  = hash("sha512", $user2 );

      try
      {


        $sql = "SELECT * from user WHERE user1 like '".$_SESSION['valid_user']."' and user2 like '".$user222."' ";
        // $bilgilerimsor = $db->prepare("SELECT * from user WHERE user1= :email and user2= :pass");

 
  
                  
                  $sqlyap = $db ->prepare($sql);
                  $sqlyap->execute();
                  
                          while ($cek = $sqlyap->fetch(PDO::FETCH_ASSOC))
                    {
                      $user2yeni  = hash("sha512", $user22 );
                     	 
                   $sql2 = "UPDATE user set user2 = '".$user2yeni."' where id= ".$cek['id']." ";
                                  
                                
                        $sqlyap2 = $db ->prepare($sql2);
                        $sqlyap2->execute();
                        echo '<script language="javascript">';
                        echo 'alert("OK")';   
                        echo '</script>';  	   
                        echo '<script> window.location = "password.php" </script>';
                        exit; 
                
                  

                    }



        



      }
      catch(Exception $e)
      {
        echo '<script language="javascript">';
        echo 'alert("Database Error")';   
        echo '</script>';  	   
        echo '<script> window.location = "password.php" </script>';
        exit; 



      } 




    }

?>