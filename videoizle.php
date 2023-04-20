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



                  
if (isset($_POST['ders5']))
{
$dersid = $_POST['id'];

$dersataid = $_POST['dersataid'];
$userid = $_SESSION['valid_id'];
$username = $_SESSION['valid_user'];
$kontrol =  $dersid .'-'. $userid;
date_default_timezone_set("Europe/Istanbul"); 
$tarih = date("Y/m/d H:i:s"); 

$dk = $_POST['dk'];
$ders5 = $_POST['ders5'];
//<video width="640" height="480" controls="false">
echo '
<video width="100%" controls id="myvideo" width="480" height="320" controls onclick="play()" >
<source src="video/'.$ders5.'" type="video/mp4">

Your browser does not support the video tag.
</video>';

echo
'

<div id="video-controls" class="controls" data-state="hidden">
<div class="row justify-content-between">
<div class="col-10">
<button onclick="openFullscreen();">Full</button>
<button id="vidbutton" onclick="play();">Play</button> 
</div>
</div>

</div>



';



         $kaydet = $db->prepare("INSERT INTO dersbasla set
           dersid  = :dersid,
           userid  = :userid,
           tarih  = :tarih ,
           username = :username															
           
           ") ;




           $insert = $kaydet->execute(array(

           'dersid'  => $dersid,
           'userid'  => $userid,
           'tarih'  => $tarih ,
           'username' => $username
         
            ));

        $sonid = $db->lastInsertId();

echo'  
<br>
<div class="col-10">
<form id="form1" name="form1" style="width:100%" action="dersbitir.php" method="POST" > 

<input type="hidden" id="sonid" name="sonid" value="'. $sonid .'">
<input type="hidden" id="ders5" name="ders5" value="'. $cek['ders5'] .'">
<input type="hidden" id="kontrol" name="kontrol" value="'. $kontrol .'">

<button type="submit" class="btn btn-warning">Bitir</button> 

</form> 
</div>
<br>
<form id="form2" name="form2" class="form2">
<input type="hidden" id="dersataid" name="dersataid" value="'. $dersataid .'">
<input type="hidden" name="videodk" id="videodk"  value="'.$dk.'">


<input type="hidden" id="sonid" name="sonid" value="'. $sonid .'">
<input type="hidden" id="ders5" name="ders5" value="'. $cek['ders5'] .'">
<input type="hidden" id="kontrol" name="kontrol" value="'. $kontrol .'">


</form>

';


}
else
{
  echo '<script> window.location = "dersmevcut.php" </script>'; 
}
               
            
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


        <script>
          var elem = document.getElementById("myvideo");
          var dk = document.getElementById("videodk");
          document.getElementById('myvideo').addEventListener('loadedmetadata', function() {
  this.currentTime = <?php echo $_POST['dk'];?>;
}, false);







  function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
      var today = new Date();
      var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      console.log(time);

      dk.value = elem.currentTime ;

  

$.ajax(
{

type:"POST",
url:"1deneme.php",
data:$(".form2").serialize(),
success:function(data)
{



}
});



    }, 20000);
}
window.onload = function () {
    var fiveMinutes = 60 * 5,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};



        </script>

<script>

var elem = document.getElementById("myvideo");


elem.onended = function() 

						{

console.log("1235");
document.getElementById("form1").submit();

						};

  
  </script>




    </body>




</html>
