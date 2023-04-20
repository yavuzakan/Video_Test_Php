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


<?php
session_start();
include 'head.php';

include 'baglan.php';
?>
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

         if($_SESSION['valid_durum'] == 'admin')
                                            {


                    try
{        

if (isset($_POST['ders1']))
                   {
			$ders1 = $_POST['ders1'];
			$ders2 = $_POST['ders2'];
			$id = $_POST['id'];
$kaydet = $db->prepare("UPDATE ders set ders1  = :ders1 , ders2 = :ders2  where id=:id ") ;

	$insert = $kaydet->execute(array(
	
            'ders1'  => $ders1,
			'ders2'  => $ders2,


        'id'  => $id
        
		 )); 
				   }
	
} 
 
catch(Exception $e) 
{
    echo $e;

//Hata Mesajı

} 
		
		
		
		
	
			         $sor = $db->prepare("SELECT * from ders ORDER BY id DESC");
     $sor->execute();
	                            echo'<table>
 <tr>
    <th>Ad</th>
    <th>Tanım</th>


    <th style="width:10%" >Rapor</th>
    <th style="width:10%" >Excel</th>
	

 
  </tr>
 
';
	 
	 
      while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
 {
	 
	 	
	  echo'   
          


  <tr>
    <th>  '. $cek['ders1'] .'</th>
	<th>  '. $cek['ders2'] .'</th>

	
	
	<th>  
	<form id="form1" name="form1" style="width:100%" action="dersraporgoster.php" method="POST" > 
	<input type="hidden" id="delete" name="delete" value="0">
<input type="hidden" id="id" name="id" value="'. $cek['id'] .'">
	
	<button type="submit" class="btn btn-warning">Rapor</button> </th>
 
               </form> 
			   
			   
			   	<th> 
<form id="form1" name="form1" style="width:100%" action="dersraporexcel.php" method="POST" > 
				

				<button type="submit" class="btn btn-warning">
				
				  
				<input type="hidden" id="id" name="id" value="'. $cek['id'] .'">
				Excel
				
				</button> </th>
           </form> 
          ';

		  
		  
		echo' </tr>

     
';  
          
	 
 }
		
	echo'</table><hr><br/>';	






                
               
            
                }}
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
        <script src="js/video1.js"></script>
        <script src="js/video2.js"></script>
        <script src="js/video3.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>




</html>
