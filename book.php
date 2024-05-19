<?php
    include("dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!--- bootstrap css link --->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!--- font awesome cdn link --->
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!--- sweetalert cdn link --->  
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Book Appointment</title>
  <?php include("userheader.php");?>
</head>

<body>
<div class="banner">
<?php
  
    if (isset($_GET['id'])){
       
        $id=$_GET["id"];

        $sql= "select * from schedule inner join doctor on schedule.docid=doctor.loginid where schedule.scheduleid=$id  order by schedule.scheduledate desc";
        
            $result = mysqli_query($con, $sql);
    
            if($result){
                while($row=mysqli_fetch_assoc($result)){
               $scheduleid = $row['scheduleid'];
               $title = $row['title'];
               $firstname = $row['firstname'];
               $lastname = $row['lastname'];
               $emailid = $row['emailid'];
               $specialist = $row['specialist'];
               $scheduledate=$row['scheduledate'];
               $scheduletime=$row['scheduletime'];
               $docid=$row['docid'];

               $sql2="select * from bookapp where scheduleid=$id";
                $result12= mysqli_query($con,$sql2);
                $apponum=($result12->num_rows)+1;
                
               
               echo '
                   <form action="booking-complete.php" method="post">
                       <input type="hidden" name="scheduleid" value="'.$scheduleid.'" >
                       <input type="hidden" name="apponum" value="'.$apponum.'" >
                       <input type="hidden" name="scheduledate" value="'.$scheduledate.'" >
                       <input type="hidden" name="scheduletime" value="'.$scheduletime.'" >
                       <input type="hidden" name="docid" value="'.$docid.'" >

               ';
                 
                ?>
             <div class="row">
                 <div class="col-lg-6 m-auto">
                 <br>
                 <div class="card bg-dark ">
                 <div class="card-title mt-5" style="background:#c6989d;">
                             <h2 class="text-center py-3 text-dark">Session Details</h2>
                         </div>
                 <div class="card-body"><h4 class="text-center" style="font-family: Times New Roman; font-size: 20px; ">
                             <label class="text-center text-white">Doctor Name : <?php echo $firstname ." ". $lastname?></label><br>
                             <label class="text-center text-white">Doctor EmailID : <?php echo $emailid ?></label><br>
                             <label class="text-center text-white">Specialist : <?php echo $specialist ?></label><br>
                             <label class="text-center text-white">Session Title : <?php echo $title ?></label><br>
                             <label class="text-center text-white">Schedule Date: <?php echo $scheduledate ?></label><br>
                             <label class="text-center text-white">Session Starts : <?php echo $scheduletime ?></label><br>
                             <b><label class="text-center text-white">Consultation:</label></b>
                        <div class="input-group">
                            <input type="text" class="form-control xs-1" name="txtconsult" required />
                        </div>
                 </h4> <?php  
                    }
                   }
               
                              
?>
                       
                           <button class="btn  mt-3" style="background:#c6989d;" name="btnSubmit">Book Appointment</button>
                           <input type="button" class="btn btn-light mt-3" value="Go Back!" onclick="history.back()">
                    
                      

                 
                         
    
        
        </div>
                         
                         </div>
                    
                     </div><br>
                     
    <div class="container">
        <br><br>
        
        <br><br>
    </div>
 
<?php 

} ?>
<br>
</div>
<!--- jquery cdn link --->
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
<!--- bootstrap popper and js link --->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>




<br>
<?php 
    include('footerfile.php');
?>
