<?php 


      session_start();  
include 'baglan.php';



    date_default_timezone_set("Europe/Istanbul"); 



try {

                    $testid = $_POST['testid'];
					$userid = $_POST['userid'];
					$date = date("Y/m/d H:i:s"); 
					$aktif = '0';
					$kontrol = $testid  . '-'. $userid ;



            


	$kaydet = $db->prepare("INSERT INTO testata set


        testid  = :testid,
        userid  = :userid,
        date = :date,
		aktif = :aktif,
		kontrol= :kontrol") ;
    
    
    
	$insert = $kaydet->execute(array(

		'testid'  => $testid,
		'userid' => $userid,
        'date'  => $date,
		'aktif'  => $aktif,
		'kontrol' => $kontrol
		 ));
    
    
    
    
    
if($insert)
{
//echo'kayıt başarılı';
//header("location:../kulkayit.php");
//exit;
    
$data["status"]="success";
$data["message"] ="Assignment Successful";
echo json_encode($data);
                     
    exit;    
}
else
{
$data["status"]="error";
$data["message"] ="Cannot be reassigned";
echo json_encode($data);
  exit;  

}


    
    
    
    
}
catch(Exception $e) 
{
    

$data["status"]="error";
$data["message"] =$e;
echo json_encode($data);  

}

    
    
    
    
    

/**

$ad = $_POST['kul'];


$data["status"]="success";
$data["message"] ="Kullanıcı adınız  $ad";
echo json_encode($data);
*/

 ?>
