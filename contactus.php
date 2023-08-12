<!DOCTYPE html>
<html lang="en">

<head>

    <title> Licious Restaurant: About Us</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <!-- build:css css/main.css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" type="text/css" href="styleold.css">
    <!-- endbuild -->
</head>

<body>





<!-- navigation bar section -->
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="logo.png" height="30" width="41"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="./index.html"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span> About</a></li>
                        <li class="nav-item"><a class="nav-link" href="./product.html"><span class="fa fa-list fa-lg"></span> Products</a></li>
                        <li class="nav-itemactive"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> Contactus</a></li>
                </ul>
            </div>
        </div>
    </nav>





<!-- header section  -->
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Licious Restaurant</h1>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                </div>
                 <div class="col-12 col-sm align-self-center">
                    <img src="logo.png" class="img-fluid">
                </div>
            </div>
        </div>
    </header>






<!-- body section  -->
    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ol>
            <div class="col-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-12">
              <h3>Location Information</h3>
           </div>
            <div class="col-12 col-sm-4 offset-sm-1">
                   <h5>Our Address</h5>
                    <address style="font-size: 100%">
                        121,Kamla nagar<br>
                        Karul Bagh,Delhi-110007<br>
                        <br>
                        <i class="fa fa-phone fa-lg"></i>: +91 999900088<br>
                        <i class="fa fa-fax fa-lg"></i>: +91 8899900990<br>
                        <i class="fa fa-envelope fa-lg"></i>: 
                        <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
            </div>
            <div class="col-12 col-sm-6 offset-sm-1">
                <h5>Map of our Location</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1591.061635066242!2d77.2028263640717!3d28.68113278946659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd8efeab59d1%3A0xc8b9b3e80502ab39!2sKamla%20Nagar%2C%20New%20Delhi%2C%20Delhi%20110007!5e0!3m2!1sen!2sin!4v1639850994815!5m2!1sen!2sin" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-12 col-sm-11 offset-sm-1">
                 <div class="btn-group" role="group">
                    <a role="button" class="btn btn-primary" href="tel:+919205445201"><i class="fa fa-phone"></i> Call</a>
                    <a role="button" class="btn btn-danger" href="https://www.instagram.com/"><i class="fa fa-instagram"></i> instagram</a>
                    <a role="button" class="btn btn-success" href="mailto:confusion@food.net"><i class="fa fa-envelope-o"></i> Email</a>
                </div>
            </div>
        </div>



<!-- form section -->
        <div class="row row-content">
           <div class="col-12">
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-12 col-md-10">
                <form action ="feedback.php" method="post">

                    <!-- form section first name  -->
                     <div class="form-group row">
                         <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                         <div class="col-md-10">
                             <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name">
                         </div>
                     </div>

                     <!-- form section last name -->
                     <div class="form-group row">
                        <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                        </div>    
                    </div>

                    <!-- form section telphone  -->
                     <div class="form-group row">
                        <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                        <div class="col-5 col-md-3">
                            <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area code">
                        </div>
                        <div class="col-7 col-md-7">
                            <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. number">
                        </div>
                    </div>

                    <!-- form section email  -->
                    <div class="form-group row">
                        <label for="emailid" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                        </div>
                    </div>

                    <!-- form section check box  -->
                         <div class="form-group row">
                        <div class="col-md-6 offset-md-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="approve" id="approve" value="">
                                <label class="form-check-label" for="approve">
                                    <strong>May we contact you?</strong>
                                </label>
                            </div>
                        </div>

                        <!-- form section selection   -->
                        <div class="col-md-3 offset-md-1">
                            <select class="form-control">
                                <option>Tel.</option>
                                <option>Email</option>
                            </select>
                        </div>
                    </div>

                     <!-- form section feedback box  -->
                     <div class="form-group row">
                        <label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="feedback" name="feedback" rows="8"
                            placeholder="Write Your Feedback ---"></textarea>
                        </div>
                    </div>

                     <!-- form section submit area  -->
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-telegram fa-lg"></i>   Send Feedback</button>
                        </div>
                    </div>
                 </form>
            </div>
             <div class="col-12 col-md">
            </div>
       </div>

    </div>






<!-- footer section-->
    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                        121,Kamla nagar<br>
                        Karul Bagh,Delhi-110007<br>
                        <br>
                      <i class="fa fa-phone fa-lg"></i>: +91 999900088<br>
                      <i class="fa fa-fax fa-lg"></i>: +91 8899900990<br>
                      <i class="fa fa-envelope fa-lg"></i>: 
                      <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                
           </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
     <!-- build:js js/main.js -->
    \<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
      <!-- endbuild -->
</body>

</html>
