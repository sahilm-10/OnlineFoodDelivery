
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Ubuntu&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Home</title>
      <link rel="icon" href="images/icon.png">
      <link rel="stylesheet" type="text/css" href="test.css">
  </head>
<body>

    <?php include 'partials/_dbconnect.php';?>
    <?php require 'partials/_nav.php' ?>

    <div class="container my-3 mb-5">
      <h2 class="categorie-name">Reviews </h2>
    
    <div class="row">
        
        <?php
                            
                            
                            $sql = "SELECT * FROM reviews"; 
                            $result = mysqli_query($conn, $sql);
                            // $count = 0;
                            while($row=mysqli_fetch_assoc($result)) {
                                $fName = $row['fName'];
                                $lName = $row['lName'];
                                $Branch = $row['Branch'];
                                $feedback = $row['feedback'];
                                $rating = $row['rating'];
                                if ($rating == 1) {

                                    echo '<div class="cat-info col-lg-4 col-md-6 col-sm-12 card-display">
                                      <div class="card card-display1">
                                        <img src="img/profilePic.jpg" class="card-img-top" alt="image for this category" width="249px" height="270px">
                                        <div class="card-body">
                                          <h2 class="card-title">' . $fName ." " .  $lName . '</h2>
                                          <p class="card-text">' . $Branch .'</p>
                                          <p class="card-text">' . $feedback .'</p>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          
                                        </div>
                                      </div>
                                    </div> ';
                                }

                                if ($rating == 2) {

                                    echo '
                                    <div class="cat-info col-lg-4 col-md-6 col-sm-12 card-display">
                                      <div class="card  card-display1">
                                        <img src="img/profilePic.jpg" class="card-img-top" alt="image for this category" width="249px" height="270px">

                                        <div class="card-body">
                                          <h2 class="card-title">' . $fName ." " .  $lName . '</h2>
                                          <p class="card-text">' . $Branch .'</p>
                                          <p class="card-text">' . $feedback .'</p>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          
                                        </div>
                                      </div>
                                    </div> ';
                                }

                                if ($rating == 3) {

                                    echo '<div class="cat-info col-lg-4 col-md-6 col-sm-12 card-display">
                                      <div class="card card-display1">
                                        <img src="img/profilePic.jpg" class="card-img-top" alt="image for this category" width="249px" height="270px">
                                        <div class="card-body">
                                          <h2 class="card-title">' . $fName ." " .  $lName . '</h2>
                                          <p class="card-text">' . $Branch .'</p>
                                          <p class="card-text">' . $feedback .'</p>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>

                                        </div>
                                      </div>
                                    </div> ';
                                }

                                if ($rating == 4) {

                                    echo '<div class="cat-info col-lg-4 col-md-6 col-sm-12 card-display">
                                      <div class="card card-display1">
                                        <img src="img/profilePic.jpg" class="card-img-top" alt="image for this category" width="249px" height="270px">
                                        <div class="card-body">
                                          <h2 class="card-title">' . $fName ." " .  $lName . '</h2>
                                          <p class="card-text">' . $Branch .'</p>
                                          <p class="card-text">' . $feedback .'</p>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          
                                        </div>
                                      </div>
                                    </div> ';
                                }

                                if ($rating == 5) {

                                    echo '<div class="cat-info col-lg-4 col-md-6 col-sm-12 card-display">
                                      <div class="card card-display1">
                                        <img src="img/profilePic.jpg" class="card-img-top" alt="image for this category" width="249px" height="270px">
                                        <div class="card-body">
                                          <h2 class="card-title">' . $fName ." " .  $lName . '</h2>
                                          <p class="card-text">' . $Branch .'</p>
                                          <p class="card-text">' . $feedback .'</p>

                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          <i class="fa fa-star" aria-hidden="true" style="color: yellow";></i>
                                          
                                        </div>
                                      </div>
                                    </div> ';
                                }
                                
                            }
    ?>
    </div>

    
    </div>

    <?php require 'partials/_footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>

</body>
</html>
