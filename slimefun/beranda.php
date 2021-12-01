<?php
include('./class/Login.php');
if (!Login::isLoggedIn()){
    header("location: index.php");
}

if (isset($_POST['logout'])) {
    DB::query('DELETE FROM logintoken WHERE userid=:userid', array(':userid'=>Login::isLoggedIn()));
    header("location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Advanced Slimefun</title>
    <link rel="stylesheet" href="./style/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor/bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
</head>

<body style="background-image: url('./assets/stone.jpg');">
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
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-md-4">
                        <a href="electricity.php" class="nav-link " style="margin-top: 5px;">
                            <span class="navtext">
                                ELECTRICITY
                            </span>
                        </a>
                    </li>
                    <li class="nav-item mx-md-4">
                        <a href="sfcalc.php" class="nav-link" style="margin-top: 5px;">
                            <span class="navtext">
                                SFCALC
                            </span>
                        </a>
                    </li>
                    <li class="nav-item mx-md-4">
                        <a href="tutorial.php" class="nav-link" style="margin-top: 5px;">
                            <span class="navtext">
                                TUTORIAL
                            </span>
                        </a>
                    </li>
                    <li class="nav-item mx-md-4">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="navtext mr-2 d-none d-lg-inline text-gray-600">
                                <?php echo DB::query('SELECT username FROM user WHERE userid=:userid', array(':userid'=>Login::isLoggedIn()))[0][0]; ?>
                            </span>
                            <img class="img-profile rounded-circle" src="./assets/grass.png">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="updatebox align-middle">
            <div class="row">
                <div class="col text-center logintext">UPDATE</div>
            </div>
            <div style="padding: 40px;">
                <div class="row updatedate">
                    Tes Date
                </div>
                <div class="row updatenote ml-3">
                    Update gan Update gan Update gan Update gan Update gan Update gan Update gan Update gan Update gan
                    Update gan Update gan Update gan 1 tes tes
                </div>
                <div class="row updatedate">
                    Tes Date
                </div>
                <div class="row updatenote ml-3">
                    Update gan Update gan Update gan Update gan Update gan Update gan Update gan Update gan Update gan
                    Update gan Update gan Update 2 gan tes tes
                </div>
                <div class="row updatedate">
                    Tes Date
                </div>
                <div class="row updatenote ml-3">
                    Update gan Update gan Update gan Update gan Update gan Update gan Update gan Update gan Update gan
                    Update gan Update gan Update gan 3 tes tes
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="updatebox align-middle">
            <div class="row">
                <div class="col text-center logintext">Features</div>
            </div>
            <div class="row">
                <div class="col" style="padding: 20px;">
                    <div class="card-vote d-flex flex-column">
                        <img class="card-image" src="./assets/sfcalc.jpg" alt="">
                        <div class="card-body">
                            <div class="featuretext">SF Calc</div>
                            <div class="featuredis">
                                Calculate your need for building a machine, and step to make it.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" style="padding: 20px;">
                    <div class="card-vote d-flex flex-column">
                        <img class="card-image" src="./assets/electricity.png" alt="">
                        <div class="card-body">
                            <div class="featuretext">Electricity</div>
                            <div class="featuredis">
                                Calculate your need for electricity, and electricity you need for machine
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col" style="padding: 20px;">
                    <div class="card-vote d-flex flex-column">
                        <img class="card-image" src="./assets/tutor.png" alt="">
                        <div class="card-body">
                            <div class="featuretext">Tutorial</div>
                            <div class="featuredis">
                                Tutorial how to use every single machine, item, and tips n trick for Slimefun
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid">
        <div class="featurebox align-middle">
            <div class="row">
                <div class="col text-center logintext">Tutorial</div>
            </div>
            <div class="owl-carousel owl-theme">

                <div class="item wrap-img-carousel">
                    <a href="elec.php">
                        <div class="seefeature">
                            <img class="img-carousel" src="./assets/electricity.png">
                        </div>
                    </a>
                    <div class="featuretext">
                        Electricity
                    </div>
                </div>

                <div class="item wrap-img-carousel">
                    <a href="mine.php">
                        <div class="seefeature">
                            <img class="img-carousel" src="./assets/mine.jpg">
                        </div>
                    </a>
                    <div class="featuretext">
                        Mining
                    </div>
                </div>

                <div class="item wrap-img-carousel">
                    <a href="craft.php">
                        <div class="seefeature">
                            <img class="img-carousel" src="./assets/craft.jpg">
                        </div>
                    </a>
                    <div class="featuretext">
                        Crafting
                    </div>
                </div>

                <div class="item wrap-img-carousel">
                    <a href="build.php">
                        <div class="seefeature">
                            <img class="img-carousel" src="./assets/build.jpg">
                        </div>
                        <div class="featuretext">
                            Building
                        </div>
                    </a>
                </div>

                <div class="item wrap-img-carousel">
                    <a href="skyblock.php">
                        <div class="seefeature">
                            <img class="img-carousel" src="./assets/skyblock.jpg">
                        </div>
                    </a>
                    <div class="featuretext">
                        Skyblock
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="footer">
        Made by Muhammad Nauval Saiholau
    </div>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" name="logout">Logout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="js/demo/chart-pie-demo.js"></script>
<script src="./vendor/jquery/jquery-3.6.0.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>

<script>
    $('.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
</script>

</html>