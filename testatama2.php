<?php 


      session_start();  
include 'baglan.php';



    date_default_timezone_set("Europe/Istanbul"); 



try {


	$testid = $_POST['testid'];
	$userid = $cek['id'];
	$date = date("Y/m/d H:i:s"); 
	$aktif = '0';
	$kontrol = $testid  . '-'. $userid ;




	$sql = "SELECT id from user ";

	$sor = $db->prepare($sql);
	$sor->execute();			

   while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
   {
	
	
try{
	$userid = $cek['id'];

	$kontrol = $testid  . '-'. $userid ;



	$kaydet = $db->prepare("INSERT INTO testata set
		
		testid  = :testid,
        userid  = :userid,
        date = :date,
		aktif = :aktif,
		kontrol= :kontrol ") ;


    
	$insert = $kaydet->execute(array(

		'testid'  => $testid,
		'userid' => $userid,
		'date'  => $date,
		'aktif'  => $aktif,
		'kontrol' => $kontrol
		
		));
	}
	catch(Exception $z)
	{


	}


		

	 
   }


//echo'kayıt başarılı';
//header("location:../kulkayit.php");
//exit;
    
echo '<script language="javascript">';
echo 'alert("It is okay")';   
echo '</script>';  	   
echo '<script> window.location = "Index.php" </script>'; 



    
    
    
    
}
catch(Exception $e) 
{
    
	echo '<script language="javascript">';
	echo 'alert("Database Error")';   
	echo '</script>';  	   
	echo '<script> window.location = "Index.php" </script>'; 
 

}

    
    
    
    
    

/**

$ad = $_POST['kul'];


$data["status"]="success";
$data["message"] ="Kullanıcı adınız  $ad";
echo json_encode($data);
*/

 ?>
