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

  <title>User Registration</title>
  <?php include("headerfile.php");?>
</head>
<body>
<div class="banner" style=" height: 100%;">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 m-auto">
                <div class="card bg-dark ">
                    <div class="card-title mt-5" style="background:#c6989d;">
                        <h3 class="text-center py-1">User Registration</h3>
                    </div>
                    <div class="card-body">
                        <form method="post">
                        <label class="text-center text-white">FirstName:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-user text-light"></i></span>
                            </div>
                            <input type="text" class="form-control mb-3"   name="txtFirstName" required>
                        </div>
                        <label class="text-center text-white">LastName:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-sharp fa-solid fa-user text-light"></i></span>
                            </div>
                            <input type="text" class="form-control mb-3"   name="txtLastName" required>
                        </div>
                        <label class="text-center text-white">Gender:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-venus-mars text-light"></i></span> &nbsp;&nbsp;
                            </div>
                            <input type="radio" name="rdoGender" value="Male"/>&nbsp;<span class="text-light"> Male</span>&nbsp;&nbsp;
                            <input type="radio" name="rdoGender" value="Female" />&nbsp;<span class="text-light"> Female</span>&nbsp;&nbsp;
                            <input type="radio" name="rdoGender" value="Transgender" />&nbsp; <span class="text-light">Transgender</span>&nbsp;
                        </div>
                        <label class="text-center text-white">Mobile Number:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-phone text-light"></i></span>
                            </div>
                            <input type="text" class="form-control mb-3" name="txtMobile" required />
                        </div>
                        <label class="text-center text-white">Email Id:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-envelope text-light"></i></span>
                            </div>
                            <input type="email" class="form-control mb-3" name="txtEmailID" required />
                        </div>
                        <label class="text-center text-white">Login Id:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-user text-light"></i></span>
                            </div>
                            <input type="text" class="form-control mb-3" name="txtLoginID" required />
                        </div>
                        <label class="text-center text-white">Password:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-key text-light"></i></span>
                            </div>
                            <input type="password" class="form-control mb-3" name="txtPassword" required />
                        </div>
                        <label class="text-center text-white">Confirm Password:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-key text-light"></i></span>
                            </div>
                            <input type="password" class="form-control mb-3" name="txtConfirmPassword" required />
                        </div>
                            <button class="btn  mt-3" style="background:#c6989d;" name="btnRegister">Register</button>
                            <input type="button" class="btn btn-light mt-3" value="Go Back!" onclick="history.back()">
                            <a href="userlogin.php"><button type="button" class="btn text-dark mt-3" style="background:#fe7f9c;">Already Registered</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
<!--- jquery cdn link --->
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
<!--- bootstrap popper and js link --->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</div> 
</body>
</html>

<?php
   if (isset($_POST['btnRegister'])) {
    $firstname = $_POST['txtFirstName'];
    $lastname = $_POST['txtLastName'];
    $gender = $_POST['rdoGender'];
    $mobile = $_POST['txtMobile'];
    $emailid = $_POST['txtEmailID'];
    $loginid = $_POST['txtLoginID'];
    $password = $_POST['txtPassword'];
    $confirmpassword = $_POST['txtConfirmPassword'];

    if ($password == $confirmpassword) {
        $query = "select * from users where pid='$loginid'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) == 0) {
            $query = "insert into users (firstname, lastname, gender, mobile, emailid, pid, password) values('$firstname', '$lastname', '$gender', '$mobile', '$emailid', '$loginid', '$password')";
            mysqli_query($con, $query);

            if (mysqli_affected_rows($con) == 1) { ?>
                <script>
                    swal({
                    title: "Success",
                    text: "Registered Successfully !, Now you can signup",
                    icon: "success",
                }).then(function() {
        window.location = "userlogin.php";
        });
                </script>
                <?php }
        }
        else { ?>
            <script>
                swal({
                title: "Alert!",
                text: "Login ID already exists!",
                icon: "warning",
            });
            </script>
            <?php }
    }
    else {  ?>
        <script>
            swal({
            title: "Alert!",
            text: "Password and confirm password does not match!",
            icon: "error",
        });
        </script>
        <?php  }
}
?>

<?php 
    include('footerfile.php');
?>