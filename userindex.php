<?php 
include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>User Page</title>
    <!--- font awesome cdn link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--- bootstrap css link --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <!--- sweet alert cdn link --->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<?php 
include('userheader.php');
?>
<body>
<div class="banner">
<br><br>
    <?php 
     $id=$_SESSION['User'];
        $sql="select * from `users` where pid ='".$_SESSION['User']."'";
       $result=mysqli_query($con,$sql);
       if($result){
           while($row=mysqli_fetch_assoc($result)){
            $firstname = $row['firstname'];
          $lastname = $row['lastname'];
          $gender = $row['gender'];
          $mobile = $row['mobile'];
          $emailid=$row['emailid'];
          $loginid=$row['pid'];
           ?>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
            <br>
            <div class="card bg-dark ">
            <div class="card-title mt-5" style="background:#c6989d;">
                        <h2 class="text-center py-3">My Details</h2>
                    </div>
            <div class="card-body"><h4 class="text-center" style="font-family: Times New Roman; font-size: 20px; ">
                        <label class="text-center text-white">First Name : <?php echo $firstname ?></label><br>
                        <label class="text-center text-white">Last Name : <?php echo $lastname ?></label><br>
                        <label class="text-center text-white">Gender : <?php echo $gender ?></label><br>
                        <label class="text-center text-white">Mobile Number : <?php echo $mobile ?></label><br>
                        <label class="text-center text-white">Email Id : <?php echo $emailid ?></label><br>
                        <label class="text-center text-white">User Id: <?php echo $loginid ?></label>
            </h4>
                    </div>
                      <a href="editpatient.php?updateid=<?php echo $id?>" class="text-center"><button class="btn  mt-3" style="background:#c6989d;font-weight: 500;
            font-size: 20px;padding: 8px 25px;"><b>Edit</b></button></a>
                    <br> <br>
            </div>
        </div>
        </div><br>
        <?php
           }
        }
        ?>
         <br><br><br> 
  </div>
  

  
    </div>
</body>
</html>

<?php
include('footerfile.php');
?>
                       



