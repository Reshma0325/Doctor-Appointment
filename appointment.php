<?php 
include('dbcon.php');
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
    <!--- sweet alert cdn link --->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<?php 
include('adminheader.php');
?>
<body>
<div class="banner">
<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
            <form method="get">
                <div class="input-group">
                    <div class="form-outline">
                        <input type="search" name="search" placeholder="Enter Appointment Id" class="form-control" style="padding: 25px; width: 450px; font-size:18px;"/>
                    </div>
                    <button type="submit">
                    <i class="fas fa-search"></i>
                    </button>
                </div>
                <br> 
            </form>
        </div>
    </div>
<?php 
include('appotable.php');
?>

    
    <br><br><br>
    <br><br><br>
    <br><br><br> 
    <br><br><br> 
    <br><br><br> 
    <br><br><br> 
</div>
</body>
</html>

<?php 
    include('footerfile.php');
?>
