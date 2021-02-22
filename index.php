<?php

# including conn.php file , so that we do not havr to write connection code again & again 
include 'conn.php';


#creating Insert query 

if(isset($_POST['insert'])){
  
  $regno = $_POST['regno'];
  $name = $_POST['name'];
  $dob = $_POST['dob'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $add = "INSERT INTO std (RegNo , Name , Dob , Mobile , Email , Address) VALUES('$regno','$name','$dob','$contact','$email','$address')";
  if($con->query($add)==True)
  {
     header('location:view.php');
     
  }
  else{
      echo "Error".$con->error;
  }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
	      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" /> 
    </head>
<body>
    <section class="section">
        <div class="container text-uppercase text-center">
            <h1 class="font-weight-bold">Student Form  <i class="fa fa-user-circle" aria-hidden="true"></i></h1>
            <hr class="w-25 mx-auto">
        </div>
    
        <div class="container font-weight-bold">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">
                <form method="POST">
                  <div class="form-group">
                    <label for="regno">Registration No :</label>
                    <input type="text" class="form-control" placeholder="Enter Your Registration No..." id="regno" name="regno"  autocomplete="off">
                    
                  </div>

                  <div class="form-group">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" placeholder="Enter Your Name..." id="name"  name="name" autocomplete="off">
                    
                  </div>


                  <div class="form-group"> 
                    <label for="dob" >DOB :</label>
                    <input type="date" class="form-control" placeholder="..." id="dob" name="dob" autocomplete="off">
                    
                  </div>
                  <div class="form-group"> 
                    <label for="contact">Contact :</label>
                    <input type="number" class="form-control" placeholder="Enter Your Contact no..." id="contact" name="contact" autocomplete="off">
                    
                  </div>

                  <div class="form-group"> 
                    <label for="address">Address :</label>
                    <textarea class="form-control" placeholder="Enter Your Address..." id="address" name="address" autocomplete="off"></textarea>
                    
                  </div>

                  <div class="form-group"> 
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" placeholder="Enter Your Email..." id="email" name="email" autocomplete="off">
                    
                  </div>
                   
                  <div class=" d-flex justify-content-around mt-3">
                  <button type="submit" class="btn btn-primary font-weight-bold text-uppercase text-white" name="insert">Submit <i class="fa fa-check-circle" aria-hidden="true"></i></button>
                  
                  </div>
                </form>
              </div>
            </div>
        </div>    
    </section>

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>