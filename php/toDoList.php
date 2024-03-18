<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


<div class="toDoContainer">
    <div class="todo-app">
        <h2>To-Do-List <img src="icon.png" alt=""></h2>
        <div class="row">
            <input type="text" class="toDoinput-box" id="toDoinput-box" placeholder="Add your task">
            <button class="toDoButton" onclick="addTask()">Add</button>
        </div>
        <ul id="list-container">
        </ul>
    </div>
</div>
</section>
<script src="ToDoscript.js"></script>
</body>
</html>