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
<h1 class="font-weight-bold">Full Details</h1>
<hr class="w-25 mx-auto">
</div>

<a href="view.php"><button type='submit' class='btn ml-5 mt-4 btn-primary font-weight-bold text-uppercase text-white' onclick="viewForm()"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</button></a>

<table class="table table-striped table-hover table-bordered text-center mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Reg number</th>
      <th scope="col">Name</th>
      <th scope="col">Dob</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
  
    </tr>
  </thead>
  <?php 
  

  include 'conn.php';
        $sno = $_REQUEST['sno'];  # id which we have provide in view.php file
        $select = "SELECT * FROM std WHERE sno = '$sno'"; # query to display record
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
               <td><?php echo $row['Dob']; ?></td>  
               <td><?php echo $row['Mobile']; ?></td>  
               <td><?php echo $row['Address']; ?></td> 
               <td><?php echo $row['Email']; ?></td>   
               
             </tr>   



<?php
$sno = $sno + 1;
           }
?>

  </tbody>
</table>