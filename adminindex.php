<?php 
include 'dbcon.php';

$sql="SELECT COUNT(*) as count FROM doctor";
$result=mysqli_query($con,$sql);
$doctor=mysqli_fetch_array($result);
$totalCount = array_shift($doctor);

$sql2="SELECT COUNT(*) as count FROM users";
$result2=mysqli_query($con,$sql2);
$patient=mysqli_fetch_array($result2);
$totalCount2 = array_shift($patient);

$sql3="SELECT COUNT(*) as count FROM bookapp";
$result3=mysqli_query($con,$sql3);
$appointment=mysqli_fetch_array($result3);
$totalCount3 = array_shift($appointment);

$sql4="SELECT COUNT(*) as count FROM schedule";
$result4=mysqli_query($con,$sql4);
$schedule=mysqli_fetch_array($result4);
$totalCount4 = array_shift($schedule);

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Index Page</title>
    <!--- font awesome cdn link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--- bootstrap css link --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--- sweet alert cdn link --->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<?php 
include('adminheader.php');
?>
<body>
<div class="banner">
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-3" >
                <div class="card text-center" style="background:#000000; border: 2px solid #c6989d; border-radius: 45px;">
                    <div class="card-body text-light" style="border: 2px solid #c6989d; border-radius: 45px;">
                        <label class="text-center" style="font-family:Times New Roman; font-size:30px; color:#c6989d;"><b>Doctors</b> &nbsp; <i class="fa-solid fa-user-doctor text-light"></i></label>
                        <h1 style="font-family:Times New Roman; font-size:50px;"><?php echo $totalCount ;?></h1>    
                    </div>
                </div>
            </div>
            <div class="col-xs-3" >
                <div class="card text-center" style="background:#000000; border: 2px solid #c6989d; border-radius: 45px;">
                    <div class="card-body text-light" style="border: 2px solid #c6989d; border-radius: 45px;">
                        <label class="text-center" style="font-family:Times New Roman; font-size:30px; color:#c6989d;"><b>Patients</b> &nbsp; <i class="fa-solid fa-hospital-user  text-light"></i></label>
                        <h1 style="font-family:Times New Roman; font-size:50px;"><?php echo $totalCount2 ;?></h1>    
                    </div>
                </div>
            </div>
            <div class="col-xs-3" >
                <div class="card text-center" style="background:#000000; border: 2px solid #c6989d; border-radius: 45px;">
                    <div class="card-body text-light" style="border: 2px solid #c6989d; border-radius: 45px;">
                        <label class="text-center" style="font-family:Times New Roman; font-size:30px; color:#c6989d;"><b>Booking</b> &nbsp; <i class="fa-solid fa-notes-medical text-light"></i></label>
                        <h1 style="font-family:Times New Roman; font-size:50px;"><?php echo $totalCount3 ;?></h1>    
                    </div>
                </div>
            </div>
            <div class="col-xs-3" >
                <div class="card text-center" style="background:#000000; border: 2px solid #c6989d; border-radius: 45px;">
                    <div class="card-body text-light" style="border: 2px solid #c6989d; border-radius: 45px;">
                        <label class="text-center" style="font-family:Times New Roman; font-size:30px; color:#c6989d;"><b>Schedule</b> &nbsp; <i class="fa-solid fa-star-of-life text-light"></i></label>
                        <h1 style="font-family:Times New Roman; font-size:50px;"><?php echo $totalCount4 ;?></h1>    
                    </div>
                </div>
            </div>
        </div>
        <br><br>
       
    
        <!-----Date to Date--->
        <div class="modal fade" id="monthlymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Monthly Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="monthly.php" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label>From Date:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark"><i class="fa-solid fa-calendar-days text-light"></i></span>
                        </div>
                        <input type="date" class="form-control" placeholder="Enter From Date" autocomplete="off" required="required" id="date1" name="date1">
                    </div>
                </div>
                <div class="form-group">
                    <label>To Date:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark"><i class="fa-solid fa-calendar-days text-light"></i></span>
                        </div>
                        <input type="date" class="form-control" placeholder="Enter To Date" autocomplete="off" required="required" id="date2" name="date2">
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-dark" name="btnview">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
            </div>
        </div>
        </div>

        <!-- Modal -->
        <!-----Date--->
        <div class="modal fade" id="dailymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Daily Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="daily.php" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label>Enter Date:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-dark"><i class="fa-solid fa-calendar-days text-light"></i></span>
                        </div>
                        <input type="date" class="form-control" placeholder="Enter Date" autocomplete="off" required="required" id="date" name="date">
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-dark" name="btnview">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
            </div>
        </div>
        </div>


        <!-- Modal -->
        <!-----Doctor--->
        <div class="modal fade" id="doctorreport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Doctor Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="doctorreport.php" method="post">
            <div class="modal-body">
                <div class="form-group">
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
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-dark" name="btnview">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </form>
            </div>
        </div>
        </div>

        
        <div class="row">
            <div class="col-xs-3">
                <br>
                <!-- Button trigger modal -->
                <button type="button" class="btn text-center" data-toggle="modal" data-target="#monthlymodal" style=" background:#000000; padding:10px 15px; font-family:Times New Roman; font-size:20px; color:#c6989d; border: 2px solid #c6989d; border-radius: 45px;">
                <b> Monthly Report</b>
                </button>
            </div>
            <div class="col-xs-3">
                <br>
                <!-- Button trigger modal -->
                <button type="button" class="btn text-center" data-toggle="modal" data-target="#dailymodal" style=" background:#000000; padding:10px 15px; font-family:Times New Roman; font-size:20px; color:#c6989d; border: 2px solid #c6989d; border-radius: 45px;">
                <b> Daily Report</b>
                </button>
            </div>   
            <div class="col-xs-3">
                <br>
                <!-- Button trigger modal -->
                <button type="button" class="btn text-center" data-toggle="modal" data-target="#doctorreport" style=" background:#000000; padding:10px 15px; font-family:Times New Roman; font-size:20px; color:#c6989d; border: 2px solid #c6989d; border-radius: 45px;">
                <b> Doctor Report</b>
                </button>
            </div>   
        </div> 
    </div>
    <br> <br> <br> <br><br><br>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br>
    <br><br><br>
</div>
</body>
</html>

<?php
include('footerfile.php');
?>