
<?php 


      session_start();  
include 'baglan.php';



    date_default_timezone_set("Europe/Istanbul"); 



try {
	if (isset($_POST['id']))
                   {
					   
					   							$id = $_POST['id'];
											
					
							date_default_timezone_set("Europe/Istanbul"); 
							$aktif = date("Y/m/d H:i:s"); 
	
					   
					   	$sql = "UPDATE testata set  aktif = '".$aktif."' where id = ".$id;
    				
					
					$sqlyap = $db ->prepare($sql);
					$sqlyap->execute();
					
					
					
                    echo '<script language="javascript">';
                    echo 'alert("Succes")';   
                    echo '</script>';  	   
        echo '<script> window.location = "testcalistir.php" </script>';   
					
					
					
					
					}
}
catch(Exception $e) 
{
	
	
    

						echo '<script language="javascript">';
						echo 'alert("Succes")';   
						echo '</script>';  	   
			echo '<script> window.location = "testcalistir.php" </script>';    
}		
 ?>
