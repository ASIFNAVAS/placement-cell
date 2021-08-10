<?php 

$host="localhost";
$user="root";
$password="";
$db="signin";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false){
  die("Connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=$_POST["email"];
  $password=$_POST["password"];


  $sql="select * from signintable where username='".$username."' AND password='".$password."' ";

  $result = mysqli_query($data, $sql); 


  $row=mysqli_fetch_array($result);

  if($row["type"]=="user"){
     
  }

  else if($row["type"]=="admin"){
    header("location:adminpanel.php");
}

  else{
    echo "username or password incorrect";
  }
}




?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets1/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets1/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets1/css/style.css" rel="stylesheet">

    <title>Form</title>
  </head>
  <body>
    <section class="form-08">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="_form-08-main">
              <div class="_form-08-head">
                <h2>Sign In</h2>
              </div>
            <form action="#" method="POST">
              <div class="form-group">
                <label></label>
                <input type="text" name="email" class="form-control" type="text" placeholder="Username" required="" aria-required="true">
              </div>

              <div class="form-group">
                <label></label>
                <input type="password" name="password" class="form-control" type="text" placeholder="Password" required="" aria-required="true">
              </div>

              

              <div class="form-group">
                <div class="_btn_04">
                  <input type="submit" style=" background-color: #1efc94;
                  color: white;
                  border: none;
                  border-radius: 50px;
                  width: 100px;
                  height: 41px;
                  font-size: 14px;" value="Sign In">
                </div>
              </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>