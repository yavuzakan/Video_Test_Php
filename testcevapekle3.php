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
					


                  $id = $_POST['id'];   
                        

                  //
                  
                  
                  
                  date_default_timezone_set("Europe/Istanbul");
                  $time=time();
                  
                  $simdi=date('YmdHis',$time);
                  
                  
                  $currentDir = getcwd();
                  $uploadDirectory = "/dosyalar/";
                  
                  $errors = []; // Store all foreseen and unforseen errors here
                  
                  //$fileExtensions = ['pdf','doc','docx','xls','xlsx','pptx']; // Get all the file extensions
                  
                  $fileName = $_FILES['myfile']['name'];
                  $dosya4 = $fileName;      
                   $fileSize = $_FILES['myfile']['size'];
                  $fileTmpName = $_FILES['myfile']['tmp_name'];
                  $fileType = $_FILES['myfile']['type'];
                  $fileExtension = strtolower(end(explode('.',$fileName)));
                  
                  $file_array1 = explode(".", $file_name);
                  $uzanti = end($file_array1);
                  $dosya = $simdi . "." . $fileExtension ;
                  $location = 'dosyalar/' . $dosya ;
                  
                  if(strlen($fileExtension)<1)  
                  {
                  $dosya=''; 
                  
                  }	 
                  
                  
                  $uploadPath = $currentDir . $uploadDirectory .$dosya .'.'. $fileExtension; 
                  
                  if (isset($_POST['submit'])) {
                  
                  
                  
                  if ($fileSize > 2000000) {
                      $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
                  echo '<script language="javascript">';
                  echo 'alert("ERROR2")';
                  echo '</script>';
                  }
                  
                  if (empty($errors)) {
                      $didUpload = move_uploaded_file($fileTmpName, $location);
                  
                  
                        //  echo "The file " . basename($fileName) . " has been uploaded";
                      
                      
                      try {
                  
                  $ans1 = $dosya ;
                   $ans2 = $id ;
                   $ans3 = $_POST['ans3'] ;
                  $ans4 = $simdi;
                    $kaydet = $db->prepare("INSERT INTO answer set
                    ans1  = :ans1,
                  ans2  = :ans2,
                  ans3  = :ans3,
                  ans4  = :ans4  ") ;   
                  
                  
                  $insert = $kaydet->execute(array(
                  
                  'ans1'  => $ans1,
                  'ans2'  => $ans2,
                  'ans3'  => $ans3,
                  'ans4'  => $ans4 
                  ));
                  
                  if($insert)
                  {
                  
                  echo '<script language="javascript">';
                  echo 'alert("Operation Completed")';
                              
                  echo '</script>';
                        
                  echo '<script language="javascript">';
                              
                  echo '</script>';       
                  
                              
                  }
                  else
                  {
                  echo '<script language="javascript">';
                  echo 'alert("ERROR.1")';
                  echo '</script>';
                  }
                  
                  
                  
                  
                  
                          
                          
                  }
                  catch(Exception $e) 
                  {
                  
                  
                  echo '<script language="javascript">';
                  echo 'alert("ERROR.3")';
                  echo '</script>';
                  
                  }
                  
                  
                  
                  }
                  
                  }
                                 
                                 
                                       echo '
                  <div class="col-md-12 ">
                  
                  <form action="testcevapekle3.php" method="post" enctype="multipart/form-data">
                                                                                 <label > Soru Ekle</label>	  
                                      
                  <input type="text" class="form-control col-auto mb-2" placeholder="" name="ans3" id="ans3"  required>
                  
                   
                  <input type="file" class="form-control col-auto mb-2" name="myfile" id="fileToUpload" accept="image/*"  >
                         <input type="submit" name="submit" value="Send">
                        
                        
                  <input type="hidden" id="id" name="id" value="'. $id .'">
                   
                  </form>
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
