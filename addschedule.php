<?php
    include("dbcon.php");
    $query ="SELECT loginid FROM doctor";
    $result = $con->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
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
  <title>Add Schedule</title>
  <?php include("adminheader.php");?>
</head>
<body>
<div class="banner">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 m-auto">
                <div class="card bg-dark ">
                    <div class="card-title mt-5" style="background:#c6989d;">
                        <h3 class="text-center py-2">Add Schedule</h3>
                    </div>
                    <div class="card-body">
                        <form method="post">
                        <label class="text-center text-white">Doctor Id:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-regular fa-id-badge text-light"></i></span>
                            </div>
                            <select class="form-control mb-3" name="loginid">
                            <option>Select Doctor ID</option>
                            <?php 
                                foreach ($options as $option) {
                                ?>
                                    <option><?php echo $option['loginid']; ?> </option>
                                    <?php 
                                    }
                                ?>
                            </select>
                        </div>
                        <label class="text-center text-white">Title:</Title></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-bars text-light"></i></span>
                            </div>
                            <input type="text" class="form-control mb-3" name="txttitle" required />
                        </div>
                        <label class="text-center text-white">Schedule Date:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-calendar-days text-light"></i></span>
                            </div>
                            <input type="date" class="form-control mb-3" name="txtscheduledate" required />
                        </div>
                        <label class="text-center text-white">Schedule Time:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-clock text-light"></i></span>
                            </div>
                            <input type="time" class="form-control mb-3" name="txtscheduletime" required />
                        </div>
                        <label class="text-center text-white">No of Patients:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-list-ol text-light"></i></span>
                            </div>
                            <input type="number" class="form-control mb-3" name="txtnop" required />
                        </div>
                        
                            <button class="btn  mt-3" style="background:#c6989d;" name="btnSubmit">Add Schedule</button>
                            <input type="button" class="btn btn-light mt-3" value="Go Back!" onclick="history.back()">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<!--- jquery cdn link --->
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
<!--- bootstrap popper and js link --->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>
<?php
    if (isset($_POST['btnSubmit'])){

        $docid = $_POST['loginid'];
        $title = $_POST['txttitle'];
        $scheduledate = $_POST['txtscheduledate'];
        $scheduletime=$_POST['txtscheduletime'];
        $nop = $_POST['txtnop'];
    
                $query = "insert into schedule (scheduleid, docid, title, scheduledate, scheduletime, nop) values('','$docid', '$title', '$scheduledate', '$scheduletime','$nop')";
                $result = mysqli_query($con, $query);
    
                if ($result) { ?>
                    <script>
                        swal({
                        title: "Success",
                        text: "Added Successfully !",
                        icon: "success",
                    }).then(function() {
                window.location = "schedule.php";
                });
                    </script>
                    <?php }
            
            else { ?>
                <script>
                    swal({
                    title: "Alert!",
                    text: "Added Failed!",
                    icon: "error",
                }).then(function() {
                window.location = "schedule.php";
                });
                </script>
                <?php }

    }
?>
<?php 
    include('footerfile.php');
?>
