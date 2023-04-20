<?php
session_start();
include 'head.php';

include 'baglan.php';
?>
<?php

if(isset($_GET['ara']))
{
  $ara = $_GET['ara'];
  
}
        else{
                 
                   $ara = '%';
             }
 if (isset($_GET['page']))
              {
                $page = $_GET['page'];   
$ara = $_GET['ara'];     							  
                  
              }
             else{
                 
                  $page = 0; 
  }

  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    
  }
          else{
                   
            $id = $_GET['id'];
               }


?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>  
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
                    <?php
                         include 'menu1.php';
                    ?>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <?php
                            include 'menu2.php';
                            ?>
                    </div>
                </nav>
                <!-- Page content-->
                
                <div class="container-fluid">

                <?php
                if (isset($_SESSION['valid_user']))
                {
            

?>

<form   method="GET" >

<input type="text" class="form-control my-2 my-lg-0" name="ara" id="ara" placeholder="What are you looking for">
<input type="hidden" id="id" name="id" value="<?php echo $id ?>">
<input type="hidden" id="link" name="link" value="<?PHP echo $_GET['link'] ?>">
<input type="hidden" id="link2" name="link2" value="<?PHP echo $_GET['link2'] ?>">
<input type="hidden" id="button" name="button" value="<?PHP echo $_GET['button'] ?>">
</form>
 <?PHP  
 			 
        $sql = "SELECT * from user where user1 LIKE '%".$ara."%' ORDER BY id DESC  LIMIT ".$page." , 6 ";
        $sor = $db->prepare($sql);
        $sor->execute();			
        echo'<table>
        <tr>
           <th>User   	</th>
       
         
       
           <th style="width:10%" >'.$_GET['button'].'</th>
       
        
         </tr>
        
       ';
       while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
       {
         
           
          echo'   
          <form id="form1" name="form1" style="width:100%" action="'.$_GET['link'].'" method="POST" > 
          <input type="hidden" id="personid" name="personid" value="'. $cek['id'] .'">
      <input type="hidden" id="infoid" name="infoid" value="'. $_GET['id'] .'">
        <tr>
          <th> '.$cek['user1'].' </a></th>
      
      
        
        <th>   <button type="submit" class="btn btn-warning" >'.$_GET['button'].'</button</th>
        </tr>
      
                </form> 
      
                
                
                ';
                
         
       }
          
        echo'</table><hr><br/>';	

?>


<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
						<?php
				  
						   if ($ara === "")
                            {
                              }
                           else{
			
				  				
                            
    $bilgilerimsor = $db->prepare("SELECT * from user where user1 LIKE '%".$ara."%'");
	
     $bilgilerimsor->execute();
	 
	 $sayi = $bilgilerimsor->rowCount();   
				  
				  
				  //linkleri ekle
		
					$sayi2 = 2;
					$sayi3 = 6;  
          //deneme.php?link=dosyayukle.php&link2=deneme.php&button=Dosya+Yukle
					   echo " 
   
					<li class='page-item'><a class='page-link' href=".$_GET['link2']."?page=0&ara=".$ara ."&id=".$id ."&link=".$_GET['link'] ."&link2=".$_GET['link2'] ."&button=".$_GET['button'] ."    >1</a></li>"; 


					while($sayi > 6) 
						{
    
						 $sayi = $sayi - 6;
						 
						//$output .= ' <li class="page-item"> <button class="btn btn-success col-auto" name="sayfa" id="sayfa" value="'.$sayi3.'">'. $sayi2 .'</button></li>';
						//$output .= ' <li class="page-item value "'.$sayi3.'" name="sayfa"> <a href="#" class="page-link bg-success text-white">'. $sayi2 .'</a></li> ';
						echo "<li class='page-item'><a class='page-link'  href=".$_GET['link2']."?page=".$sayi3 ."&ara=".$ara ."&id=".$id ."&link=".$_GET['link'] ."&link2=".$_GET['link2'] ."&button=".$_GET['button'] ."   >". $sayi2 ."</a></li>";  
							
							$sayi2++;
						$sayi3 = $sayi3 + 6 ;    
						} 
										  
						   }				  
				  ?>

				  			</ul>
					</nav>
				</div>



<?php

                }
                else
                {

                      include 'login.php';

                }


                ?>
                </div>

            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>

    <script>

	
$(".a1").submit(function(){

event.preventDefault();


$.ajax(
{

type:"POST",
url:"<?php echo $_GET['link']; ?>",
data:$(this).serialize(),
success:function(data)
{

var veri = JSON.parse(data);
swal("Message" ,veri.message , veri.status );

}
});



});
	
	

</script>


</html>
