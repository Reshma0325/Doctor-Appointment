<?php
    include("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <!--- sweetalert cdn link --->  
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background:#d8b7bb;">
                 <br><br>                 
                 <table class="table"  id="appointmenttable">
      <thead class="table-dark">
      <tr>
        <th scope="col">Patient Id</th>
        <th scope="col">Appointment Number</th>
        <th scope="col">Appointment Date</th>
        <th scope="col">Appointment Time</th>
        <th scope="col">Consultation</th>
        <th scope="col">View Appointment</th>
      </tr>
      </thead>
      <tbody>    
        <?Php 

    
         $sql="select * from `bookapp` where bookapp.docid ='$user'";
   
$result = mysqli_query($con,$sql);
if($result){
        while($row=mysqli_fetch_array($result)){
            $appoid = $row['appoid'];
            $loginid = $row['pid'];
            $apponum = $row['apponum'];
            $docid = $row['docid'];
            $appodate=$row['appodate'];
            $appotime=$row['appotime']; 
            $consultation=$row['consultation']; ?>
            <tr>
            <th scope="row"><?php echo $loginid ?></th>
            <td><?php echo $apponum ?></td>
            <td><?php echo $appodate ?></td>
            <td><?php echo $appotime ?></td> 
            <td><?php echo $consultation ?></td> 
            <td>
     <a href="viewmyappo.php?viewid=<?php echo $appoid ?>" class="edit-btn" title="View appointment"><i class="fas fa-eye text-dark"></i></a>
      </td>                       
          </tr>
          
         <?Php 
        }
        
}
    
    ?>
     
  </tbody>
</table>


<!--- jquery cdn link --->
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--- bootstrap popper and js link --->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
<br><br>
   