



		<?php
		
    header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=file.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");

  include 'baglan.php';
   

   $dersid = $_POST['id'];

  
  
  
   $sor = $db->prepare("SELECT * from dersbasla where dersid LIKE'".$dersid."'  and bitir not LIKE ''  ORDER BY id DESC");
   $sor->execute();


                            echo'<table border="1">
              
<tr>
  <th> Kullanici </th>
<th> Ders Baslama</th>
<th>Ders Bitis</th>
  <th>Gecen Zaman</th>
 </tr>


';
 
 
    while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
{
 
   
  echo'   


<tr>
  <th>'. $cek['username'] .'</th>
<th> '. $cek['tarih'] .'</th>
<th>'. $cek['bitir'] .'</th> <th>';

   $dStart = new DateTime($cek['tarih']) ;
 $dEnd  = new DateTime($cek['bitir']) ;
 
 $since_start = $dStart->diff($dEnd);
 echo $since_start->h.' saat ';
 echo ' '. $since_start->i.' dk ';
echo ' '. $since_start->s.' sn';



echo'
</th>
</tr>

   
';  
        
 
}
  
echo'</table>';	
  ?>