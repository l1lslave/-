<!DOCTYPE html>
<html lang ="uk">
    <head>
            <title> KN-Svoyi </title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <header>
            <h2 class="logo">КН-Свої</h2>
            <nav class="navigation">
                <a href="index.php">Головна</a>
                <a href="#">Про нас</a>
                <a href="all_users.php">Контакти</a>
                <button class="LoginButton">Login</button>
            </nav>
        </header>
        
        <div class="wrapper">
            <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
            </span>
            <div class="LoginFrame login">
                <h2>Login</h2>
                <form action ="register.php" method="post">
                    <div class="input-box">
                        <span class="iconLog">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="iconLog">
                            <ion-icon name="key-outline"></ion-icon>
                        </span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label>
                            <input type="checkbox">
                            Запам'ятати мене
                        </label>
                    </div>
                    <button type="submit" class="btn" value="SignIn"name="SignIn">Login
                    </button>
                    <div class="login-registerLog">
                        <p> Все ще не маєте облікового запису?
                            <a href="#"
                            class="register-link">Register</a>
                        </p>
                    </div>
                </form>
            </div>
            
            <div class="LoginFrame register">
                <h2>Registration</h2>
                <form action ="register.php" method="post">
                    <div class="input-box">
                        <span class="iconLog">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <input type="text" name='firstName' id='firstName' required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="iconLog">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <input type="email" name ="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="iconLog">
                            <ion-icon name="key-outline"></ion-icon>
                        </span>
                        <input type="password" name ="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label>
                            <input type="checkbox">
                            Запам'ятати мене
                        </label>
                    </div>
                    <button type="submit" class="btn" value="SignUP" name="SignUP">Registration
                    </button>
                    <div class="login-registerReg">
                        <p> Вже маєте обліковий запис?
                            <a href="#"
                            class="login-link">Login</a>
                        </p>
        </div>
        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>