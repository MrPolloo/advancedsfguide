<?php
include('./class/Login.php');
if (!Login::isLoggedIn()){
    header("location: index.php");
}

if (isset($_POST['logout'])) {
    DB::query('DELETE FROM logintoken WHERE userid=:userid', array(':userid'=>Login::isLoggedIn()));
    header("location: index.php");
}
$itemname =$items= '';
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial - Advanced Slimefun</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="icon" href="../assets/sf.png">
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor/bootstrap/js/bootstrap.min.js">
</head>
<style>
    .navbar-light .navbar-toggler {
        border-color: white;
        background-color: rgba(255, 255, 255, 0.5);
    }
    .btn-primary {
        background-color: #008542;
    }
    .btn-primary:hover {
        background-color: #a0c5b3;
    }
    .modal-dialog {
        width: 250px;
    }
</style>    
<body style="background-image: url('./assets/stone.jpg');">
    <!-- NAVBAR -->
    <div class="container-fluid bgdirt">
        <nav class="row navbar navbar-expand-lg navbar-light">
            <a href="../beranda.php" class="navbar-brand">
                <img src="./assets/logo.png" alt="" style="height: 50px;">
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb" style="z-index: 2;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-md-4">
                        <a href="beranda.php" class="nav-link " style="margin-top: 5px;">
                            <span class="navtext">
                                HOME
                            </span>
                        </a>
                    </li>
                    <!-- <li class="nav-item mx-md-4">
                        <a href="electricity.php" class="nav-link " style="margin-top: 5px;">
                            <span class="navtext">
                                ELECTRICITY
                            </span>
                        </a>
                    </li> -->
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
        <div class="sfcalcbox align-middle">
            <div class="row">
                <div class="col"><img src="./assets/slimefun.png" alt="" class="tutorialhead"></div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="definisi">
                        Slimefun is a plugin which aims to turn your Spigot Server into a modpack without ever
                        installing a single mod. It offers everything you could possibly imagine. From Backpacks to
                        Jetpacks! Slimefun lets every player decide on their own how much they want to dive into Magic
                        or Tech.
                        We got everything from magical wands to nuclear reactors.
                        We feature a magical altar, an electric power grid and even item transport systems.
                    </div>
                </div>
            </div>
            <hr style="height:3px;border-width:0;color:gray;background-color:gray;width:80%;">
            <div class="row">
                <div class="col">
                    <div class="whatsfhavehead">
                        What does Slimefun do?
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col definisi" style="margin-top:1em;">
                    Slimefun4 alone contains far over 400 new Items and Blocks. Some of these include:
                </div>
            </div>
            <div class="row">
                <div class="col" style="padding: 0px;">
                    <div class="imagesfhave">
                        <img src="./assets/items/backpack.png" alt="Backpack" class="whatsfdo"><br>
                        <div style="margin-top: 10px;">Backpack</div>
                    </div>
                </div>
                <div class="col" style="padding: 0px;">
                    <div class="imagesfhave">
                        <img src="./assets/items/reactor.png" alt="Reactor" class="whatsfdo"><br>
                        <div style="margin-top: 10px;">Reactor</div>
                    </div>
                </div>
                <div class="col" style="padding: 0px;">
                    <div class="imagesfhave">
                        <img src="./assets/items/enchanttable.gif" alt="Magic Altar" class="whatsfdo"><br>
                        <div style="margin-top: 10px;">Magic Altar</div>
                    </div>
                </div>
                <div class="col" style="padding: 0px;">
                    <div class="imagesfhave">
                        <img src="./assets/items/cargo.png" alt="Item Transport Systems" class="whatsfdo"><br>
                        <div style="margin-top: 10px;">Cargo Management</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col" style="padding: 0px;">
                    <div class="imagesfhave">
                        <img src="./assets/items/energy.png" alt="Energy Networks" class="whatsfdo"><br>
                        <div style="margin-top: 10px;">Energy Networks</div>
                    </div>
                </div>
                <div class="col" style="padding: 0px;">
                    <div class="imagesfhave">
                        <img src="./assets/items/electric.png" alt="Electric Machines" class="whatsfdo"><br>
                        <div style="margin-top: 10px;">Electric Machines</div>
                    </div>
                </div>
                <div class="col" style="padding: 0px;">
                    <div class="imagesfhave">
                        <img src="./assets/items/android.png" alt="Programmable Androids" class="whatsfdo"><br>
                        <div style="margin-top: 10px;">Programmable Androids</div>
                    </div>
                </div>
                <div class="col" style="padding: 0px;">
                    <div class="imagesfhave">
                        <img src="./assets/items/cookie.png" alt="More Food" class="whatsfdo"><br>
                        <div style="margin-top: 10px;">More Food</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col" style="padding: 0px;">
                    <div class="imagesfhave">
                        <img src="./assets/items/enchironpick.gif" alt="Powerfull Tools" class="whatsfdo"><br>
                        <div style="margin-top: 10px;">Powerfull Tools</div>
                    </div>
                </div>
                <div class="col" style="padding: 0px;">
                    <div class="imagesfhave">
                        <img src="./assets/items/enchhelmet.gif" alt="More Armor" class="whatsfdo"><br>
                        <div style="margin-top: 10px;">More Armor</div>
                    </div>
                </div>
            </div>
            <span style="margin-top: 100px;font-size:18px;">and many, many, many, many more...</span>
            <hr style="height:3px;border-width:0;color:gray;background-color:gray;width:80%;">
            <div class="row">
                <div class="col">
                    <div class="whatsfhavehead">
                        TUTORIAL
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col definisi" style="margin-top:1em;">
                    There are many category in slimefun, include:
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div>(Click Category to go to Tutorial)</div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col">
                    <a href="./tutorial/weapon.php" style="text-decoration: none;">
                    <img src="./assets/items/enchgoldsword.gif" class="resultitem"><br>
                        <div class="nodec">
                            Weapon
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/backpack.png" class="resultitem"><br>
                    <a href="./tutorial/weapon.php" style="text-decoration: none;">
                        <div class="nodec">
                            Useful Items
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/craftingtable.png" class="resultitem"><br>
                    <a href="./tutorial/basicmachine.php" style="text-decoration: none;">
                        <div class="nodec">
                            Basic Machine
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/dimepick.png" class="resultitem"><br>
                    <a href="./tutorial/tools.php" style="text-decoration: none;">
                        <div class="nodec">
                            Tools
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/synsapphire.png" class="resultitem"><br>
                    <a href="./tutorial/resources.php" style="text-decoration: none;">
                        <div class="nodec">
                            Resources
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/cookie.png" class="resultitem"><br>
                    <a href="./tutorial/food.php" style="text-decoration: none;">
                        <div class="nodec">
                            Food
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/runeender.png" class="resultitem"><br>
                    <a href="./tutorial/magicalitems.php" style="text-decoration: none;">
                        <div class="nodec">
                            Magical Items
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/bluehelmet.png" class="resultitem"><br>
                    <a href="./tutorial/magicalarmor.php" style="text-decoration: none;">
                        <div class="nodec">
                            Magical Armor
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/heatingcoil.png" class="resultitem"><br>
                    <a href="./tutorial/technicalcomponent.php" style="text-decoration: none;">
                        <div class="nodec">
                            Technical Component
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/tincan.png" class="resultitem"><br>
                    <a href="./tutorial/misc.php" style="text-decoration: none;">
                        <div class="nodec">
                            Miscellaneous Items
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/enchironchest.gif" class="resultitem"><br>
                    <a href="./tutorial/armor.php" style="text-decoration: none;">
                        <div class="nodec">
                            Armor
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/emerald.png" class="resultitem"><br>
                    <a href="./tutorial/talisman.php" style="text-decoration: none;">
                        <div class="nodec">
                            Talisman (Tier I)
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/enchelytra.gif" class="resultitem"><br>
                    <a href="./tutorial/magicalgadget.php" style="text-decoration: none;">
                        <div class="nodec">
                            Magical Gadget
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/emerald.png" class="resultitem"><br>
                    <a href="./tutorial/endertalisman.php" style="text-decoration: none;">
                        <div class="nodec">
                            Ender Talisman (Tier II)
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/reactor.png" class="resultitem"><br>
                    <a href="./tutorial/energy.php" style="text-decoration: none;">
                        <div class="nodec">
                            Energy And Electricity
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/android.png" class="resultitem"><br>
                    <a href="./tutorial/android.php" style="text-decoration: none;">
                        <div class="nodec">
                            Programmable Android
                        </div>
                    </a>
                </div>
                <div class="col">
                    <img src="./assets/items/cargo.png" class="resultitem"><br>
                    <a href="./tutorial/cargo.php" style="text-decoration: none;">
                        <div class="nodec">
                            Cargo Management
                        </div>
                    </a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">Are you sure want to logout?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary signup" name="logout">Logout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>


<script src="./vendor/jquery/jquery-3.6.0.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</html>