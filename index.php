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
  <link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">
</head>

<body class="body">
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
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="work.php">Work</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login </a>
        </li>

      </ul>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/Mountains1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5><mark>Mountain</mark></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/Shore1.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5><mark>Shore</mark></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/Trees1.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5><mark>Forests</mark></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="images/Wildlife2.jpg" alt="Fourth slide">
        <div class="carousel-caption d-none d-md-block">
          <h5><mark>Wildlife</mark></h5>
          <p></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <section class="my-4">
    <div class="py-4">
      <h1 class="text-center"> <kbd>About us </kbd></h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/triof.jpg" alt="Image" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-8"> We are HAJ, the multi-graphers!</h2>
          <p class="py-2"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum molestias veritatis distinctio quasi eum nemo at enim laboriosam ea magnam eveniet facilis eaque corrupti quos recusandae unde veniam laudantium ut, ipsam vel adipisci rem sequi? Eius earum et optio, iusto atque, eveniet veritatis,perferendis eligendi beatae illo quisquam suscipit maxime perferendis eligendi beatae illo. eligendi beatae illo eligendi beatae.
          </p>
          <a href="about.php" class="btn btn-success"> Know more about us here</a>
        </div>
      </div>
    </div>
  </section>

  <section class="my-4">
    <div class="py-4">
      <h1 class="text-center"><kbd>Our Work</kbd></h1>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-3 col-10">
          <div class="card" style="width: 20rem; margin-left: 25px;">
            <img class="card-img-top" src="images/n2.jpg" alt="Nature">
            <div class="card-body">
              <h5 class="card-title">Nature</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="work.php" class="btn btn-primary">See More</a>
            </div>
          </div>

        </div>

        <div class="col-lg-4 col-md-3 col-10">
          <div class="card" style="width: 20rem; margin-left:25px;">
            <img class="card-img-top" src="images/p2.jpg" alt="Portraits">
            <div class="card-body">
              <h5 class="card-title">Portrait</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="work.php" class="btn btn-primary">See More</a>
            </div>
          </div>

        </div>

        <div class="col-lg-4 col-md-3 col-10">
          <div class="card" style="width: 20rem; margin-left: 25px;">
            <img class="card-img-top" src="images/w2.jpg" alt="Wildlife">
            <div class="card-body">
              <h5 class="card-title">Wildlife</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="work.php" class="btn btn-primary">See More</a>
            </div>
          </div>

        </div>
      </div>
  </section>

  <section class="my-4">
    <div class="py-4">
      <h1 class="text-center"> <kbd>Our Photo Gallery</kbd></h1>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-3 col-10">
          <img src="images/Mountains1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-3 col-10">
          <img src="images/Mountains2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-3 col-10">
          <img src="images/Shore1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-3 col-10">
          <img src="images/Shore2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-3 col-10">
          <img src="images/Trees1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-3 col-10">
          <img src="images/Trees2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-3 col-10">
          <img src="images/Wildlife1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-3 col-10">
          <img src="images/w2.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-3 col-10">
          <img src="images/n2.jpg" class="img-fluid pb-4">
        </div>
      </div>
    </div>
  </section>

  <section class="my-4">
    <div class="py-4">
      <h1 class="text-center"> <kbd>Share your thoughts...</kbd></h1>
    </div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label> Username </label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
          <label> Comments </label>
          <textarea class="form-control" name="comments" autocomplete="off" class="form-control">
                </textarea>
        </div>
        <button type="submit" class="btn btn-success"> Submit </button>

      </form>
    </div>
  </section>


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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>