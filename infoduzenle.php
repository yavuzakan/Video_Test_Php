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




                    try
                    {        
                    
                    if (isset($_POST['info1']))
                                       {
                                $info1 = $_POST['info1'];
                                $info2 = $_POST['info2'];
                                $info3 = $_POST['info3'];
                                $info4 = $_POST['info4'];
                                $info5 = $_POST['info5'];
                                $id = $_POST['id'];
                    $kaydet = $db->prepare("UPDATE info set info1  = :info1 , info2 = :info2 , info3 = :info3 , info4 = :info4 , info5 = :info5  where id=:id ") ;
                    
                        $insert = $kaydet->execute(array(
                        
                                'info1'  => $info1,
                                'info2'  => $info2,
                                'info3'  => $info3,
                                'info4'  => $info4,
                                'info5'  => $info5,
                    
                    
                            'id'  => $id
                            
                             )); 
                                       }
                        
                    } 
                     
                    catch(Exception $e) 
                    {
                        echo $e;
                    
                    //Hata Mesajı
                    
                    } 


                    $sor = $db->prepare("SELECT * from info ORDER BY id DESC");
                    $sor->execute();
                                               echo'<table>
                <tr>
                   <th>Info 1</th>
                   <th>Info 2</th>
                   <th>Info 3</th>
                   <th>Info 4</th>
                   <th>Info 5</th>
                   <th style="width:10%" >Edit</th>
               
                   
               
                
                 </tr>
                
               ';
                    
                    
                     while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
                {
                    
                        
                     echo'   
                         <form id="form1" name="form1" style="width:100%" action="infoduzenle.php" method="POST" > 
                   <input type="hidden" id="delete" name="delete" value="0">
               <input type="hidden" id="id" name="id" value="'. $cek['id'] .'">
               
               
                 <tr>
                   <th>  <input type="text" name="info1"  class="border p-3 w-100 my-2" value="'. $cek['info1'] .'"> </a></th>
                   <th>  <input type="text" name="info2"  class="border p-3 w-100 my-2" value="'. $cek['info2'] .'"> </a></th>
                   <th>  <input type="text" name="info3"  class="border p-3 w-100 my-2" value="'. $cek['info3'] .'" > </a></th>
                   <th>  <input type="text" name="info4"  class="border p-3 w-100 my-2" value="'. $cek['info4'] .'" > </a></th>
                   <th>  <input type="text" name="info5"  class="border p-3 w-100 my-2" value="'. $cek['info5'] .'" > </a></th>
                   
                   <th>  <button type="submit" class="btn btn-warning">Edit</button> </th>
                
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
