<!DOCTYPE html>
<html lang="en">

<head>
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

    <title>licious Restaurant</title>
</head>

<body>


<!-- navigation bar section -->
    <!--Navbar-Bootstarp css -->
    <nav class="navbar navbar-dark navbar-expand-sm fixed top "> 
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>   
            </button>

            <a class="navbar-brand mr-auto" href="#"><img src="logo.png" height="30" width="41"> </a>
            <div class="collapse navbar-collapse" id="Navbar">
             <ul class="navbar-nav mr-auto">
                 <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home"></span> Home</a></li>
                 <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span> About</a></li>
                 <li class="nav-item"><a class="nav-link" href="product.html"><span class="fa fa-list fa-lg"></span> Products</a></li>
                 <li class="nav-item"><a class="nav-link" href="contactus.html"><span class="fa fa-address-card fa-lg"></span> Contact us</a></li> 

                         
               </ul>
               <span class="navbar-text">
                <a id="loginButton" type="button">
                    <span class="fa fa-sign-in "></span>Login</a></span>
                <div class="">     
                    <span class="navbar-text">
                        <a id="signupbutton" type="Button" class>
                            <span class ="fa fa-sign-in ml-sm-2"></span>Sign up</a></span>
                    </span>
                </div>
           </div>
       </div>
    </nav>
    <!-- Content -->


<!-- Modal in login page display data -->
<div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Login </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                    <label class="sr-only" for="Email3">Email address</label>
                                    <input type="email" class="form-control form-control-sm mr-1" name="useremail" placeholder="Enter email">
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="sr-only" for="Password3">Password</label>
                                <input type="password" class="form-control form-control-sm mr-1" name="userpassword" placeholder="Password">
                            </div>
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"> Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-auto">
                              <div class="form-check">
                                 <a href="#signupmodal" Create An Account></a>
                              </div>
                            </div>
                        <div class="form-row mt-auto mb-auto ml-auto mr-auto">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Sign in</button>        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- end of login page -->

<!--modal of signup page-->

<div id="signupmodal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Signup </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
    
                    <form action="action.php" method="POST">
                        
                             <p>Please fill in this form to create an account.</p>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label class="sr-only" for="Username">Username</label>
                                        <input type="text" class="form-control form-control-sm mr-1" name="username" placeholder="Enter username">
                                </div>
                            </div>
                               
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                            <label class="sr-only" for="Email3">Email address</label>
                                            <input type="email" class="form-control form-control-sm mr-1" name="useremail" placeholder="Enter email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label class="sr-only" for="Password3">Password</label>
                                        <input type="password" class="form-control form-control-sm mr-1" name="userpassword" placeholder="Password">
                                    </div>
                                </div>
                               <!-- <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label class="sr-only" for="Password4">Repeat Password</label>
                                        <input type="text" class="form-control form-control-sm mr-1" id="Password4" placeholder="Enter the Password">
                                    </div>
                                </div>-->

                                
                                <div class="form-row">
                                    <div class="col-sm-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label"> Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                             
                                   <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                                   <div class="clearfix">
                                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary btn-sm ml-1" >Sign Up</button>
                                            </div>
                        
                    </form>
                </div>
        </div>
    </div>
</div>
<!--end of signup page-->

<!-- header section  -->
    <header class="jumbotron">
        <div class ="container">
            <div class ="row">
                <div class="col-sm-6 ">
                    <h1>Licious Restaurant</h1>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                </div>
               
                <div class="row col-sm-6" >
                        <div class="row-col-sm-3 mr-auto ml-auto mb-auto mt-auto  ">
                          <img src="logo.png" alt="pizza">
                        </div>
                    
                         <div class="row-col-sm-3 mt-auto mb-auto ml-auto mr-auto">
                           <a class="btn btn-warning btn-block "
                          id="reserve-button" role="button">Reserve Table</a>
                         </div>
                </div>
                </div>
            </div>
        
   </header>

   <!-- reserv form-->

    <div id="reservetable" class="modal fade" role="dialog">
         <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Reserve a Table </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="reserve.php" method="post">
                     <div class="form-group row ">
                        <label for="guest" class="col-12 col-md-2 mr-sm-4">Number of Guests</label>
                        <div class="col-12  col-md-7">
                            <input type="radio" value="1"name="guests"> 1

                            <input type="radio" value="2"name="guests"> 2
                        
                            <input type="radio" value="3"name="guests"> 3
                        
                             <input type="radio" value="4" name="guests"> 4
                        
                             <input type="radio" value="5"name="guests"> 5
                        
                              <input type="radio" value="6" name="guests"> 6
                           
                    </div>
                </div> 
            <div class="form-row mb-3">
                     <label for="section" class="col-12 col-md-2 mb-auto">Section:</label>
                 <div class="row ml-4  ">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons" >
                        <label class="btn btn-success active">
                            <input type="radio"value="Non smoking" name="section" id="option1" autocomplete="off"checked>Non Smoking</label>
                        <label class="btn btn-danger ">
                            <input type="radio" value="Smoking" name="section" id="option2" autocomplete="checked">Smoking</label>
                          
                    </div>
                    

                </div>
            </div>

                     <div class="form-row mb-auto">
                        <label for="date" class=" col-12 col-md-2 mb-auto">Date and Time</label>
                        <div class=" row row-col-10 mb-auto">
                            <div class= "col-md-5 ml-3 ">
                                 <input type="date"name ="date" id="dated">
                                 
                            </div>
                             <div class= " col-md-4 ml-5 mr-auto">
                                <input type="time" name="time" id="time">
                               
                             </div>
                        </div>

                    </div>

                 <div class="form-row mt-5 margin">
                 <button type="button" data-dismiss="modal" class="btn btn-secondary  ml-4">Cancel</button>
                 <button type="submit" class="btn btn-primary ml-2">Reserve</button>    
               </div>
               </form> 

          </div>
        </div>
    </div>
