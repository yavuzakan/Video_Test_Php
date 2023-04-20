<?php 


      session_start();  
include 'baglan.php';



    date_default_timezone_set("Europe/Istanbul"); 



try {
	if (isset($_POST['sonid']))
                   {
					   
					   							$sonid = $_POST['sonid'];
												$kontrol = $_POST['kontrol'];
					
							date_default_timezone_set("Europe/Istanbul"); 
							$tarih = date("Y/m/d H:i:s"); 
	
					   
					   	$sql = "UPDATE dersbasla set  bitir = '".$tarih."' where id = ".$sonid;
    				
					
					$sqlyap = $db ->prepare($sql);
					$sqlyap->execute();
					
					
        					   	$sql = "UPDATE dersata set  aktif = '".$tarih."' where 	kontrol like '".$kontrol."'";
    				
					
					$sqlyap = $db ->prepare($sql);
					$sqlyap->execute();
        

					   	

		
															$kaydet = $db->prepare("INSERT INTO dersbitir set
																				dersid  = :dersid,
																				userid  = :userid,
																				tarih  = :tarih  
																				
																				") ;
						
										
	
	
															$insert = $kaydet->execute(array(

															'dersid'  => $dersid,
															'userid'  => $userid,
															'tarih'  => $tarih
														
															 ));
					
					
					
					
					
					}
}
catch(Exception $e) 
{
	
	
    

						echo '<script language="javascript">';
						echo 'alert("Succes")';   
						echo '</script>';  	   
			echo '<script> window.location = "index.php" </script>';    
}		
 ?>
