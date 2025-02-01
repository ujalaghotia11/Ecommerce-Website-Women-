
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="clothing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#"><img src="images/butterfly_logo-removebg-preview.png" alt="" height="40px" width="40px"><p>FASHION WOMEN</p></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="new_arrivels.html">New Arrival</a>
            </li>
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                Collection
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="attire.html">Female Attire</a>
                <a class="dropdown-item" href="bags.html">Bags</a>
                <a class="dropdown-item" href="tops.html">Tops</a>
                <a class="dropdown-item" href="denim.html">Jeans</a>
                <a class="dropdown-item" href="skirts_and_shorts.html">Shorts & Skirts</a>
    
              </div>
            </li>
           
            <li class="nav-item ">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
          <a class="nav-link" href="#"><img src="images/icons8-search-50.png" alt="" height="25px" width="25px"></a>
              
                <a class="nav-link" href="login.html"><img src="images/icons8-user-96.png" alt="" height="25px" width="25px"></a>
                <a class="nav-link" href="#"><img src="images/icons8-cart-96.png" alt="" height="25px" width="25px"><sup>0</sup></a>
          
          </form>
        </div>
      </nav>
      
    <!-- <div class="container"> -->
      <div class="back">
        <div class="back11">
        <h1 style="text-align: center;">Login</h1>
        <p style="text-align: center;">Don't have an account?<a href="sign_up.html">Sign up here</a></p>
        <form action="logindb.php" method="post">
        
        <div class="row" style="justify-content: center;">   
                <div class="col-md-8">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            
            </div>
            </div>
            </div>
              <div class="row"style="justify-content: center;">    
                <div class="col-md-8">
                <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            </div>
            </div>
            <div class="row" style="justify-content: center;">
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            </div>
            <div class="row" style="justify-content: center;">
              <div class="col-md-8" >
            <button type="submit" class="btn btn-primary" style="width: 100%;">LOGIN</button>
            </div>
            </div>
          </form>
          </div>
          </div>
          <div class="con" style="width:100% ;">
            <footer
                    class="text-center text-lg-start text-white"
                    style="background-color: rgba(242, 222, 222, 0.355)"
                  >
              <section
                       class="d-flex justify-content-between p-4"
                       style="background-color: #333"
                       >
                <div class="me-5">
                  <span>Get connected with us on social networks:</span>
                </div>
              
                <div>
                  <a href="" class="text-white me-4" >
                    <i class="fa fa-facebook-official"></i>
                  </a>
                  <a href="" class="text-white me-4">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="" class="text-white me-4">
                    <i class="fa fa-google"></i>
                  </a>
                  <a href="" class="text-white me-4">
                    <i class="fa fa-instagram"></i>
                  </a>
                  <a href="" class="text-white me-4">
                    <i class="fa fa-linkedin"></i>
                  </a>
                  <a href="" class="text-white me-4">
                    <i class="fa  fa-github"></i>
                  </a>
                </div>
               
              </section>
             
              <section class="">
                <div class="container text-center text-md-start mt-5">
                 
                  <div class="row mt-3">
                   
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                     
                     <a href="index.html"><h6 class="text-uppercase fw-bold" style="color:#43a36b ;">FASHION WOMEN</h6></a><br>
                     
                      <p style="color: #333; font-family:Arial, Helvetica, sans-serif; font-size: 14px;">
                        Here you can use rows and columns to organize your footer
                        content. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.
                      </p>
                      <a href="sign_up.html">Sign up<i class="fa fa-arrow-right"></i></a>
                    </div>
                   
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    
                      <h6 class="text-uppercase fw-bold">Products</h6>
                      <hr
                          class="mb-4 mt-0 d-inline-block mx-auto"
                          style="width: 80px; background-color: #141415; height: 2px"
                          />
                      <p>
                        <a href="#!" class="text-black">New Arrival</a>
                      </p>
                      <p>
                        <a href="#!" class="text-black">Collection</a>
                      </p>
                      <p>
                        <a href="#!" class="text-black">Begs</a>
                      </p>
                      <p>
                        <a href="#!" class="text-black">Accessories</a>
                      </p>
                    </div>
                   
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                     
                      <h6 class="text-uppercase fw-bold">Useful links</h6>
                      <hr
                          class="mb-4 mt-0 d-inline-block mx-auto"
                          style="width: 80px; background-color: #141415; height: 2px"
                          />
                      <p>
                        <a href="#!" class="text-black">Your Account</a>
                      </p>
                      <p>
                        <a href="#!" class="text-black">Become an Affiliate</a>
                      </p>
                      <p>
                        <a href="#!" class="text-black">Shipping Rates</a>
                      </p>
                      <p>
                        <a href="#!" class="text-black">Help</a>
                      </p>
                    </div>
                   
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                     
                      <h6 class="text-uppercase fw-bold">Contact</h6>
                      <hr
                          class="mb-4 mt-0 d-inline-block mx-auto"
                          style="width: 60px; background-color: #141415; height: 2px"
                          />
                      <p style="color: #333;"><i class="fa fa-home mr-3"></i> Jaipur, NY 10012, INDIA</p>
                      <p style="color: #333;"><i class="fa fa-envelope mr-3"></i> fashionwomen.com</p>
                      <p style="color: #333;"><i class="fa fa-phone mr-3"></i> + 91 9234 567 823</p>
                      <p style="color: #333;"><i class="fa fa-print mr-3"></i> + 91 8234 567 893</p>
                    </div>
                    
                  </div>
                
                </div>
              </section>
             
              <div
                   class="text-center p-3"
                   style="background-color: black"
                   >
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/"
                   >Ujalaghotia@gmail.com</a
                  >
              </div>  
            </footer>
          </div>
    
</body>
</html>