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
                  <!-- Page content-->



                  <section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border border">
                        <h3 class="bg-gray p-4">Register Now</h3>
                        <form action="register2.php" method="POST">
                            <fieldset class="p-4">
                                <input type="email" placeholder="Email*" name="user1" class="border p-3 w-100 my-2" required>
                                <input type="text" placeholder="İsim Soyisim" name="user3" class="border p-3 w-100 my-2" required>
                                <input type="password" placeholder="Password*" name="user2" class="border p-3 w-100 my-2" required>
                                <input type="password" placeholder="Confirm Password*" name="user22" class="border p-3 w-100 my-2" required>
                                <div class="loggedin-forgot d-inline-flex my-3">
                                   
                                      
                                </div>
                                <button type="submit" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">Register Now</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



                   <!-- Page content-->
                </div>

            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>

    <script>







var elem = document.getElementById("myvideo");



function openFullscreen() {

  elem.play();

  if (elem.requestFullscreen) {

    elem.requestFullscreen();

  } else if (elem.webkitRequestFullscreen) { /* Safari */

    elem.webkitRequestFullscreen();

  } else if (elem.msRequestFullscreen) { /* IE11 */

    elem.msRequestFullscreen();

  }

  

}
</script>

<script>

var elem = document.getElementById("myvideo");
var dk = document.getElementById("videodk");

var videodd = document.getElementById("videodd");

                        elem.onended = function() 

						                 {
                            elem.src = "video/backslash r.mp4";
                         
                            };

function Next() 
                        {
                       
                     dk.value = elem.currentTime ;
                    
                     elem.src = "video/backslash r.mp4";
                
                            elem.currentTime = dk.value;



                            $.post("videodurum.php", {"dk": dk.value , "videodd" : videodd.value    }, function(result){
                     
                               });





                        }
</script>


</html>
