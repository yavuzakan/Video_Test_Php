<!DOCTYPE html>
<html lang="en">
<head>

<?php
		    include 'baglan.php';
			session_start();
    date_default_timezone_set("Europe/Istanbul"); 
    $tarih = date("Y/m/d H:i:s"); 
												try
											{
												$ders1 = $_POST['ders1'];
												$ders2 = $_POST['ders2'];
												$ders3 =  $_SESSION['valid_user'];
												$ders4 = $tarih ;
												$ders5 = "1";
												
												
												
											
												
												

												
														
														$kaydet = $db->prepare("INSERT INTO ders set
															ders1  = :ders1,
															ders2  = :ders2,
															ders3  = :ders3,
															ders4  = :ders4,
															ders5  = :ders5
															
															") ;
    
					
	
	
															$insert = $kaydet->execute(array(

															'ders1'  => $ders1,
															'ders2'  => $ders2,
															'ders3'  => $ders3,
															'ders4'  => $ders4,
															'ders5'  => $ders5
														
															 ));
														
															if($insert)
															{
    					echo '<script language="javascript">';
						echo 'alert("Success")';   
						echo '</script>';  	  

						
						echo '<script> window.location = "index.php" </script>'; 
                     
															  exit;  

															}
																else
																{
																echo '<script language="javascript">';
						echo 'alert("Database Error")';   
						echo '</script>';  	   
						echo '<script> window.location = "dersekle.php" </script>'; 
																}
														
														
														
														
											}	
											catch(Exception $e) 		
											{

					

												
											}




?>
