<?php
    require_once './includes/conn.php'
?>

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
                    <li class="nav-item active"><a class="nav-link" href="index.php"><i class="fa fa-home fa-lg"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.php"><i class="fa fa-info fa-lg"></i> About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-list fa-lg"></i> Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="contactus.php"><i class="fa fa-address-card fa-lg"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Ristorante con Fusion</h1>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                </div>
            </div>
        </div>
    </header>


                <ul class="nav nav-tabs justify-content-center">   
                    <li class="nav-item">
                        <a class="nav-link active" href="#reserve" role="tab" data-toggle="tab"><h3>Reservation</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#orders" role="tab" data-toggle="tab"><h3>Orders</h3></a>
                    </li>
                </ul>

                <div class="tab-content" id="t_content">
                    <div role="tabpanel" class="tab-pane fade show active" id="reserve">
                        <div class="container">
                            <div class="row row-content">
                                <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th>Sl.No</th>
                                        <th>Name</th>
                                        <th>Number of Guests</th>
                                        <th>Smoking</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody1">

                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="orders">
                        <div class="container">
                            <div class="row row-content">
                                <div class="table-responsive">
                                <table class="table table-striped text-center">
                                    <thead class="thead-dark">
                                        <th>Sl.No</th>
                                        <th>Name</th>
                                        <th>Number of Guests</th>
                                        <th>Smoking</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                    </thead>
                                    <tbody id="tbody2">

                                    </tbody>
                                </table>
                                </div>
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
    <script src="js/admin.js"></script>
</body>
</html>