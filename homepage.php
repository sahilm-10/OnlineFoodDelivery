
<!DOCTYPE html>
<html>

<head>
 
  <link rel="manifest" href="/manifest.json">
  <meta charset="utf-8">
  <title>Munch Square</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Ubuntu&display=swap" rel="stylesheet">

  <!-- php -->




  <!-- Css Sylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Favicon -->
  <link rel="icon" href="images/icon.png">

  <!-- Font awesome-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>



<body>

  <section id="title">

    <div class="container-fluid">
      <!-- Nav bar -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="homepage.php">
          <img class="logo-img" src=" images/logo 2.png" alt="logo">
          Munch Square
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#title">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-us">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blogs">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faqs">FAQS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Title -->
      <div class="row">
        <div class="col-lg-6 heading-spacing">
          <h1 class="big-heading">The best bites under one roof.</h1>
          <!-- <h1 class="big-heading">Life's a bunch...</h1>
          <h1 class="big-heading">Enjoy the MUNCH...</h1> -->
          <p class="title-decs">We cook and delivery the tastiest healthy food right away to your destignated location.</p>
          <a href="/restaurants.php"class="btn btn-outline-light btn-lg download-button"> Get Started </a>
        </div>
        <div class="col-lg-6">
          <img class="title-img"  src="images/title-chef 1.png" alt="chef">
        </div>
      </div>
    </div>
  </section>


  <!-- Why Choose us -->
  <section id="wcu">
    <div class="container-fluid">
      <h3 class="section-heading">Why Choose Us?</h3>
      <div class="row">
        <div class="feature-box col-lg-4">
          <!-- <i class="far fa-circle fa-4x icon"></i>
          <i class="fa-solid fa-1"></i> -->
          <img class="features-img" src="images/mobile-1.png" alt="order">
          <img class="icon" src="images/numeric-1-circle-outline.png" alt="one">
          <h3 class="three-features">Order a menu.</h3>
          <p class="feature-desc">Our website offers a weekly menu.Theres is always something new to try.</p>
        </div>
        <div class="feature-box col-lg-4">
          <!-- <i class="far fa-circle fa-4x icon"></i> -->
          <img class="features-img" src="images/chef-1.png" alt="cook">
          <img class="icon" src="images/numeric-2-circle-outline.png" alt="two">
          <h3 class="three-features">Freshly Cooked.</h3>
          <p class="feature-desc">Let the food come to you directly from our kitchen.No traffic problem.No time wasted.</p>
        </div>
        <div class="feature-box col-lg-4">
          <!-- <i class="far fa-circle fa-4x icon"></i> -->
          <img class="features-img" src="images/deliver.png" alt="deliver">
          <img class="icon" src="images/numeric-3-circle-outline.png" alt="three">
          <h3 class="three-features">Delivered to you.</h3>
          <p class="feature-desc">We deliver your meals to your place so that your hectic schedule is not disrupted.</p>
        </div>
      </div>

    </div>
  </section>


  <!-- About-US -->
  <section id="about-us">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <img class="about-img" src="images/about.jpg" alt="about">
        </div>
        <div class="col-lg-6 about-content">
          <h3 class="about-heading">About Us</h3>
          <p class="about-desc">We're the go-to place when you want to read blog, discover restaurant reviews, or plan your next meal delivery. Featuring the latest food trends, recipes and dining destinations. What are you waiting for?</p>
          <!-- <button type="button" class="btn btn-outline-light btn-lg download-button"> Explore restaurant</button> -->
          <a href="restaurants.php"class="btn btn-outline-light btn-lg download-button"> Explore restaurant </a>
          <!-- <a href="about.php" class="btn btn-outline-light btn-lg download-button">Explore</a> -->
        </div>
      </div>

  </section>

  <!-- Sponsors -->
  <section id="sponsors">
    <h3 class="sponsor-heading">Our satisfied customers.</h3>
    <img class="press-logo" src="images/bsk.png" alt="bsk--logo">
    <img class="press-logo" src="images/dunkin.png" alt="dunkin-logo">
    <img class="press-logo" src="images/brita.png" alt="brita-logo">
    <img class="press-logo" src="images/burger.png" alt="burger-logo">

    </div>
  </section>


  <!-- Blogs -->
  <section id="blogs">
    <h3 class="section-heading">Blogs</h3>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="cards-wrapper">

            <div class="card-desc col-lg-4 col-md-6 col-sm-12">
              <div class="card">
                <img class="card-img-top" src="images/blogs 1.jpg" alt="slide1">
                <div class="card-body">
                  <h5 class="card-title">Desserts</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a class="btn btn-dark" href="#">Read more</a>
                </div>
              </div>
            </div>


            <div class="card-desc col-lg-4 col-md-6 col-sm-12">
              <div class="card">
                <img class="card-img-top" src="images/blogs 1.jpg" alt="slide1">
                <div class="card-body">
                  <h5 class="card-title">Desserts</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a class="btn btn-dark" href="#">Read more</a>
                </div>
              </div>
            </div>


            <div class="card-desc col-lg-4 col-md-6 col-sm-12">
              <div class="card">
                <img class="card-img-top" src="images/blogs 1.jpg" alt="slide1">
                <div class="card-body">
                  <h5 class="card-title">Desserts</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a class="btn btn-dark" href="#">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">

          <div class="cards-wrapper">

            <div class="card-desc col-lg-4 col-md-6 col-sm-12">
              <div class="card">
                <img class="card-img-top" src="images/blogs 1.jpg" alt="slide1">
                <div class="card-body">
                  <h5 class="card-title">Desserts</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a class="btn btn-dark" href="#">Read more</a>
                </div>
              </div>
            </div>


            <div class="card-desc col-lg-4 col-md-6 col-sm-12">
              <div class="card">
                <img class="card-img-top" src="images/blogs 1.jpg" alt="slide1">
                <div class="card-body">
                  <h5 class="card-title">Desserts</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a class="btn btn-dark" href="#">Read more</a>
                </div>
              </div>
            </div>


            <div class="card-desc col-lg-4 col-md-6 col-sm-12">
              <div class="card">
                <img class="card-img-top" src="images/blogs 1.jpg" alt="slide1">
                <div class="card-body">
                  <h5 class="card-title">Desserts</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a class="btn btn-dark" href="#">Read more</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="carousel-item">

          <div class="cards-wrapper">

            <div class="card-desc col-lg-4 col-md-6 col-sm-12">
              <div class="card">
                <img class="card-img-top" src="images/blogs 1.jpg" alt="slide1">
                <div class="card-body">
                  <h5 class="card-title">Desserts</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a class="btn btn-dark" href="#">Read more</a>
                </div>
              </div>
            </div>


            <div class="card-desc col-lg-4 col-md-6 col-sm-12">
              <div class="card">
                <img class="card-img-top" src="images/blogs 1.jpg" alt="slide1">
                <div class="card-body">
                  <h5 class="card-title">Desserts</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a class="btn btn-dark" href="#">Read more</a>
                </div>
              </div>
            </div>


            <div class="card-desc col-lg-4 col-md-6 col-sm-12">
              <div class="card">
                <img class="card-img-top" src="images/blogs 1.jpg" alt="slide1">
                <div class="card-body">
                  <h5 class="card-title">Desserts</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a class="btn btn-dark" href="#">Read more</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>


  <!-- FAQS -->
  <section id="faqs">
    <h3 class="faq-heading">Frequently Asked Questions</h3>
    <div class="container">
      <div class="row">

        <div class="accordion mt-5">
          <div class="card">
            <div class="card-header card-one" id="headingOne">
              <h3 class="clearfix mb-0">
                <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expand="true" aria-controls="collapseOne">What is the cost of the food and delivery? <i class="fas fa-angle-down"></i></a>
              </h3>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <p>You can view the pricing of all dishes in the menu section of our website after signing up. The delivery fees for orders range from ₹20- ₹100 per order, depending on the time and distance.
                </p>
              </div>

            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h3 class="clearfix mb-0">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expand="true" aria-controls="collapseTwo">How long will it take for the food to arrive? <i class="fas fa-angle-down"></i></a>
              </h3>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <p>After an order is placed, it usually takes 20-60 minutes to deiver it. However, due to unforeseen circumstances if the order gets delayed by more than one hour we guarantee free delivery of the order.
                </p>
              </div>

            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h3 class="clearfix mb-0">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expand="true" aria-controls="collapseThree">Is there a minimum order value? <i class="fas fa-angle-down"></i></a>
              </h3>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <p>We have no minimum order value and you can order for any amount.
                </p>
              </div>

            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h3 class="clearfix mb-0">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expand="true" aria-controls="collapseFour">What are your delivery hours?Can I order late at night? <i class="fas fa-angle-down"></i></a>
              </h3>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                <p>You can order only between 8:00AM to 11:00PM.Any orders placed before or after this time will be considered null & void.
                </p>
              </div>

            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFive">
              <h3 class="clearfix mb-0">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expand="true" aria-controls="collapseFive">I want to provide feedback<i class="fas fa-angle-down"></i></a>
              </h3>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
                <p>We value our customer’s time and hence we have integratted omprehensive messaging system on our webiste for quick and easy resolution. Just open our feedback page and initiate a chat with us. A customer care executive will be
                  assigned to you shortly. You can also email us your issue on munchsquare@mail.com.

                </p>
              </div>

            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- Subscribe -->
  <section id="contact">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="contact-heading">Let's talk</h3>
          <p class="contact-desc">If you have any other query in ordering food from our restaurant, contact us and we will attend you quickly, with our 24/7 chat service.</p>
        </div>
        <div class="col-lg-6">
          <!-- <button type="button" class="btn btn-dark btn-lg contact-button"> Contact us now</button> -->
          <a href="contact.php"class="btn btn-dark btn-lg contact-button"> Contact us now </a>
        </div>
      </div>

    </div>
  </section>


  <!-- Footer -->
  <footer id="footer">
    <div class="container-fluid">

      <i class="footer-logo fab fa-twitter"></i>
      <i class="footer-logo fab fa-facebook-f"></i>
      <i class="footer-logo fab fa-instagram"></i>
      <i class="footer-logo fas fa-envelope"></i>
      <p>© Copyright 2021 MunchSquare</p>

    </div>
  </footer>


</body>
<script>
 if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('sw.js')
      .then(function(reg){
        console.log("Yes, it did.");
     }).catch(function(err) {
        console.log("No it didn't. This happened:", err)
    });
 }
</script>
   <script src="app.js"></script>
</html>
