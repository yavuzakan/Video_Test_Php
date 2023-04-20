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

                  //1

                  include 'baglan.php';
                  session_start();
                   $araid = $_SESSION['valid_id'];
                   ini_set('post_max_size', '20M');
                   ini_set('upload_max_filesize', '20M');
                   
                 
                       
                 date_default_timezone_set("Europe/Istanbul");
                 $time=time();
                 
                 $simdi=date('YmdHis',$time);
                 
                 
                 $currentDir = getcwd();
                 $uploadDirectory = "/dosyalar/";
                 
                 $errors = []; // Store all foreseen and unforseen errors here
                 
                 //$fileExtensions = ['pdf','doc','docx','xls','xlsx','*']; // Get all the file extensions
                 
                 $fileName = $_FILES['myfile']['name'];
                 $dosya4 = $fileName;      
                 echo $fileSize = $_FILES['myfile']['size'];
                 $fileTmpName = $_FILES['myfile']['tmp_name'];
                 $fileType = $_FILES['myfile']['type'];
                 $fileExtension = strtolower(end(explode('.',$fileName)));
                 
                 $file_array1 = explode(".", $file_name);
                 $uzanti = end($file_array1);
                 $dosya = $simdi . "." . $fileExtension ;
                 $location = 'dosyalar/' . $dosya ;
                 
                 if ($fileSize > 2000000) {
                 
                     $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
                 echo '<script language="javascript">';
                 echo 'alert("ERROR2")';
                 echo '</script>';
                 echo '<script language="javascript">';
                                      echo ' window.location = "index.php" ';
                        echo '</script>';       
                      exit;
                 }
                 
                 
                 
                 
                 
                     $uploadPath = $currentDir . $uploadDirectory .$dosya .'.'. $fileExtension; 
                 
                     if (isset($_POST['submit'])) {
                 /**
                         if (! in_array($fileExtension,$fileExtensions)) {
                             $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
                       echo '<script language="javascript">';
                 echo 'alert("ERROR1.")';
                 echo '</script>';
                         }
                     */
                 
                 
                 
                         if (empty($errors)) {
                            // $didUpload = move_uploaded_file($fileTmpName, $location);
                 
                 
                 
                 
                 
                       if(move_uploaded_file($fileTmpName, $location)){
                         try {
                           $file1 = $_POST['file1'];
                           $file2 = $_POST['file2'];			
                           $file3 = $dosya ;
                           $file4 = $_SESSION['valid_user'];
                           $file5 = date("Y/m/d H:i:s"); 
                           $file6 = $fileName;
                           $file7 = $_POST['file7'];
                           $file8 = '0';
                           $file9 = $dosya ;
                             
                               $kaydet = $db->prepare("INSERT INTO file set
                         file1  = :file1,
                         file2  = :file2,
                         file3  = :file3,
                         file4  = :file4,
                         file5  = :file5,
                         file6  = :file6,
                         file7  = :file7,
                         file8  = :file8,
                         file9 = :file9
                         ") ;   
                       
                       
                       $insert = $kaydet->execute(array(
                     
                         'file1'  => $file1,
                         'file2'  => $file2,
                         'file3'  => $file3,
                         'file4'  => $file4,
                         'file5'  => $file5,
                         'file6'  => $file6,
                         'file7'  => $file7,
                         'file8'  => $file8,
                         'file9'	=>$file9
                         
                          ));
                             
                             if($insert)
                     {
                       
                     echo '<script language="javascript">';
                     echo 'alert("Operation Completed")';
                               
                     echo '</script>';
                            
                     echo '<script language="javascript">';
                                echo ' window.location = "index.php" ';
                          echo '</script>';       
                     exit;
                               
                     }
                     else
                       {
                     echo '<script language="javascript">';
                     echo 'alert("ERROR.")';
                     echo '</script>';
                     echo '<script language="javascript">';
                     echo ' window.location = "index.php" ';
                 echo '</script>';   
                 exit;
                     }
                     
                       
                     
                         
                             
                             
                             
                     }
                     catch(Exception $e) 
                     {
                       
                       echo '<script language="javascript">';
                       echo 'alert("ERROR.")';
                       echo '</script>';
                       echo '<script language="javascript">';
                       echo ' window.location = "index.php" ';
                   echo '</script>';   
                   exit;
                     
                     }
                       }
                       else{
                         echo '<script language="javascript">';
                         echo 'alert("ERROR.")';
                         echo '</script>';
                         echo '<script language="javascript">';
                         echo ' window.location = "index.php" ';
                     echo '</script>';   
                     exit;
                       }
                 
                 
                 
                      
                               //  echo "The file " . basename($fileName) . " has been uploaded";
                             
                             
                            
                 
                 
                 
                 }
                 
                 }
                                        
                                        
                                              echo '
                       
                       
                       <form action="DosyaYukle.php" method="post" style="width:100%" enctype="multipart/form-data">
                 <input class="hidden" type="hidden" name="file7" id="file7" value="'.$_POST['userid'].'" > 
                 <input class="hidden" type="hidden" name="userid" id="userid" value="'.$_POST['userid'].'" > 
                                             
                         <input type="text" class="form-control col-auto mb-2" placeholder="File Name / Short Description" name="file1" id="file1"  required>
                           <textarea id="file2" name="file2"  placeholder="File Properties / Description" class="border p-3 w-100 my-2" ></textarea>
                          
                         <input type="file" class="form-control col-auto mb-2" name="myfile" id="fileToUpload" required>
                                <input type="submit" name="submit" value="Upload File Now">
                               
                     </form>
                     
                       ';
                       
                                        
                 
               
               
                 



















                  
                  //1
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
