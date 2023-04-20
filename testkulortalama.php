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
                {         if($_SESSION['valid_durum'] == 'admin')
                                            {





                  ?>
                  <br/>
					<form  action="testkulortalama.php" method="POST" >

								<input type="text" class="form-control my-2 my-lg-0" name="ara" id="ara" placeholder="What are you looking for">
				
					</form>
	<br>
	
 
	<?php
	

                           

	
	
		
									if(isset($_POST['ara']))
							{
								$ara = $_POST['ara'];
								
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
						   
						   
			
   
  $sql ="SELECT * from user where user1 LIKE '%".$ara."%'  ORDER BY id DESC  LIMIT ".$page." , 6 ";
  $sor = $db->prepare($sql);
 $sor->execute();					   
 
      $sor->execute();
                               echo'<table>
  <tr>
     <th>Mail   	</th>
     <th>Name 	</th>
   
 
     <th style="width:10%" >Next</th>
 
  
   </tr>
  
 ';
    
    
       while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
  {
    
      
     echo'   
     <form id="form1" name="form1" style="width:100%" action="testkulortalama2.php" method="POST" > 
     <input type="hidden" id="testid" name="testid" value="'. $id .'">
 <input type="hidden" id="id" name="id" value="'. $cek['id'] .'">
   <tr>
     <th> '.$cek['user1'].' </a></th>
 
   <th>'.$cek['user3']. '</th>
   
   <th>   <button type="submit" class="btn btn-warning" >Next</button</th>
   </tr>
 
           </form> 
 
           
           
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>




</html>
