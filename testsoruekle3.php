<?php 


		session_start();  
		include 'baglan.php';



    date_default_timezone_set("Europe/Istanbul"); 
    $tarih = date("Y/m/d H:i:s"); 



						$que1 = $_POST['que1'];
						$que2 =  $_POST['que2'];
						$que3 =   $tarih;
					
				
								        if(strlen($que1)<6)        
        {
						echo '<script language="javascript">';
						echo 'alert("Question Error")';   
						echo '</script>';  	   
						echo '<script> window.location = "testsoruekle.php" </script>'; 
						exit;
            
        } 





											try
											{
												
												
												
												
														
														$kaydet = $db->prepare("INSERT INTO question set
															que1  = :que1,
															que2  = :que2,
															que3  = :que3 
															") ;
    
							
	
	
															$insert = $kaydet->execute(array(

															'que1'  => $que1,
															'que2'  => $que2,
															'que3'  => $que3 
														
															 ));
														
															if($insert)
															{
    					echo '<script language="javascript">';
						echo 'alert("Success")';   
						echo '</script>';  	  

						
						echo '<script> window.location = "testsoruekle.php" </script>'; 
                     
															  exit;  

															}
																else
																{
																echo '<script language="javascript">';
						echo 'alert("Database Error")';   
						echo '</script>';  	   
						echo '<script> window.location = "testsoruekle.php" </script>'; 
																}
														
														
														
														
											}	
											catch(Exception $e) 		
											{

					

												
											}



/**

$ad = $_POST['kul'];


$data["status"]="success";
$data["message"] ="Kullanıcı adınız  $ad";
echo json_encode($data);
*/

 ?>


