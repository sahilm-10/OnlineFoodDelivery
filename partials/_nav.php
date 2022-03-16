
<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
  $userId = $_SESSION['userId'];
  $username = $_SESSION['username'];
}
else{
  $loggedin = false;
  $userId = 0;
}

$sql = "SELECT * FROM `sitedetail`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$systemName = $row['systemName'];

echo '<nav class="navbar navbar-expand-lg navbar-dark" >
      <a class="navbar-brand" href="homepage.php" style="font-size: 2rem;font-weight: bold; margin-right: 0px; width: 400px;padding-top: 23px;">
      <img class="logo-img" src=" images/logo 2.png" alt="logo" style="width: 15%; padding-bottom: 15px;">
      '.$systemName.'</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active " style="padding: 0 10px;">
            <a class="nav-link" href="homepage.php" style="font-weight: 100;
            font-size: 1.2rem;padding-top: 23px;">Home</a>
          </li>
          <li class="nav-item" style="padding: 0 10px;">
            <a class="nav-link" href="restaurants.php" style="font-weight: 100;
            font-size: 1.2rem; padding-top: 23px;">Restaurants</a>
          </li>
          </li>
          <li class="nav-item" style="padding: 0 10px;">
            <a class="nav-link" href="viewOrder.php" style="font-weight: 100;
            font-size: 1.2rem; padding-top: 23px;">Your Orders</a>
          </li>
          <li class="nav-item" style="padding: 0 10px;">
            <a class="nav-link" href="receipe.php" style="font-weight: 100;
            font-size: 1.2rem; padding-top: 23px;">Receipes</a>
          </li>
          <li class="nav-item" style="padding: 0 10px;">
            <a class="nav-link" href="contact.php" style="font-weight: 100;
            font-size: 1.2rem;padding-top: 23px;">Contact Us</a>
          </li>

        </ul>

        <form method="get" action="/OnlineFoodDelivery/search.php" class="form-inline my-2 my-lg-0 mx-3">
        </form>';

        $countsql = "SELECT SUM(`itemQuantity`) FROM `viewcart` WHERE `userId`=$userId";
        $countresult = mysqli_query($conn, $countsql);
        $countrow = mysqli_fetch_assoc($countresult);
        $count = $countrow['SUM(`itemQuantity`)'];
        if(!$count) {
          $count = 0;
        }
        echo '<a href="viewCart.php" style="
    padding-right: 40px; padding-top: 15px;"><button type="button" class="btn mx-2 btn-outline-light " title="MyCart" style="color:#FFA45B; ">
          <svg xmlns="img/cart.svg" width="16" height="16" fill="#FFA45B" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>
          <i class="bi bi-cart">Cart(' .$count. ')</i>
        </button></a>';

        if($loggedin){
          echo '<ul class="navbar-nav mr-2">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" style="margin:18px 0 0; "> Welcome ' .$username. '</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="partials/_logout.php">Logout</a>
              </div>
            </li>
          </ul>
          <div class="text-center image-size-small position-relative">
            <a href="viewProfile.php">
             <img src="img/person-' .$userId. '.jpg" class="rounded-circle" onError="this.src = \'img/profilePic.jpg\'" style="width:40px; height:40px; margin:18px 0 0; "></a>
          </div>';
        }
        else {
          echo '
          <button type="button" class="btn  mx-2 btn-light"  data-toggle="modal" data-target="#loginModal" style="background-color:#FFA45B; padding-right: 15px; padding-left: 15px;margin:18px 0 0; ">Login</button>
          <button type="button" class="btn  mx-2 btn-light "  data-toggle="modal" data-target="#signupModal" style="background-color:#FFA45B; padding-right: 15px; padding-left: 15px; margin:18px 0 0;">SignUp</button>';
        }

  echo '</div>
    </nav>';

    include 'partials/_loginModal.php';
    include 'partials/_signupModal.php';

    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true") {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You can now login.
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
            </div>';
    }
    if(isset($_GET['error']) && $_GET['signupsuccess']=="false") {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Warning!</strong> ' .$_GET['error']. '
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
            </div>';
    }
    if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="true"){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> You are logged in
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
            </div>';
    }
    if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="false"){
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Warning!</strong> Invalid Credentials
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
            </div>';
    }
?>
