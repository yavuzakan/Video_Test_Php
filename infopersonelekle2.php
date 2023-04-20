<?php 


		session_start();  
	include 'baglan.php';


    date_default_timezone_set("Europe/Istanbul"); 
    $tarih = date("Y/m/d"); 


						$personid = $_POST['personid'];
						$infoid = $_POST['infoid'];						
						$info1 = $_POST['info1'];
						$info2 = $_POST['info2'];
						$info3 = $_POST['info3'];
						$info4 = $_POST['info4'];
						$info5 = $_POST['info5'];

				
						






											try
											{
										
										
														
														$kaydet = $db->prepare("INSERT INTO infoperson set
															personid  = :personid,
															infoid  = :infoid,														
															info1  = :info1,
															info2  = :info2,
															info3  = :info3,
															info4  = :info4,
															info5  = :info5 
															") ;
    
							
	
	
															$insert = $kaydet->execute(array(
															
															'personid'  => $personid,															
															'infoid'  => $infoid,
															'info1'  => $info1,
															'info2'  => $info2,
															'info3'  => $info3,
															'info4'  => $info4,
															'info5'  => $info5 
														
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
					echo '<script> window.location = "testekle.php" </script>'; 
					exit;
																}
														
														
														
												
											}	
											catch(Exception $e) 		
											{

				    					echo '<script language="javascript">';
						echo 'alert("Database Error ")';   
						echo '</script>';  	  

						echo $e;
						echo '<script> window.location = "index.php" </script>'; 
						
                     
															  exit; 
												
											}




 ?>


