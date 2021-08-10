<?php 
 
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,'placed');

 if(isset($_GET['edit'])){
  $id=$_GET['edit'];

  $query=" SELECT * FROM `trainer list` WHERE id=$id ";
 
 $query_run=mysqli_query($connection,$query);
 
 while($row=mysqli_fetch_array($query_run)){
 
   $name = $row['name'];
   $dep = $row['designation'];
   $des =  $row['descr'];
   $img = $row['image'];
   $data = base64_encode($img);
   
 }
 }
 ?>
 
 



<?php




if (isset($_POST['upload'])){

  $db = mysqli_connect("localhost", "root", "", "placed");

  $target = "img/".basename($_FILES['image']['tmp_name']);
 
  

  $id=$_GET['edit'];
  $text = $_POST['name'];
  $text1 = $_POST['dep'];
  $text2 = $_POST['des'];
  $image = $_FILES['image']['tmp_name'];
  $imgContent = addslashes(file_get_contents($image)); 

  $sql = "UPDATE `trainer list` SET name='$text', designation='$text1', descr='$text2', image='$imgContent' WHERE id=$id";

  mysqli_query($db, $sql);
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <script src="https://kit.fontawesome.com/a815a59ac0.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    
    <!-- Template Main CSS File -->
    
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Placement Cell</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <h5>Admin Panel</h5>
    </div>
    
  </header><!-- End Header -->
<section id="one">
  <div class="container fixed-top blur" style="max-width: 600px;">
    <div class="row">
      <div class="col-md-12 text-center ">

        <div class="over">
          <div class="close d-flex justify-content-end"><i onclick="clicked()" class="fas fa-times"></i></div>
          <div class="label" style="margin-top:3em;"><label  for="">Update Details</label></div>

          <div class="heep d-flex justify-content-center">
          <form action="#" method="POST" enctype="multipart/form-data">
          

          <div class="input ">
            <i class="fas fa-user-graduate"></i>
            <input type="text" placeholder="Trainer Name" value="<?php echo $name?>" name="name" required>
          </div>

          <div class="input">
            <i class="fas fa-building"></i>
            <input type="text" placeholder="Designation" value="<?php echo $dep?>" name="dep" required>
          </div>

          <div class="input">
          <i class="fas fa-align-left"></i>
            <input type="text" placeholder="Description" value="<?php echo $des?>" name="des" required>
          </div>

         <div class="fileinp">
            <i class="fas fa-image"></i>
            <input type="file" value="<?php echo $r?>" name="image" required>
            <i class="fas fa-search second"></i>
          </div>
        
          <div >
            <input class="btn" type="submit" name="upload" onclick="trues()">
          </div>
        
        </form>

      </div>
        </div>
        
      </div>
    </div>
  </div>
</section>


  <section id="side_bar" style="margin-top: 5em;">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-2 col-4 side_bar " >
                  <div class="items">
                      <a href="adminpanel.php"><label class="active" for="">Placed Students <i class="fas fa-chevron-right"></i></label></a>
                  </div>

                  <div class="items">
                    <a href="addstudent.php"><label for="" >Add New Student <i class="fas fa-chevron-right"></i></label></a>
                  </div>

                  <div class="items">
                    <a href="update.php"><label for="">Udpate <i class="fas fa-chevron-right"></i></label></a>
                  </div>

                  <div class="items">
                    <a href=""><label style="color:grey;" for="">Udpate Trainers <i class="fas fa-chevron-right"></i></label></a>
                  </div>

                  <div class="items">
                    <a href="contact.php"><label for="">Udpate Contact Info <i class="fas fa-chevron-right"></i></label></a>
                  </div>

                  <!--div class="items">
                    <a href="messages.php"><label for="">Messages <i class="fas fa-chevron-right"></i></label></a>
                  </div-->
               </div>
               

               <div class="col-md-10 col-8">
                <div class="name" >
                  <label class="name1" for="">Update Trainers Info</label>
                  </div>

                  <div style="overflow-x:auto; overflow-y:auto; max-height: 600px;">
                    <form action="" method="POST" enctype="multipart/form-data">
                     <table class="table table-hover table-dark table-bordered" >
                         <thead>
                             <tr >
                                 <th>Sl No:</th>
                                 <th>Name</th>
                                 <th>Designation</th>
                                 <th>Description</th>
                                 <th>Image</th>
                                 
                             </tr>
                         </thead>

                         <?php 

                         $connection=mysqli_connect("localhost","root","");
                         $db=mysqli_select_db($connection,'placed');

                         $query=" SELECT * FROM `trainer list` ";

                         $query_run=mysqli_query($connection,$query);

                         while($row=mysqli_fetch_array($query_run)){
                           ?>

                            <tr>
                              <td> <?php echo $row['id'] ?></td>
                              <td> <?php echo $row['name'] ?></td>
                              <td> <?php echo $row['designation'] ?></td>
                              <td> <?php echo $row['descr'] ?></td>
                              <td> <?php echo '<img src="data:image/jpeg;charset=utf8;base64,'.base64_encode($row['image']).' " style="width:70px; height:100px;"> ' ?></td>
                              <td><a href="updatetrainers.php?edit=<?php echo $row['id']; ?>"  ><i onclick="near()" class="fas fa-pencil-alt icon" style="text-align:center;"></i></a></td>
                            </tr>

                           <?php
                         }
                         
                         ?>
                     </table>
                    </form>
                 </div>
              </div>

             

            </div>
        </div>
    </section>

     
  
    
     
  
  <script src="update.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>