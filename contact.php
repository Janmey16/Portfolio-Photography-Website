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
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
</head>

<body class="body" style=" background-color: rgb(211,211,211);">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="images/glf.png" alt="logo" height=50vh width="50px">
        </a>
        <a class="navbar-brand" href="index.php">HAJ Photography</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="work.php">Work</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login </a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid" style=" background-color: rgb(192,192,192); text-align: center;">
        <div class="container">
            <h1 class="display-4">Contact us </h1>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, expedita!</p>
        </div>
    </div>
    <div class="w-50 m-auto">
        <form action="contactinfo.php" method="post">
            <hr>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstname"> First Name</label>
                    <input type="text" name="firstname" class="form-control" id="firstname">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Last Name</label>
                    <input type="text" name='lastname' class="form-control" id="lastname">
                </div>
            </div>

            <div class="form-group">
                <label> Mobile No. </label>
                <input type="text" name="mobileno" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label> E-mail </label>
                <input type="text" name="e_mail" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label> Feedback </label>
                <textarea class="form-control" name="feedback" autocomplete="off" class="form-control">
                </textarea>
                <br>
                <button type="submit" class="btn btn-success"> Submit </button>
            </div>
        </form>
        <hr>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Domains</h3>
                        <ul>
                            <li><a href="work.php">Natural</a></li>
                            <li><a href="work.php">Portrait</a></li>
                            <li><a href="work.php">Wildlife</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="about.php">Company</a></li>
                            <li><a href="about.php">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
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