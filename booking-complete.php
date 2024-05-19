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
   <?php include("userheader.php");?>
                 <br><br> 
    <?php
    $userid=$_SESSION['User'];
        if(isset($_POST["btnSubmit"])){
            $apponum=$_POST["apponum"];
            $scheduleid=$_POST["scheduleid"];
            $appodate=$_POST["scheduledate"];
            $appotime=$_POST["scheduletime"];
            $docid=$_POST["docid"];
            $consultation=$_POST["txtconsult"];
            $sql="insert into bookapp(appoid,pid,apponum,scheduleid,appodate,docid,consultation,appotime) values ('','$userid',$apponum,$scheduleid,'$appodate','$docid','$consultation','$appotime')";
            $result= mysqli_query($con,$sql);
            if($result)
            { ?>
                <script>
                    swal({
                    title: "Your appointment ID",
                    text: "<?php echo $apponum ?>",
                    icon: "success",
                })
                .then(function() {
                window.location = "bookapp.php";
                });
                </script>
                <?php }
                
            else
            { ?>
                <script>
                    swal({
                    title: "Alert !",
                    text: "booking Failed",
                    icon: "error",
                }).then(function() {
                window.location = "bookapp.php";
                });
                </script> 
                <?php } 
            //echo $apponom;
           // header("location: appointment.php?action=booking-added&id=".$apponum."&titleget=none");

        }

 ?>