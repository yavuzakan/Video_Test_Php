<?php 


      session_start();  
include 'baglan.php';



    date_default_timezone_set("Europe/Istanbul"); 



try {

                    $dersid = $_POST['dersid'];
					$userid = $_POST['userid'];
					$date = date("Y/m/d H:i:s"); 
					$aktif = '0';
					$kontrol = $dersid  . '-'. $userid ;
					$dk = "0";



            


	$kaydet = $db->prepare("INSERT INTO dersata set


        dersid  = :dersid,
        userid  = :userid,
        date = :date,
		aktif = :aktif,
		kontrol= :kontrol,
		dk= :dk") ;
    
    
    
	$insert = $kaydet->execute(array(

		'dersid'  => $dersid,
		'userid' => $userid,
        'date'  => $date,
		'aktif'  => $aktif,
		'kontrol' => $kontrol,
		'dk' => $dk
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
$data["message"] ="Cannot be reassigned";
echo json_encode($data);  

}

    
    
    
    
    

/**

$ad = $_POST['kul'];


$data["status"]="success";
$data["message"] ="Kullanıcı adınız  $ad";
echo json_encode($data);
*/

 ?>
