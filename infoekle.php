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
                {         if($_SESSION['valid_durum'] == 'admin')
                                            {

                        ?>


<h3 class="bg-gray p-4">Info Add</h3>
                    <form action="infoekle2.php" method="post">
                
                            <input type="text" name="info1" placeholder="" class="border p-3 w-100 my-2">
                            <input type="text" name="info2" placeholder="" class="border p-3 w-100 my-2">
                            <input type="text" name="info3" placeholder="" class="border p-3 w-100 my-2">
                            <input type="text" name="info4" placeholder="" class="border p-3 w-100 my-2">
                            <input type="text" name="info5" placeholder="" class="border p-3 w-100 my-2">
                    
                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Save</button>
                      
         
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