</div>


   <!-- reserve form end-->

   




<!-- body section  -->
    <div class="container">

    <!-- start of carousel -->
       <div class="row row-content">
           <div class="col">
              <div id="mycarousel" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid"
                                src="uthappizza.png" alt="Uthappizza">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Uthappizza <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-default">Rs.99</span></h2>
                                    <p class="d-none d-sm-block">A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                              <img class="d-block img-fluid"
                                   src="buffet.png" alt="weekand buffet">
                            <div class="carousel-caption d-none d-md-block">
                                  <h2 >Weekend Grand Buffet <span class="badge badge-danger">NEW</span></h2>
                            <p class="d-none d-sm-block">Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
                          </div>
                       </div>


                        <div class="carousel-item">
                              <img class="d-block img-fluid"
                            src="alberto.png" alt="Alberto Somayya">
                            
                         <div class="carousel-caption d-none d-md-block"> 
                             <h2>Alberto Somayya</h2>
                             <h4>Executive Chef</h4>
                                 <p class="d-none d-sm-block">Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in      creating mouthwatering Indo-Italian fusion experiences.
                            </p>
                            
                          </div>

                        </div>
                    </div>
                <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>

                  <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                     <button class="btn btn-danger btn-sm" id="carouselButton">
                        <span id="carousel-button-icon" class="fa fa-pause"></span>
                    </button>

            </div>
        </div>
    </div>

    <!-- end of carousel -->
        <div class="row row-content">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col col-sm col-md">

                   <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                            src="uthappizza.png" alt="Uthappizza">
                    <div class="media-body">
                        <h2 class="mt-0">Uthappizza  <span class="badge badge-danger"> HOT </span>   <span class="badge badge-pill badge-secondary"> $4.99</span></h2>
                        <p class="d-none d-sm-block">A unique combination of Indian Uthappam (pancake) and
                            Italian pizza, topped with Cerignola olives, ripe vine
                            cherry tomatoes, Vidalia onion, Guntur chillies and
                            Buffalo Paneer.</p>
                    </div>
                </div>

            </div>
        </div>


        <div class="row row-content">
            <div class="col-12 col-sm-4  col-md-3">
                <h3>This Month's Promotions</h3>
            </div>
            <div class="col col-sm col-md">

                 <div class="media">
                   
                    <div class="media-body">
                            <h2 class="mt-0">Weekend Grand Buffet <span class="badge badge-danger">NEW</span></h2>
                            <p class="d-none d-sm-block">Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>

                    </div>
                     <img class=" d-flex mr-3 img-thumbnail align-self-center"
                            src="buffet.png" alt="buffet">
                    </div>
                </div>
        </div>

        <div class="row row-content">
            <div class="col-12 col-sm-4 order-sm-last col-md-3">
                <h3>Meet our Culinary Specialists</h3>
            </div>
            <div class="col col-sm col-md">
                <div class="media">
                    <img class="d-flex mr-3 img-thumbnail align-self-center"
                            src="alberto.png" alt="Alberto Somayya">
                    <div class="media-body">
                        <h2 class="mt-0">Alberto Somayya</h2>
                        <h4>Executive Chef</h4>
                        <p class="d-none d-sm-block">Award winning three-star Michelin chef with wide
                            International experience having worked closely with
                            whos-who in the culinary world, he specializes in
                            creating mouthwatering Indo-Italian fusion experiences.
                            </p>
                    </div>
                </div>
                
            </div>
        </div>



     






<!-- footer section-->
    <footer class="footer mb-auto mt-auto">
        <div class="container mb-auto mt-auto ">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="./aboutus.html">About</a></li>
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
		              <i class="fa fa-phone fa-lg"></i>:+91 999900088<br>
		              <i class="fa fa-fax fa-lg"></i>:+91 8899900990<br>
		              <i class="fa fa-envelope fa-lg"></i>:<a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4">
                    <div>
                        <a class="btn tn-social-icon btn-instagram" href="http://google.com/+"><i class="fa fa-instagram fa-lg"></i></a>
                        <a class="btn tn-social-icon btn-facebook" href="http://www.facebook.com/"><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn tn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn tn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn tn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn tn-social-icon" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                </div>
           </div>
           <div class="row">             
                
           </div>
        </div>
    </footer>

    <button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="action_page.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>




  <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
   <!-- build:js js/main.js -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
    $("#mycarousel").carousel( { interval: 2000 } );
      $("#carouselButton").click(function(){
          if ($("#carouselButton").children("span").hasClass('fa-pause')) {
              $("#mycarousel").carousel('pause');
              $("#carouselButton").children("span").removeClass('fa-pause');
              $("#carouselButton").children("span").addClass('fa-play');
            }
          else if ($("#carouselButton").children("span").hasClass('fa-play')){
              $("#mycarousel").carousel('cycle');
              $("#carouselButton").children("span").removeClass('fa-play');
              $("#carouselButton").children("span").addClass('fa-pause');                    
            }
        });
    
});

function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

$("#loginButton").click(function(){
$('#loginModal').modal('show')
});

$("#reserve-button").click(function(){
$('#reservetable').modal('show')
});

$("#signupbutton").click(function(){
$('#signupmodal').modal('show')
});


    </script>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
    <script src="E:\college year study data\4th year\coursera\coursera assignment\scripts.js"></script>  
    
  <!-- endbuild -->
    </body>

</html>