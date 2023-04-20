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




                  $que1 = $_POST['que1'];
                  $id = $_POST['id2'];
                  $delete = '0';
                  $delete = $_POST['delete'];
                 
                 try
                 {
                 $kaydet = $db->prepare("UPDATE question set que1  = :que1 where id=:id ") ;
                 
                   $insert = $kaydet->execute(array(
                   
                             'que1'  => $que1,
                 
                 
                         'id'  => $id
                         
                      )); 
                     
                   
                   
                   
                   if($delete=='delete')
                   {
                         
                      
                           
                           $query = $db->prepare("DELETE FROM question WHERE id = :id");
                 $delete = $query->execute(array(
                    'id' => $id
                 ));
                           
                           
                           
                           
                      
                         
                     
                   }
                   
                   
                   
                   
                   
                 } 
                  
                 catch(Exception $e) 
                 {
                     
                 
                 //Hata Mesajı
                 
                 } 

                 $id =$_POST['id'];
                 $sor = $db->prepare("SELECT * from question WHERE que2 LIKE'".$id."' ORDER BY id DESC");
       $sor->execute();
                                echo'<table>
   <tr>
      <th>Question</th>
      
    
  
      <th style="width:10%" >Edit</th>
     <th style="width:10%" >Delete</th>
  
   
    </tr>
   
  ';
     
     
        while ($cek = $sor ->fetch(PDO::FETCH_ASSOC))
   {
     
       
      echo'   
            <form id="form1" name="form1" style="width:100%" action="testsoruduzenle2.php" method="POST" > 
      <input type="hidden" id="id" name="id" value="'. $id .'">  
  <input type="hidden" id="id2" name="id2" value="'. $cek['id'] .'">
  <input type="hidden" id="que1" name="que1" value="'. $cek['que1'] .'">
  <input type="hidden" id="delete" name="delete" value="0">  
    <tr>
      <th>  <input type="text" name="que1" placeholder="Question" class="border p-3 w-100 my-2" value="'. $cek['que1'] .'"> </a></th>
  
    
    
    <th>  <button type="submit" class="btn btn-warning">Edit</button> </th>
  </form> 
            
            ';
        echo'  <form id="form12" name="form12" style="width:100%" action="testsoruduzenle2.php" method="POST" > 
        <input type="hidden" id="id" name="id" value="'. $id .'">  
        <input type="hidden" id="delete" name="delete" value="delete">  
        <input type="hidden" id="id2" name="id2" value="'. $cek['id'] .'">
        <input type="hidden" id="que1" name="que1" value="'. $cek['que1'] .'">
          <th>  <button type="submit" class="btn btn-warning" '?>  onclick="return confirm('Delete.')" <?php echo '>Delete</button
         </form> 
        ';
        
        
      echo' </tr>
  
       
  ';  
            
     
   }
      
    echo'</table><hr><br/>';





















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
