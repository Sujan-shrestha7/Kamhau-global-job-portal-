<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];


// /to not to show the password in databse
    
    // $encryptedPassword = password_hash($Password, PASSWORD_DEFAULT);
    $connection = mysqli_connect("localhost","root","","project_earn");
    $query = "INSERT INTO signup(username,email,Password) VALUES ('$username','$email','$password')";
    $result = mysqli_query($connection,$query);
    
if($result){
    echo"sign in successfully !!";
    header("Location:index.php");
}
else{
    echo"error!!";
}
} 
?>
