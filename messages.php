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
                    <a href="updatetrainers.php"><label for="">Udpate Trainers <i class="fas fa-chevron-right"></i></label></a>
                  </div>

                  <div class="items">
                    <a href="contact.php"><label for="">Udpate Contact Info <i class="fas fa-chevron-right"></i></label></a>
                  </div>

                  <div class="items">
                    <a href="messages.php"><label style="color:grey;" for="">Messages <i class="fas fa-chevron-right"></i></label></a>
                  </div>
               </div>

            <div class="col-md-10 col-8" >

                <div class="name" >
                <label class="name1" for="">Messages</label>
                </div>
              
                   <div style="overflow-x:auto; overflow-y:auto; max-height: 600px;">
                      <form action="" method="POST" enctype="multipart/form-data">
                       <table class="table table-hover table-dark table-bordered" >
                           <thead>
                               <tr >
                                   <th class="col-2">Name</th>
                                   <th class="col-2">Email</th>
                                   <th class="col-2">Subject</th>
                                   <th class="col-2">Message</th>
                                   
                               </tr>
                           </thead>

                           <?php 

                           $connection=mysqli_connect("localhost","root","");
                           $db=mysqli_select_db($connection,'placed');

                           $query=" SELECT * FROM `message` ";

                           $query_run=mysqli_query($connection,$query);
                            $i=1;
                           while($row=mysqli_fetch_array($query_run)){
                             ?>

                              <tr>
                                <td class="col-1"> <?php echo $row['name'] ?></td> 
                                <td class="col-1"> <?php echo $row['email'] ?></td>
                                <td class="col-1"> <?php echo $row['subject'] ?></td>
                                <td class="col-1"> <?php echo $row['message'] ?></td>
                                
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

  
   


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>