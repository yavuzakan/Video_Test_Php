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

	
                  $dersid = $_POST['id'];



	
                  $sor = $db->prepare("SELECT * from dersbasla where dersid LIKE'".$dersid."'  and bitir not LIKE ''  ORDER BY id DESC");
                  $sor->execute();
                                           echo'<table id="dataTable" class="table table-striped">
             
              
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
