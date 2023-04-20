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

                    if (isset($_POST['ders5']))
                    {
                    $ders5 = $_POST['ders5'];
                    $_SESSION['ders5'] = $ders5;
                    }
                    else
                    {
                        
                        $ders5 = $_SESSION['ders5'];


                    }


                    ?>

                                            
                    <video width="100%" controls id="myvideo" width="480" height="320" controls autoplay  onclick="play()" >

               <?php echo' <source src="video/'.$ders5.'" type="video/mp4">';
               ?>

                <source src="movie.ogg" type="video/ogg">


                </video>

                <div id="video-controls" class="controls" data-state="hidden">
                <div class="row justify-content-between">
                <div class="col-10">
                <button onclick="openFullscreen();">Full</button>
                <button id="vidbutton" onclick="play();">Play</button> 
                </div>

                <div class="col-2 float-right">

                
                </div>

                </div>

                </div>


                <input type="hidden" name="videodd" id="videodd"  value="Backs">

                <input type="hidden" name="videodk" id="videodk"  value="0">



                <br/>



                      
                        
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
        <script src="js/video1.js"></script>
        <script src="js/video2.js"></script>
        <script src="js/video3.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>




</html>
