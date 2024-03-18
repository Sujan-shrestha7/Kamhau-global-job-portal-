
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
    <link rel="stylesheet" href="css/project.css">
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

<!-- home section -->
<section id="home" class="opening-page">
    <div class="rakhau-box" id="rakhau-box">
        <form class="rakhau-form" action="task.php" method="post">
            <label for="">Work Type:</label>
            <br><br>
            <input type="text" name="r-input" id="rakhau-inputTask" class="rakhau-input" placeholder="add your task" required>
            <br><br><br>
            <label for="">Location:</label>
            <br><br>
            <input type="text" name="r-location" id="rakhau-inputLocation" class="rakhau-input" placeholder="add your location" required>
            <br><br><br>
            <label for="">Number:</label>
            <br><br>
            <input type="text" name="rnumber" id="rakhau-inputNumber" class="rakhau-input" placeholder="enter your number" required>
            <br><br>
            <input type="submit" class="rakhau-button" id="rakhau-button" value="Add Task">
        </form>
    </div>
    <div class="wishes"> "You don't earn loyalty in <br> a  day. You earn loyalty <br>day-by-day."</div>
</section>
<script src="khojaushowScript.js"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>