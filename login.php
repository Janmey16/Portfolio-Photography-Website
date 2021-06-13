<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAJ Photography</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <style>
        /*set border to the form*/
        body {
            background-color: rgb(211, 211, 211);
        }


        form {
            border: 3px solid rgb(91, 196, 31);
            border-radius: 15%;
            width: 50%;
            margin: auto;

        }

        .form-group {
            text-align: center;
        }

        /*assign full width inputs*/

        input[type=text],
        input[type=password] {

            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 5px solid #ccc;
            box-sizing: border-box;
        }

        /*set a style for the buttons*/

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* set a hover effect for the button*/

        button:hover {
            opacity: 0.8;
        }

        /*set extra style for the cancel button*/

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /*centre the display image inside the container*/

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        /*set image properties*/

        img.avatar {
            width: 40%;
            border-radius: 50%;
            margin: auto;
        }

        /*set padding to the container*/

        .container {
            padding: 16px;
        }

        /*set the forgot password text*/

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /*set styles for span and cancel button on small screens*/

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="">
            <img src="images/glf.png" alt="logo" height=50vh width="50px">
        </a>
        <a class="navbar-brand" href="">HAJ Photography</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contact</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="py-4">
        <h1 class="text-center"> <kbd>Login here</kbd></h1>
    </div>

    <form class="my-4 bg-light" action="contactinfo.php" method="POST">
        <div class="imgcontainer">
            <img src="images/glf.png" alt="logo" height=50vh width="50px"><br><br>
            <h1> Welcome to HAJ Productions</h1>
        </div>

        <div class="container">
            <div class="form-group">
                <label> Username &nbsp;&nbsp;</label>
                <input type="text" name="user" autocomplete="off" class="form-control" required>
            </div>
            <div class="form-group">
                <label> Password &nbsp;&nbsp;</label>
                <input type="password" name="password" autocomplete="off" class="form-control" required>
            </div>

            <div class="form-group" style="text-align: center;">
                <input type="checkbox" checked="checked"> Remember me &nbsp&nbsp&nbsp;
                <button type="submit" style="border-radius: 50%; width: 30%;">
                    <h2>Login</h2>
                </button>
            </div>

        </div>

        <br>
    </form>
    <div class="container-fluid" style="background-color:#f1f1f1; margin: auto; border-radius: 20%; border:3px solid rgb(91, 196, 31); margin: auto; width:25%; text-align: center; padding-top: 10px;">
        <p>Not registered yet? &nbsp;&nbsp;&nbsp; <a href="register.php"> Register Now!! </a></p>

    </div>


    <br>
    <br>

    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md- item ">
                        <h3>Domains</h3>
                        <ul>
                            <li><a href="#">Natural</a></li>
                            <li><a href="#">Portrait</a></li>
                            <li><a href="#">Wildlife</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="about.php">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text mb-auto">
                        <h3>HAJ Photography</h3>
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consequuntur praesentium, nobis nemo impedit necessitatibus, explicabo, laudantium accusamus amet alias voluptate nisi excepturi. Alias, sapiente?</h6>
                    </div>
                    <div class="col item social"><a href="https://www.facebook.com/" target="_blank"><i class="icon ion-social-facebook"></i></a><a href="https://www.twitter.com" target="_blank"><i class="icon ion-social-twitter"></i></a><a href="https://www.snapchat.com" target="_blank"><i class="icon ion-social-snapchat" target="_blank"></i></a><a href="https://www.instagram.com" target="_blank"><i class="icon ion-social-instagram"></i></a></div>
                </div>

                <p class="copyright">HAJ Productions © 2021</p>
            </div>
        </footer>
    </div>

</body>

</html>