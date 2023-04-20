<?php 


		session_start();  
		include 'baglan.php';



    date_default_timezone_set("Europe/Istanbul"); 
    $tarih = date("Y/m/d H:i:s"); 



				 $user1 = $_POST['user1'];
					$user2 = $_POST['user2'];
					$user22 = $_POST['user22'];
					$user3 = $_POST['user3'];
						$user4 = "-";
						
						
						if(empty($user1) or  empty($user2) )
						{
						echo '<script language="javascript">';
						echo 'alert("Error")';   
						echo '</script>';  	   
						echo '<script> window.location = "register.php" </script>';  	
						}	
			if($user2 !== $user22) 			
						{

						echo '<script language="javascript">';
						echo 'alert("Password Error")';   
						echo '</script>';  	   
						echo '<script> window.location = "register.php" </script>'; 
						}



		if(strlen($user2)<6)        
									{
						echo '<script language="javascript">';
						echo 'alert("Password Error")';   
						echo '</script>';  	   
						echo '<script> window.location = "register.php" </script>'; 

						}

											try
											{
												
												
														date_default_timezone_set("Europe/Istanbul"); 
														$user5 =  date("Y/m/d H:i:s"); 
														$user4 = 'user';
														$user6 = '1';		
												
														
														$kaydet = $db->prepare("INSERT INTO user set
															user1  = :user1,
															user2  = :user2,
															user3  = :user3,
															user4  = :user4,
															user5  = :user5,
															user6  = :user6
															") ;
    
							$user2 = hash("sha512", $user2);
	
	
															$insert = $kaydet->execute(array(

															'user1'  => $user1,
															'user2'  => $user2,
															'user3'  => $user3,
															'user4'  => $user4,
															'user5'  => $user5,
															'user6'  => $user6
														
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
						echo '<script> window.location = "register.php" </script>'; 
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


