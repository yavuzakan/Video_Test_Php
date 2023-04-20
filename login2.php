<?php 

session_start();

		    include 'baglan.php';
		
 	                    if (isset($_POST['email']))
                   {
					   	
                    $email = $_POST['email'];
                   $pass = $_POST['pass'];
				   $pass2 = hash("sha512", $pass);
				   $sql = "SELECT * from user WHERE user1 like '".$email."' and user2 like '".$pass2."' ";
               // $bilgilerimsor = $db->prepare("SELECT * from user WHERE user1= :email and user2= :pass");
			  
			  
			   
					
					$sqlyap = $db ->prepare($sql);
					$sqlyap->execute();
					
		              while ($cek = $sqlyap->fetch(PDO::FETCH_ASSOC))
						{
					$_SESSION['valid_user'] = $cek['user1'];   
					$_SESSION['valid_id'] = $cek['id'];   
					$_SESSION['valid_durum'] = $cek['user4'];   
					$_SESSION['valid_isim'] = $cek['user3'] ;
					$_SESSION['dil'] = $_POST['dil'];

						}

                  
                   }
echo '<script> window.location = "index.php" </script>'; 

 ?>