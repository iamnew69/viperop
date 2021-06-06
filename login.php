<!DOCTYPE html>

<html>
    <head>
        <title>Log in to</title>
        <link rel="stylesheet" href="index.css">
    </head>

    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <div class="social-icons">
                    <img src="fb.jpeg">
                    <a href="gp
                     .php"><img src="gp.jpeg"></a>
                    <img src="tw.jpeg">
                </div>
                <form id="login" class="input-group" action="validation.php" method="post">
                    <input type="text" class="input-field" placeholder="Username" required>
                    <input type="text" class="input-field" placeholder="Enter Password" required>
                    <button type="submit" class="submit-btn">Log in</button>
                    <input type="checkbox" class="check-box"><span>Remeber Password</span>
                </form>
                <form id="register" class="input-group" action="registeration.php" method="post">
                    <input type="text" class="input-field" placeholder="Username" required>
                    <input type="email" class="input-field" placeholder="Email id" required>
                    <input type="password" class="input-field" placeholder="Enter Password" required>
                    <input type="checkbox" class="check-box"><span>I agree to the terms & conditions.</span>
                    <button type="submit" class="submit-btn">Register</button>
                    
                </form>
            </div>
        </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }

            
            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }
        </script>
    </body>
</html>