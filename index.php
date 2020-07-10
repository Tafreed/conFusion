<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ristorante Con Fusion</title>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
        <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm fixed-top navbar-dark">
        <div class="container">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand align-items-center" href=""><img src="img/logo.png" height="30" width="41" alt=""></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-home fa-lg"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.php"><i class="fa fa-info fa-lg"></i> About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-list fa-lg"></i> Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="contactus.php"><i class="fa fa-address-card fa-lg"></i> Contact</a></li>
                </ul>
                <div class="navbar-text ml-auto mt-auto">
                    <a class="nav-link pl-0" data-toggle="modal" data-target="#LoginModal" href=""><span class="fa fa-sign-in fa-lg"></span> Admin Login</a>
                </div>
            </div>
        </div>
    </nav>

    <div id="LoginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="form" action="data.php" method="POST">
                        <div class="form-group row align-items-center">
                            <div class="col">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                            </div>
                            <div class="col">
                                <div class="form-check-inline">
                                    <input type="checkbox" class="form-check-input" name="remember" id="remember">
                                    <label for="remember" class="form-check-label">Remember Me</label>
                                </div>  
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <button type="submit" class="btn btn-primary">Signin</button>
                            <button type="dismiss" class="btn btn-secondary mx-2" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Ristorante con Fusion</h1>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                </div>
                <div class="col-12 col-sm-6 align-items-center">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <img class="img-fluid" src="img/logo.png" alt="">
                        </div>
                        <div class="col-12 col-sm-6 align-self-center">
                            <a class="btn d-block btn-warning" data-toggle="modal" data-target="#restable">Reserve</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="restable" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Reserve a Table</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <form class="form" action="data.php" method="get" id="reserve">
                        <div class="form-group row">
                        <div class="col-12 col-sm-8 offset-sm-2" id="error" style="color: red;">
                            Error
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-12 col-sm-2">
                                <label for="name" class="form-input-label">Name</label>
                            </div>
                            <div class="col-12 col-sm-8">
                                <input class="form-control" type="text" name="name" id="name" placeholder="Name" required>  
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-check-label col-12 col-sm-2" for="guests">Number of Guests</label>
                            <div class="col-12 col-sm-8">
                                <select class="form-control" name="guests" id="guest">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-sm-2">
                                <label for="smoke" class="form-input-label">Section</label>
                            </div>
                            <div class="col col-sm-8">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-success active">
                                      <input type="radio" name="Smoke" value="No-Smoking" id="option1" autocomplete="off" checked>Non Smoking
                                    </label>
                                    <label class="btn btn-danger">
                                      <input type="radio" name="Smoke" value="Smoking" id="option2" autocomplete="off">Smoking
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-from-label col-12 col-sm-2" for="date">Date and Time</label>
                            <div class="col-12 col-sm-4">
                                <input class="form-control" type="date" name="date" id="date" placeholder="Date (DD-MM)" required>
                            </div>
                            <div class="col-12 col-sm-4">
                                <input class="form-control" type="time" name="time" id="time" placeholder="Time (HH:mm)" required>
                            </div>
                        </div>
                        <div class="row d-inline">
                            <div class="col-12 col-sm-8 offset-2">
                                <p class="text-danger">Please Note Delay of 10 Mins Might Lead to Cancelation of Reservations</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6 offset-sm-2">
                                <button type="dismiss" class="btn btn-secondary active" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" type="submit" id="rSubmit">Reserve</button>
                                <div class="d-inline" id="success" style="color: green;">Success</div>
                            </div>
                        </div>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row row-content">
            <div class="col-12">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="img/uthappizza.png" alt="uthappizza">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>
                                    Uthappizza
                                    <span class="badge badge-danger">HOT</span>
                                    <span class="badge badge-secondary badge-pill">$4.99</span>
                                </h2>
                                <p class="d-none d-sm-block">A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>        
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid c-img" src="img/buffet.png" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Weekend Grand Buffet
                                     <span class="badge badge-danger">NEW</span>
                                </h2>
                                <p class="d-none d-sm-block">Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/alberto.jpg" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Alberto Somayya</h2>
                                <h4>Executive Chef</h4>
                                <p class="d-none d-sm-block">Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" class="active" data-slide-to="0"></li>
                        <li data-target="#mycarousel"  data-slide-to="1"></li>
                        <li data-target="#mycarousel"  data-slide-to="2"></li>
                    </ol>
                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                    <button class="btn btn-danger btn-sm" id="carouselButton">
                        <span class="fa fa-pause"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="aboutus.html">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="contactus.html"></i>Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		              <i class="fa fa-phone"></i>: +852 1234 5678<br>
		              <i class="fa fa-fax"></i>: +852 8765 4321<br>
		              <i class="fa fa-envelope"></i>: <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-primary" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon btn-google" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2018 Ristorante Con Fusion</p>
                </div>
           </div>
        </div>
    </footer>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/reserve.js"></script>
    <script>
        $(document).ready(function(){
            $("#mycarousel").carousel( { interval: 2000 } );
            $("#carouselButton").click(function(){
                if($('#carouselButton').children('span').hasClass('fa-pause'))
                {
                    $('#carouselButton').children('span').removeClass('fa-pause');
                    $('#carouselButton').children('span').addClass('fa-play');
                    $("#mycarousel").carousel('pause');
                }
                else if($('#carouselButton').children('span').hasClass('fa-play'))
                {
                    $('#carouselButton').children('span').removeClass('fa-play');
                    $('#carouselButton').children('span').addClass('fa-pause');
                    $("#mycarousel").carousel('cycle');
                }
            });
        });
    </script>
</body>
</html>
