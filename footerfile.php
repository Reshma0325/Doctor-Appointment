<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--- font awesome cdn link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Footerfile</title>
    <style>
        *{
            box-sizing:border-box;
            margin: 0;
            padding: 0;
            
        }
        footer{
            background-color: #010101;
        }
        .footerContainer{
            width: 100%;
            padding: 8px 10px 10px;
            
        }
        .socialIcons{
            display: flex;
            justify-content: center;
        }
        .socialIcons a{
            text-decoration: none;
            padding: 4px;
            background-color:#c6989d;
            margin: 5px;
            border-radius: 50%;
        }
        .socialIcons a i{
            font-size: 1.5em;
            color: black;
            opacity: 0.9;
        }
        .socialIcons a:hover{
            background-color: white;
            transition: 0.5s;
        }
        .socialIcons a:hover i{
            color: black;
            transition: 0.5s;
        }
       
        
    </style>
</head>
<body>
    <footer>
    	<div class="footerContainer"> 
            <div class="socialIcons">
                <a href=""><i class="fa-brands fa-facebook"></i></a>&nbsp;
                &nbsp;<a href=""><i class="fa-brands fa-instagram"></i></a>&nbsp;
                &nbsp;<a href=""><i class="fa-brands fa-twitter"></i></a>&nbsp;
                &nbsp;<a href=""><i class="fa-brands fa-google-plus"></i></a>&nbsp;
                &nbsp;<a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>           
    </footer>
</body>
</html>