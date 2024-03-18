<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
    <link rel="stylesheet" href="css/khojau.css">
</head>
<body> 
    <!-- heading navbar -->

    <header>
        <a class="logo" href="opening.php" >KamHau</a>
    <nav class="navigation">
        <a href="khojau.php" class="khojau">Khojau</a>
        <a href="rakhau.php" >Rakhau</a>
        <a href="status.php">My status</a>
        <button class="buttonn"><ion-icon name="person-circle-outline"></ion-icon></button>
    </nav>
</header>

<section>
     <?php
$connection = mysqli_connect("localhost","root","","project_earn");
$query1= "SELECT * FROM rakhau ";
$result1= mysqli_query($connection,$query1);
if($result1){
?>
<div class="khojau-box">
    
<div class="table" important>
<table border="1">
    <tr class="k-rowTable">
        <th>SN</th>
        <th>WorkType</th>
        <th>Location</th>
        <th colspan="2">Status</th>
    </tr>
<?php
while($ans = $result1->fetch_assoc()){ //fetch assoc fetches the data from the query one by one where in query all the data from the table will save
    ?>
    <tr>
        <td>
            <?php echo  $ans["id"] ?>
        </td>
        <td>
            <?php echo  $ans["worktype"]?>
        </td>
        <td>
            <?php echo  $ans["Location"]?>
        </td>
        <td>
            <a href='student.php?id=$user_data[id]'>Accept</a>
        </td>

    </tr>
</div>
    <?php
}
?>

<?php
}
?>
<script>
    function msg(){
        v = confirm("are you sure?");
        if(v){
            return true;
            else{
                retunr false;
            }
        }
    }
</script>
</table>
</div>
</section>

<script src="khojaushowScript.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
?>