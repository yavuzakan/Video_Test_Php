<?php 


		session_start();  
	include 'baglan.php';


    date_default_timezone_set("Europe/Istanbul"); 
    $tarih = date("Y/m/d"); 



						$testname1 = $_POST['testname1'];
						$testname2 = $_SESSION['valid_user'];
						$testname3 =   $tarih;
						$testname4 ="0";
				
						






											try
											{
										
										
														
														$kaydet = $db->prepare("INSERT INTO testname set
															testname1  = :testname1,
															testname2  = :testname2,
															testname3  = :testname3,
															testname4  = :testname4 
															") ;
    
							
	
	
															$insert = $kaydet->execute(array(

															'testname1'  => $testname1,
															'testname2'  => $testname2,
															'testname3'  => $testname3,
															'testname4'  => $testname4 
														
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


