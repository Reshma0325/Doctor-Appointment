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
   <title>Delete Schedule</title>
  <?php include("adminheader.php");?>
  <?php
	if(isset($_GET['deleteid'])){
        $scheduleid=$_GET['deleteid'];
        $sql="delete from schedule where scheduleid='$scheduleid'";
        $result=mysqli_query($con,$sql);
        if($result){?>
            <script>
                swal({
                title: "Success",
                text: "Deleted successfully !",
                icon: "success",
            })
            .then(function() {
            window.location = "schedule.php";
            });
            </script>
            <?php }
        else{?>
            <script>
                swal({
                title: "Error !",
                text: "Delete Failed",
                icon: "error",
            }).then(function() {
            window.location = "schedule.php";
            });
            </script> 
            <?php }
    }
    ?>
  