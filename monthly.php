<?php 
include('dbcon.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Index Page</title>
    <!--- font awesome cdn link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--- bootstrap css link --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <!--- sweet alert cdn link --->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
<div class="banner">
<br>
    <div class="container">
        
<table class="table"  id="appointmenttable">
      <thead class="table-dark">
      <tr>
      <th scope="col">Appointment Id</th>
        <th scope="col">Patient Id</th>
        <th scope="col">Appointment Number</th>
        <th scope="col">Doctor ID</th>
        <th scope="col">Appointment Date</th>
        <th scope="col">Appointment Time</th>
        <th scope="col">Consultation </th>
      </tr>
      </thead>
      <tbody>  
      <?php 

if(isset($_POST['btnview'])){
      
      $date1=$_POST['date1'];
      $date2=$_POST['date2'];
      $sql="select * from `bookapp` where bookapp.appodate between '$date1' and '$date2'";
       $result = mysqli_query($con,$sql);

       if($result){
   while($row=mysqli_fetch_assoc($result)){
    $appoid = $row['appoid'];
    $loginid = $row['pid'];
    $apponum = $row['apponum'];
    $docid = $row['docid'];
    $appodate=$row['appodate'];
    $appotime=$row['appotime'];
    $consultation=$row['consultation']; ?>
    <tr>
    <th scope="row"><?php echo $appoid ?></th>
    <td><?php echo $loginid ?></td>
    <td><?php echo $apponum ?></td>
    <td><?php echo $docid ?></td>
    <td><?php echo $appodate ?></td>
    <td><?php echo $appotime ?></td>
    <td><?php echo $consultation ?></td>
    <?php
   }
   

}
}
    
?>
 </tbody>
</table>  
    <div class="row mb-3">
   <div class="col-5">
       <br><br><br>
       <input type="button" class="btn btn-dark " value="Go Back!" onclick="history.back()">
       <button type="button" class="btn btn-dark"  onClick="window.print()">
           print
       </button>
   </div>
</div>   
  
    </div>
    <br><br><br>
    <br><br><br>
    <br><br><br> 
</div>
</body>
</html>


