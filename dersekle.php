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

                 ?>


                                                                <br/>
                                                                <form action="dersekle2.php" method="post" style="width:100%" enctype="multipart/form-data">
                                                                      
                                  
                                                                      <input type="text" class="form-control col-auto mb-2" placeholder="AD" name="ders1" id="ders1"  required>
                                                                        <textarea id="ders2" name="ders2"  placeholder="Tanım" class="border p-3 w-100 my-2" required></textarea>
                                                                      
                                                                            <input type="submit" name="submit" value="Add">     
                                                                            
                                                                  </form>



                <?php
               
            
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
