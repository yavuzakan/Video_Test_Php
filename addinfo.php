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

              echo ' 
              

<br/>
<div class="row">

    
          



          
          
          
          
          ';

          $sql = "SELECT * from info  ORDER BY id DESC";
          $sor = $db->prepare($sql);
    $sor->execute();

    while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
    {
      echo
      '        
      <div class="col-md-2">

      <form id="form1" name="form1" style="width:100%" action="deneme.php" method="GET" > 
      <input type="hidden" id="id" name="id" value="'. $cek['id'] .'">
        <tr>
        
          <input type="hidden" id="link" name="link" value="infopersonelekle.php">
          <input type="hidden" id="link2" name="link2" value="deneme.php">
          <input type="hidden" id="button" name="button" value="'. $cek['info1'] .'">
        <th>   <button type="submit" class="btn btn-warning" >'. $cek['info1'] .' Ekle</button</th>
        </tr>
      </form>

</div>
      
      
      ';


      
    }



     echo'
              
</div>             
              ';
               
            
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
