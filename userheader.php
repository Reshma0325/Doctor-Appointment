<?php
    session_start();
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> <!--- font awesome cdn link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Index Page</title>
    <style>
        *{
            box-sizing:content-box;
            margin: 0;
            padding: 0;
            
        }
        .banner{
            width: 100% ;
            height: 100%;
            background-image: linear-gradient(rgba(194, 148, 153, 0.580),rgba(194, 148, 153, 0.580)),url(bg.jpg) ;
            background-size: cover ;
            background-position: center;
            background-repeat: no-repeat; 
            background-attachment: fixed;
            background-color: #d8b7bb;
        }
        .content{
            width: 100%;
            position: absolute;
            top: 20%;
            transform: translateY(-50%);
            text-align: center;
            color: #050505;
        }
        .content h1{
            font-family: "Georgia",serif;
            font-size: 50px;
            margin-top: 20px;
        }
        .table{
            font-family: "Times New Roman",serif;
            font-size: 15px;
        }
        .content h3{
            font-family: "Georgia",serif;
            font-size: 20px;
            margin-top: 20px;
        }
        .content h4{
            font-family: "Georgia",serif;
            font-size: 40px;
            margin-top: 20px;
        }
        .content p{
            font-family: "Georgia",serif;
            margin: 20px auto;
            font-weight: 100;
            font-size: 20px;
            line-height: 25px;
        }
        li,a{
            font-family: "Georgia",serif;
            font-weight: 500;
            font-size: 19px;
            color:#c6989d;
            text-decoration: none;
        }
        
        
        button{
            font-family: "Georgia",serif;
            font-weight: 500;
            font-size: 15px;
            color:#000000;
            text-decoration: none;
        }
        header{
            display: flex;
            background-color: #010101;
            font-size: 19px;
            font-color:#c6989d;
            justify-content: space-between;
            align-items: center;
            padding:11px 1%;
        }
        .nav_links{
            list-style: none;
        }
        .nav_links li{
            display: inline-block;
            padding: 0px 15px;
        }
        .navlinks li a{
            transition: all 0.3s ease 0s;
        }
        .navlinks li a:hover{
            color: #0088a9;
        }
        button{
            padding: 9px 25px;
            background-color:#c6989d;
            border:none;
            border-radius: 50px;
            cursor:pointer;
            transition: all 0.3s ease 0s;
        }
        button:hover{
            background-color: #c6989d;
        }
        .dropdown-menu,.dropdown-submenu{
            background-color:#c6989d;
        }
        
    </style>
</head>
<body>
    <header>
    <a class="cta text-light" style="font-size: 27px;"><i class="fa-solid fa-hospital text-light"></i><span>&nbsp;</span><b>Health Care</b></a>
	    <nav>
            <ul class="nav_links">
                <li><a href="userindex.php"><b><u class="text-light"><?php  echo ' Welcome ' . $_SESSION['User'].'!'; ?> </u></b></a></li>
			    <li><a href="bookapp.php"><b>Book Appointment</b></a></li>
			    <li><a href="myappointment.php"><b>My Appointments</b></a></li>
                <li><a href="searchdoctor.php"><b>Search Doctor</b></a></li>
            </ul>
	    </nav>     
        <a class="cta text-light" href="userlogout.php"><i class="fa-solid fa-sign-out text-light"></i>
        <b>Logout</b>
        </a>        
    </header>
</body>
</html>

