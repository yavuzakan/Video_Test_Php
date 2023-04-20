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





                  $id = $_POST['id'];

                  $sor = $db->prepare("SELECT * from testname WHERE id = ".$id);
                    $sor->execute();
                     while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
                {
                echo '<h1>' . $cek['testname1'] . '</h1>';
                $testname = $cek['testname1'];
                 $testid = $cek['id'];
                
                
                }
               
               
                  $sor = $db->prepare("SELECT * from question WHERE que2 LIKE '". $id ."' ORDER BY id");
                    $sor->execute();
                     
                 
                  
                  
                     while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
                {
                echo '<h4>' . $cek['que1'] . '</h4>';
                
                $question = $cek['que1'];
                $questionid = $cek['id'];
                
                       
                   $sor2 = $db->prepare("SELECT * from answer WHERE ans2 LIKE '". $cek['id'] ."' ORDER BY id ");
                    $sor2->execute();
                  
                 echo ' <table style="width:100%" border="1"> ';
                 
                     while ($cek2 = $sor2 ->fetch(PDO::FETCH_ASSOC))
                   {
                      $kontrol2 = '0';
                      
                     $res3 = $testid;
                     $res5 = $questionid ;
                     $res6 = $cek2['ans3'];
                   
                     
                     $sql2 = "SELECT * from result WHERE res3 LIKE '". $res3 ."' and res5 LIKE '". $res5 ."' and res6 LIKE '". $res6 ."' ";
                               $sor122 = $db->prepare($sql2);
                       $sor122->execute();
                   $kontrol2 = $sor122->rowCount();   
                     
                 
                     
               
                  
                   
                     
                   echo '<tr><th style="width:80%">'. $cek2['ans3'] .' </th>   <th style="width:20%"> ' . $kontrol2 .'</th> </tr>' ;   
                   // echo'<br>';
                   
                     $ansid = $_POST['id'];
                  $pic = $cek2['ans1'];
                   
                   if(strlen($pic)>1)  
                   {
                   echo '<img width="30%" height="30%" src="dosyalar/'.$pic.'" >	';
                    echo'<br>';
                   }
                   
               
                   
                   }
                echo   '  </table> ' ;
                
                }



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
