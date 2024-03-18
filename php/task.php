<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
 $rworktype = $_POST['r-input'];
 $rlocation = $_POST['r-location'];
 $rnumber = $_POST['rnumber'];


// /to not to show the password in databse
    
    // $encryptedPassword = password_hash($Password, PASSWORD_DEFAULT);
    $connection = mysqli_connect("localhost","root","","project_earn");
    $query = "INSERT INTO rakhau(worktype,Location,Phone) VALUES ('$rworktype','$rlocation','$rnumber')";
    $result = mysqli_query($connection,$query);
    
if($result){
    echo"sign in successfully !!";
    header("Location:opening.php");
}
else{
    echo"error!!";
}
} 
?>
