<?php 
include 'conn.php';

$sno = $_REQUEST['sno'];  # id which we have provide in view.php file

$delete = "DELETE FROM std WHERE sno = $sno ";

mysqli_query($con ,$delete);



# this is used to display the following operation within that particular file which is view.php
header('location:view.php');

?>



























<!--------------------------------if(isset($_POST["view"]))
    {
        $select = "SELECT * FROM reg";
        $result = $con->query($select);
        $sno = 0;
        while($row = mysqli_fetch_array($result))
           {
               echo "<tr>
               <th scope='row'>".$row['sno']."</th>
               <td>".$row['Username']."</td>
               <td>".$row['Name']."</td>
               <td>".$row['Email']."</td>
             </tr>";            
	          
            }
    }



    elseif(isset($_POST["update"])){
    $upd = "UPDATE reg SET password ='$name' WHERE Name = '$name'";
    if($con->query($upd)==True)
    {
       $update = true;
       echo "Table updated";
    }
    else{
        echo "Error".$con->error;
    }

}

elseif(isset($_POST["delete"])){
    
}
------------------------->