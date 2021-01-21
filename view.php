<!DOCTYPE html>
<ht>
    <head>
        <title></title>
        <meta charset="utf-8">
	      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" /> 
    </head>
<body>

<div class="container text-uppercase text-center">
<h1 class="font-weight-bold">Student Details</h1>
<hr class="w-25 mx-auto">
</div>
<h4 class="mt-4">Add new record :  <a href="index.php"><button type='submit' class='btn btn-primary font-weight-bold text-uppercase text-white' name='insert' onclick="viewForm()">Add  <i class="fa fa-plus" aria-hidden="true"></i></button></a></h4>

<table class="table table-striped table-hover table-bordered text-center mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Reg number</th>
      <th scope="col">Name</th>
      <th scope="col">View</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <?php 
  

  include 'conn.php';
  
        $select = "SELECT * FROM std";
        $result = mysqli_query($con,$select);
        $sno = 0;
        while($row = mysqli_fetch_array($result))
           {

?>
<tbody>

               <tr>
               <th scope='row'><?php echo $row['sno'];?></th>
               <td><?php echo $row['RegNo']; ?></td> 
               <td><?php echo $row['Name']; ?></td> 

               <!-----Code for button , so that it will perform operation after clicking on that . After clicking , they will perform operation as mentioned file name  using "sno" id------>   
               <td><button class="btn btn-primary  " name='select'><a class="text-white" href="display.php?sno=<?php echo $row['sno'];?>">View <i class="fa fa-eye" aria-hidden="true"></i></a></button></td>  
               <td><button class="btn btn-danger " name='delete' ><a class="text-white" href="delete.php?sno=<?php echo $row['sno'];?>"> Delete <i class="fa fa-times-circle" aria-hidden="true"></i></a></button></td>
               <td><button class="btn btn-success " name='update'><a class="text-white" href="update.php?sno=<?php echo $row['sno'];?>">Update <i class="fa fa-pencil" aria-hidden="true"></i></a></button></td>
               
             </tr>   



<?php
$sno = $sno + 1;
           }

           mysqli_close($con);
?>

  </tbody>
</table>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>