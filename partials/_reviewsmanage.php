<?php
include '_dbconnect.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_SESSION['userId'];
    
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $branch = $_POST["orderId"];
    $feedback = $_POST["message"];
    $password = $_POST["password"];
    $rating = $_POST["rating"];

    // Check user password is match or not
    $passSql = "SELECT * FROM users WHERE id='$userId'"; 
    $passResult = mysqli_query($conn, $passSql);
    $passRow=mysqli_fetch_assoc($passResult);
    
    if (password_verify($password, $passRow['password'])){
        $sql = "INSERT INTO `reviews` (`fName`, `lName`, `Branch`, `feedback`, `rating`) VALUES ('$firstName', '$lastName', '$branch', '$feedback','$rating')";
        $result = mysqli_query($conn, $sql);
        header("location:/OnlineFoodDelivery/restaurants.php");
        
      
    }
    else{
        echo "<script>alert('Password incorrect!!');
                window.history.back(1);
                </script>";
    }
    
}
?>