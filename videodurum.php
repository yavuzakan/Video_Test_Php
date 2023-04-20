<?php 


    
include 'baglan.php';



    date_default_timezone_set("Europe/Istanbul"); 
    $tarih = date("Y/m/d H:i:s"); 






  


try {
					$time = $_POST['dk'];
                    $video = $_POST['videodd'];

    


            


	$kaydet = $db->prepare("INSERT INTO video set


        time  = :time,
        video  = :video,
        tarih = :tarih ") ;
    
    
    
	$insert = $kaydet->execute(array(

		'time'  => $time,
		'video' => $video,
        'tarih'  => $tarih
		 ));
    
    
    
    
        }
catch(Exception $e) 
{
    



}

    
    
    
    
    


 ?>
