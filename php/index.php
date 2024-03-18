
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body> 
    <!-- heading navbar -->

    <header>
    <h2 class="logo">KamHau</h2>
    <nav class="navigation">
        <a href="#home">Home</a>
        <a href="#resume">About Us</a>
        <a href="#service">Services</a>
        <button class="button">Login</button>
    </nav>
</header>

<!-- login section -->

<div class="wrapper">
    <span class="icon-close"><ion-icon name="close"></ion-icon>
    </span>

    <div class="form-box login">
        <h2>Login</h2>
        <form action="signIn.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-unread-outline"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label >Password</label>
                </div>
                <div class="remember">
                    <label > <input type="checkbox">Remember me<label>
                        <a href="#">Forget Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p> Don't have an account?
                        <a href="#" class="register-link">Register</a></p>

                </div>
        </form>
    </div>

    <div class="form-box register">
        <h2>Registration</h2>
        <form action="signUp.php" method="post">
            <div class="input-box">
                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-unread-outline"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label >Password</label>
                </div>
                <div class="remember">
                    <label > <input type="checkbox">I agree to terms & conditions<label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p> Already have an account?
                        <a href="#" class="login-link">Login</a></p>
                </div>
        </form>
    </div>
</div>

<!-- About Us section -->
<section id="resume"></section>

<script src="script.js"></script>
  <script type="text/javascript" src="js/particles.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>