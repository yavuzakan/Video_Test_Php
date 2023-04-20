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
					         





                  $testid = '1';
		
                  $sql = "SELECT * from testata WHERE userid LIKE '".$_SESSION['valid_id']."' and aktif LIKE '0'";
                            $sor1 = $db->prepare($sql);
                           $sor1->execute();
                 
                 echo'<table>
              <tr>
                 <th>Test   </th>
                 <th>Date</th>
               
             
                 <th style="width:10%" >Run</th>
                 <th style="width:10%" >End</th>
              
               </tr>
              
             ';
                                while ($cek1 = $sor1 ->fetch(PDO::FETCH_ASSOC))
              {
                 $testid = $cek1['testid'];
               
                
                   $sql = "SELECT * from testname WHERE id = ".$testid." ORDER BY id DESC";
                        $sor = $db->prepare($sql);
                  $sor->execute();
                                           
                
                
                   while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
              {
                
                  
                 echo'   
                       <form id="form1" name="form1" style="width:100%" action="testcalistir2.php" method="POST" > 
             <input type="hidden" id="id" name="id" value="'. $cek['id'] .'">
               <tr>
                 <th> '.$cek['testname1'].' </a></th>
             
               <th>'.$cek['testname3'].'</th>
               
               <th>  <button type="submit" class="btn btn-warning">Run</button> </th>
              
             
                       </form> 

                       <th> 
                       <form id="form1" name="form1" style="width:100%" action="testbitir.php" method="POST" > 
                       <input type="hidden" id="id" name="id" value="'.  $cek1['id'] .'">
                                <button type="submit" class="btn btn-warning">End</button>
                                </form> 
                       </th>


             
                       </tr>
                       
                       ';
                       
                
              }
               }	
               echo'</table><hr><br/>';











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
    </body>




</html>
