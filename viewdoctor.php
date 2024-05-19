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
   <title>View Doctor</title>
  <?php include("adminheader.php");?>
  <body>
<div class="banner">
<br>
  <?php
	if(isset($_GET['viewid'])){
        $loginid=$_GET['viewid'];
        $sql="select * from `doctor` where loginid='$loginid'";
          $result=mysqli_query($con,$sql);
          if($result){
            while($row=mysqli_fetch_assoc($result)){
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $gender = $row['gender'];
            $mobile = $row['mobile'];
            $specialist=$row['specialist'];
            $emailid = $row['emailid'];
            $loginid = $row['loginid']; ?>
           <div class="container">
           <div class="row">
               <div class="col-md-7 m-auto">
               <div class="card bg-dark ">
               <div class="card-title mt-5" style="background:#c6989d;">
                           <h2 class="text-center py-2">View Doctor</h2>
                       </div>
               <div class="card-body"><h4 class="text-center" style="font-family: Times New Roman; font-size: 20px; ">
                            <label class="text-center text-white">First Name : <?php echo $firstname ?></label><br>
                           <label class="text-center text-white">Last Name : <?php echo $lastname ?></label><br>
                           <label class="text-center text-white">Gender : <?php echo $gender ?></label><br>
                           <label class="text-center text-white">Mobile : <?php echo $mobile ?></label><br>
                           <label class="text-center text-white">Specialist : <?php echo $specialist ?></label><br>
                           <label class="text-center text-white">Email Id : <?php echo $emailid ?></label><br>
                           <label class="text-center text-white">Doctor Id : <?php echo $loginid ?></label>
               </h4>
                </div>
                <a class="text-center">
        <input type="button" class="btn btn-light mt-3" value="Go Back!" onclick="history.back()">     
    </a>
                <br>
               </div>
           </div>
           </div>
           <?php
              }
           }
        }
           ?>
            
     </div>
     <br>
    </div>
    </div>    
</div>
</body>
</html>

<?php
include('footerfile.php');
?>
      
  