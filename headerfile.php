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
            height: 100vh;
            background-image: linear-gradient(rgba(194, 148, 153, 0.580),rgba(194, 148, 153, 0.580)),url(bg.jpg) ;
            background-size: cover ;
            background-position: center;
            background-color: #d8b7bb;
            background-repeat: no-repeat; 
            background-attachment: fixed;
        }
        .content{
            width: 100%;
            position: absolute;
            top: 60%;
            transform: translateY(-50%);
            text-align: center;
            color: #050505;
        }
        .content h1{
            font-family: "Georgia",serif;
            font-size: 50px;
            margin-top: 25px;
        }
        .content h4{
            font-family: "Georgia",serif;
            font-size: 35px;
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
            padding:11px 10%;
        }
        .nav_links{
            list-style: none;
        }
        .nav_links li{
            display: inline-block;
            padding: 0px 20px;
        }
        .navlinks li a{
            transition: all 0.3s ease 0s;
        }
        .navlinks li a:hover{
            color: #c6989d;
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
    <a class="cta text-light" style="font-size: 28px;"><i class="fa-solid fa-hospital text-light"></i><span>&nbsp;</span><b>Health Care</b></a>
        <nav>
            <ul class="nav_links">
                <li><a href="index.php"><b>Home</b></a></li>
			    <li><a href="contact.php"><b>Contact Us</b></a></li>
                <li><div class="dropdown">
                    <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                    <b> Login</b>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item" href="adminlogin.php">Admin</a>
                            <a class="dropdown-item" href="userregister.php">User</a>
                            <a class="dropdown-item" href="doctorlogin.php">Doctor</a>
                        </li>
                    </ul>
                </div></li>
            </ul>
	    </nav>              
    </header> 
</body>
</html>