<?php
    include("dbcon.php");
    session_start();
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
  <title>Doctor Login</title>
  <?php include("headerfile.php");?>
</head>
<body>
    <div class="banner">
<br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 m-auto">
                <div class="card bg-dark ">
                    <div class="card-title mt-5" style="background:#c6989d;">
                        <h3 class="text-center py-2">Doctor Login</h3>
                    </div>
                    <div class="card-body">
                        <form method="post">
                        <label class="text-center text-white">Login ID:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-user text-light"></i></span>
                            </div>
                            <input type="text" class="form-control mb-3"   name="txtLoginId" required>
                        </div>
                        <label class="text-center text-white">Password:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark"><i class="fa-solid fa-key text-light"></i></span>
                            </div>
                            <input type="password" class="form-control mb-3"  name="txtPassword" required>
                        </div>
                            <button class="btn  mt-3" style="background:#c6989d;" name="btnLogin">Login</button>
                            <input type="button" class="btn btn-light mt-3" value="Go Back!" onclick="history.back()">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--- jquery cdn link --->
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
<!--- bootstrap popper and js link --->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>

<?php
    if (isset($_POST['btnLogin'])){
       
            $loginid = $_POST['txtLoginId'];
            $password = $_POST['txtPassword'];
            $query="select * from  doctor where loginid='$loginid' and password=md5('$password')";
        $result=mysqli_query($con,$query);
        if(mysqli_fetch_assoc($result))
        {
            $_SESSION['User']=$_POST['txtLoginId'];
            
            echo '<script type="text/javascript"> location.replace("doctorindex.php");</script>'; 
        }
        else
        { ?>
            <script>
                swal({
                title: "error!",
                text: "Invalid Email Id and Password",
                icon: "error",
            });
            </script>
            <?php }
       

    }
?>
<?php 
    include('footerfile.php');
?>