<?php
include('./class/Login.php');

$Error = "";
if (Login::isLoggedIn()){
    header("location: beranda.php");
} 

if(isset($_POST["signup"])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat = $_POST['passwordrepeat'];

    if(!DB::query('SELECT username FROM user WHERE username=:username', array(':username'=>$username))){
        if(strlen($username)>=5 && strlen($username)<=50){
            if(preg_match('/[a-zA-Z0-9_]+/', $username)){
                if(!DB::query('SELECT email FROM user WHERE email=:email', array(':email'=>$email))){
                    if(!DB::query('SELECT username FROM user WHERE username=:username', array(':username'=>$username))){
                        if($password==$repeat){
                            DB::query('INSERT INTO user VALUES(\'\', :email, :username, :password)', 
                            array(':email'=>$email, ':username'=>$username, ':password'=>password_hash($password, PASSWORD_BCRYPT)));
                            header("location: index.php");
                        } else {
                            $Error = "Password is not match";
                        }
                    } else {
                        $Error = "Email is already in use";
                    }
                } else {
                    $Error = "Email is already in use";
                }
            } else {
                $Error = "Username is invalid!";
            }
        } else {
            if(strlen($username)<5){
                $Error = "Username is too short (Min 5 Character)";
            } else {
                $Error = "Username is too long (Max 50 Character)";
            }
        }
    } else {
        $Error = "Sorry, Username is already in use";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Slimefun</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor/bootstrap/js/bootstrap.min.js">
</head>

<body id="background">
    <!-- NAVBAR -->
    <div class="container-fluid bgdirt">
        <nav class="row navbar navbar-expand-lg navbar-light">
            <a href="index.php" class="navbar-brand">
                <img src="./assets/logo.png" alt="" style="height: 50px;">
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb" style="z-index: 2;">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2"><a href="electricity.php" class="nav-link">
                            <span class="navtext">
                                ELECTRICITY
                            </span>
                        </a></li>
                    <li class="nav-item mx-md-2"><a href="sfcalc.php" class="nav-link">
                            <span class="navtext">
                                SFCALC
                            </span>
                        </a></li>
                    <li class="nav-item mx-md-2"><a href="tutorial.php" class="nav-link">
                            <span class="navtext">
                                TUTORIAL
                            </span>
                        </a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="loginbox align-middle">
            <div class="row" style="font-size: 32px; font-weight: bold;">
                <div class="col text-center logintext">SIGN UP</div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col text-center">
                    <form action="" method="post">
                        <div>
                            <span>E-mail</span><br>
                            <input class="form-box inputlogin" type="email" name="email" placeholder="Email" 
                            pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" required><br>
                        </div>
                        <div style="margin-top: 10px;">
                            <span>Username</span><br>
                            <input class="form-box inputlogin" type="text" name="username"
                                placeholder="Username" required><br><br>
                        </div>
                        <div>
                            <span>Password</span><br>
                            <input class="form-box inputlogin" type="password" name="password"
                                placeholder="Password" required><br>
                        </div>
                        <div>
                            <span>Repeat Password</span><br>
                            <input class="form-box inputlogin" type="password" name="passwordrepeat"
                                placeholder="Repeat Password" required><br>
                        </div>
                        <span class="error"><?php echo $Error;?></span><br>
                        <input class="submit-box" type="submit" name="signup" value="Sign Up"><br>
                        <span class="additional">Forgot Password?</span>
                        <hr>
                        <div class="additional">
                            Have An Account?
                            <a href="index.php">
                                <span class="signup" style="text-decoration: none;">
                                    Log In Now!
                                </span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./vendor/jquery/jquery-3.6.0.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="./scripts/main.js"></script>
<script>
    var docs = document.getElementById("background");
    docs.style.backgroundImage = "url('./assets/background/background (1).png')";
    var image = [
        "background (1).jpg", "background (2).jpg", "background (3).jpg", "background (4).jpg",
        "background (5).jpg", "background (6).jpg", "background (7).jpg", "background (8).jpg",
        "background (9).jpg", "background (1).png"
    ]
    var i = 0;
    setInterval(function () {
        docs.style.backgroundImage = "url('./assets/background/" + image[i] + "')";
        i++;
        if (i == image.length) {
            i = 0;
        }
    }, 5000);
</script>

</html>