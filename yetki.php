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

                      $id = $_POST['personid'];

                      try
                      {
                          
                        if (isset($_POST['personid']))
                        {

                          $sql = "SELECT * from user WHERE id =".$id;
                          // $bilgilerimsor = $db->prepare("SELECT * from user WHERE user1= :email and user2= :pass");
                   
                   
                    
                     
                     $sqlyap = $db ->prepare($sql);
                     $sqlyap->execute();
                     
                             while ($cek = $sqlyap->fetch(PDO::FETCH_ASSOC))
                       {
                   Echo  '<h3>'.$cek['user1'] . '</h3>';
                   echo '</br>';   
                   echo '<form id="form1" name="form1" style="width:100%" action="yetki2.php" method="POST" > ';
                   echo '
                   
			<select class="form-control mb-2" id="user4" name="user4" >
			<option value= "user" >Çalışan </option>
      <option value= "admin" >Yönetici </option>
      </select> 
      <input type="hidden" id="id" name="id" value="'. $id .'">
 
      <button type="submit" class="btn btn-warning">Edit</button> 
      </form>    
                   ';
                    

                     
           
                       }
           





                        }
                      }
                      catch(Exception $e)
                      {


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
        <script src="js/video1.js"></script>
        <script src="js/video2.js"></script>
        <script src="js/video3.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>




</html>
