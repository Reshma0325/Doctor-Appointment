<?php 
include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Book Appointment</title>
    <!--- font awesome cdn link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--- bootstrap css link --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <!--- sweet alert cdn link --->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body{
            background-image: linear-gradient(rgba(194, 148, 153, 0.580),rgba(194, 148, 153, 0.580)),url(bg.jpg) ; 
            background-repeat: no-repeat; 
            background-attachment: fixed;
            background-size: cover ;
        }
    </style>
</head>
<?php 
include('userheader.php');
?>
<body>
    <br>
<?php 
            $sql="select * from `schedule`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                $scheduleid = $row['scheduleid'];
                $docid = $row['docid'];
                $title = $row['title'];
                $scheduledate = $row['scheduledate'];
                $scheduletime=$row['scheduletime'];
        ?>
    <div class="container">
    
        <div class="row">
            <div class="col-lg-6 m-auto">
                <br>
                 <div class="card bg-dark ">
                    <div class="card-title mt-5" style="background:#c6989d;">
                        <h3 class="text-center py-3 text-dark"><?php echo $title ?></h3>
                    </div>
                    <div class="card-body"><h4 class="text-center" style="font-family: Times New Roman; font-size: 15px; ">
                        <label class="text-center text-white">Doctor Id : <?php echo $docid ?></label><br>
                        <label class="text-center text-white">Schedule Date : <?php echo $scheduledate ?></label><br>
                        <label class="text-center text-white">Starts @ : <?php echo $scheduletime ?> (24 hrs)</label>
                     </h4>
                    </div>
                    <a href="book.php?id=<?php echo $scheduleid ?>" class="text-center"><button class="btn  mt-3" style="background:#c6989d;font-weight: 500; font-size: 15px;padding: 9px 25px;" name="btnBook"><b>Book Now</b></button></a>
                    <br> <br>
                </div>
            </div>
        </div><br>
    </div>
    <?php
           }
        }
        ?>
        
         <br><br><br> <br><br>
           <br><br><br> <br><br>
  <br><br><br><br><br><br> <br><br>
<!--- jquery cdn link --->
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--- bootstrap popper and js link --->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
<?php
include('footerfile.php');
?>
                       



