<?php
session_start();
include 'head.php';

include 'baglan.php';
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
			if($_SESSION['valid_durum'] == 'admin')
                                            {




                    
		$personid = $_POST['personid'];
		
		

		
					$sql ="SELECT * from infoperson where personid  LIKE  '". $personid ."'  ORDER BY infoid DESC";
			         $sor = $db->prepare($sql);
     $sor->execute();

	 
	 echo'<table>';
$eski=0;

      while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
 {
	
  $infoid = $cek['infoid'];
   if ($eski !== $infoid )
   {
    echo'</table><hr><br/>';	

    $sql2 ="SELECT * from info where id  =  ". $infoid;
    $sor2 = $db->prepare($sql2);
$sor2->execute();
while ($cek2 = $sor2 ->fetch(PDO::FETCH_ASSOC))
{
 
    echo'<table>
    <tr>
       <th>'.$cek2['info1'].'</th>
       <th>'.$cek2['info2'].'</th>
     <th>'.$cek2['info3'].'</th>
     <th>'.$cek2['info4'].'</th>
     <th>'.$cek2['info5'].'</th>
   
     
   
    
     </tr>';
}
     $eski = $infoid;
    
   }
	 
  
	  echo'   
  <tr>
    <th> '.$cek['info1'].'  </th>
	<th> '.$cek['info2'].'  </th>
	<th> '.$cek['info3'].'  </th>
	<th> '.$cek['info4'].'  </th>
  <th> '.$cek['info5'].'  </th>
	
	
  </tr> ';


if ($eski !== $infoid )
{




 
 
}
          
	 
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
