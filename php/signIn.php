<?php
session_start();


if($_SERVER["REQUEST_METHOD"]=="POST"){
 $email1 = $_POST['email'];
 $password1 = $_POST['password'];


// /to not to show the password in databse
    
    // $encryptedPassword = password_hash($Password, PASSWORD_DEFAULT);
    $connection = mysqli_connect("localhost","root","","project_earn");
    $query1 = "SELECT * FROM signup";
    $result = mysqli_query($connection,$query1);
    
if($result){
    while($user = $result-> fetch_assoc()){
        $email=$user["email"];
        $password=$user["Password"];       
if($email==$email1 && $password==$password1){
    $_SESSION['username'] = $email;
    header("Location:opening.php?");
    exit();
    }
    else{
        header("Location:index.php?");
    }
}
}
} 
?>
