<?php 

$dk = $_POST['videodk'];
$id = $_POST['dersataid'];


/*
$data["status"]="error";
$data["message"]=$videodk . " - " . $dersataid ;
//$data["message"] ="Assignment Successful";
echo json_encode($data);
                     
    exit;   
	*/

	include 'baglan.php';



	try
{
$kaydet = $db->prepare("UPDATE dersata set dk  = :dk  where id=:id ") ;

	$insert = $kaydet->execute(array(
	
            'dk'  => $dk,
		

        'id'  => $id
        
		 )); 
  
	
	
} 
 
catch(Exception $e) 
{
    

//Hata Mesajı

} 

try
{


	$sonid = $_POST['sonid'];
	$kontrol = $_POST['kontrol'];

date_default_timezone_set("Europe/Istanbul"); 
$tarih = date("Y/m/d H:i:s"); 


$sql = "UPDATE dersbasla set  bitir = '".$tarih."' where id = ".$sonid;


$sqlyap = $db ->prepare($sql);
$sqlyap->execute();






}
catch(Exception $e)
{
//Hata MEsajı

}





	
	


 ?>
