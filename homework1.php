

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pages</title>
    <link rel="stylesheet" href="homework1.css">
</head>
<body>
    
    <header>
       <h2></h2>

        <nav class="navigation">
            <a href="anime1.php">Home</a>
            <a href="anime2.php">Citazione del giorno</a>
            
            <a href="contatti.php">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="wrapper">
    
        <spam class="icon-close"><ion-icon name="close-circle"></ion-icon></spam>

        <div class="from-box login">
            <h2>Login</h2>
            <form action="login.php">

                <div class="input-box">
                    <spam class="icon"><ion-icon name="mail"></ion-icon></spam>
                    <input type="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <spam class="icon"><ion-icon name="lock-closed"></ion-icon></spam>
                    <input type="password" required>
                    <label>Password</label>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    
                </div>

                <button type="submit" class="btn">Login</button>

                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>

            </form>
        </div>

        <div class="from-box register">
            <h2>Registration</h2>
            <form action="register.php">

                <div class="input-box">
                    <spam class="icon"><ion-icon name="person"></ion-icon></spam>
                    <input type="text" required>
                    <label>Username</label>
                </div>

                <div class="input-box">
                    <spam class="icon"><ion-icon name="mail"></ion-icon></spam>
                    <input type="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <spam class="icon"><ion-icon name="lock-closed"></ion-icon></spam>
                    <input type="password" required>
                    <label>Password</label>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox"> I agree to the terms & conditions</label>
                </div>

                <button type="submit" class="btn">Register</button>

                <div class="login-register">
                    <p>Already have an account? <a  class="login-link">Login</a></p>
                </div>

            </form>
        </div>
        
    </div>


    <script src="homework1.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>