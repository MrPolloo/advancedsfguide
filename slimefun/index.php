<?php
include('./class/Login.php');
$Error = '';

if (Login::isLoggedIn()){
    header("location: beranda.php");
} 

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if (DB::query('SELECT username FROM user WHERE BINARY username=:username', array(':username'=>$username))) {
    if(password_verify($password,DB::query('SELECT password FROM user WHERE username=:username', array(':username'=>$username))[0]['password'])) {
              
        $cstrong = True;
        $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong)) ;
        $userid = DB::query('SELECT userid FROM user WHERE username=:username', array(':username'=>$username))[0]['userid'];
        DB::query('DELETE FROM logintoken WHERE userid=:userid', array(':userid'=>$userid));
        DB::query('INSERT INTO logintoken VALUES (\'\', :token, :userid)', array(':token'=>sha1($token), ':userid'=>$userid));

        setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
        setcookie("SNID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);

        header("location: beranda.php");
    } else {
      $Error =  "Incorrect Password";
    }
  } else {
      $Error = "You're Not Registered";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Advanced Slimefun</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="icon" href="../assets/sf.png">
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor/bootstrap/js/bootstrap.min.js">
</head>

<body id="background">
    <!-- NAVBAR -->
    <div class="container-fluid bgdirt">
        <nav class="row navbar navbar-expand-lg navbar-light">
            <a href="../index.php" class="navbar-brand">
                <img src="./assets/logo.png" alt="" style="height: 50px;">
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb" style="z-index: 2;">
                <ul class="navbar-nav ml-auto mr-3">
                    <!-- <li class="nav-item mx-md-2"><a href="electricity.php" class="nav-link">
                            <span class="navtext">
                                ELECTRICITY
                            </span>
                        </a></li> -->
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
            <div class="row">
                <div class="col text-center logintext">LOG IN</div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col text-center">
                    <form action="" method="post">
                        <span>Username</span><br>
                        <input class="form-box inputlogin" type="text" name="username" placeholder="Username"
                            required><br><br>
                        <span>Password</span><br>
                        <input class="form-box inputlogin" type="password" name="password" placeholder="Password"
                            required><br>
                        <span class="error"><?php echo $Error;?></span><br>
                        <input class="submit-box" type="submit" name="login" value="Log in"><br>
                        <span class="additional">Forgot Password?</span>
                        <hr>
                        <div class="additional">
                            Dont Have An Account?
                            <a href="signup.php">
                                <span class="signup" style="text-decoration: none;">
                                    Sign Up Now!
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