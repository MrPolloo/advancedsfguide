<?php
include('../class/Login.php');
if (!Login::isLoggedIn()){
    header("location: ../index.php");
}

if (isset($_POST['logout'])) {
    DB::query('DELETE FROM logintoken WHERE userid=:userid', array(':userid'=>Login::isLoggedIn()));
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weapon</title>
    <link rel="stylesheet" href="../style/main.css">
    <link rel="icon" href="../assets/sf.png">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/bootstrap/js/bootstrap.min.js">
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

<body style="background-image: url('../assets/stone.jpg');">
    <!-- NAVBAR -->
    <div class="container-fluid bgdirt">
        <nav class="row navbar navbar-expand-lg navbar-light">
            <a href="../beranda.php" class="navbar-brand">
                <img src="../assets/logo.png" alt="" style="height: 50px;">
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb" style="z-index: 2;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-md-4">
                        <a href="../beranda.php" class="nav-link " style="margin-top: 5px;">
                            <span class="navtext">
                                HOME
                            </span>
                        </a>
                    </li>
                    <!-- <li class="nav-item mx-md-4">
                        <a href="../electricity.php" class="nav-link " style="margin-top: 5px;">
                            <span class="navtext">
                                ELECTRICITY
                            </span>
                        </a>
                    </li> -->
                    <li class="nav-item mx-md-4">
                        <a href="../sfcalc.php" class="nav-link" style="margin-top: 5px;">
                            <span class="navtext">
                                SFCALC
                            </span>
                        </a>
                    </li>
                    <li class="nav-item mx-md-4">
                        <a href="../tutorial.php" class="nav-link" style="margin-top: 5px;">
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
                            <img class="img-profile rounded-circle" src="../assets/grass.png">
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
        <div class="tutorialbg">
            <div class="row">
                <div class="row">
                    <div class="col-9">
                        <div class="col tutorialdetailhead">
                            Weapon
                        </div>
                        <div class="col">
                            <div class="isitutorial">
                                <span style="font-weight:bolder;">Weapon Category - </span>
                                <span>contains various items which can be used as weapons and some weapon has
                                    enchantment higher than
                                    vanilla enchantment and unique enchantment.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-2 ml-4 mr-4">
                        <div class="row">
                            <div class="col headimangetutorial">
                                Weapon
                            </div>
                        </div>
                        <div class="row">
                            <div class="col" style="border: solid 2px #008542;">
                                <img src="../assets/items/enchgoldsword.gif" alt="Weapon Icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ml-3 mt-4" style="margin: auto;">
                <div class="headcontent">
                    Content
                </div>
            </div>
            <div class="ml-3">
                <div class="isicontent">
                    <ul>
                        <?php $category = DB::query('SELECT items FROM items WHERE category_id=:category',array(':category'=>1));
                        foreach($category as $data){ ?>
                        <a href="#<?php echo $data['items'];?>" style="text-decoration: none;">
                            <li class="nodec"><?php echo $data['items']; ?></li>
                        </a>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="tutorialdetailhead" id="Grandmas%20Walking%20Stick" style="margin-top:30px; font-size:25px;">
                Grandmas Walking Stick
            </div>
            <hr>
            <div class="isitutorial">
                A stick that can be a weapon to punch out your opponent far away!. Grandma use this stick to land a hit
                to make sure opponent keep distance from her.
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-2 definitiontable">
                    Icon
                </div>
                <div class="col-3 definitiontable">
                    Processed At
                </div>
                <div class="col definitiontable">
                    Recipe
                </div>
            </div>
            <div class="row">
                <div class="col-2 isidefinitiontable">
                    <img src="../assets/items/enchstick.gif" alt="Grandmas Walking Stick" class="imgicon">
                </div>
                <div class="col-3 isidefinitiontable">
                    <img src="../assets/items/craftingtable.png" alt="Grandmas Walking Stick" class="imgicon"><br>
                    Enhanced Crafting Table
                </div>
                <div class="col isidefinitiontable">
                    <div id="recipes">
                        <?php $recipe = DB::query('SELECT * FROM recipes WHERE items_id=:items_id',array(':items_id'=>1));
                        foreach($recipe as $data){ ?>
                        <li><?php echo $data['amount'] ." ". $data['recipe'];?></li>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="tutorialdetailhead" id="Grandpas%20Walking%20Stick" style="margin-top:30px; font-size:25px;">
                Granpas Walking Stick
            </div>
            <hr>
            <div class="isitutorial">
                A stick that can be a weapon to punch out your opponent further then Grandma!. Grandpa use this stick to
                pretect his beloved one.
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-2 definitiontable">
                    Icon
                </div>
                <div class="col-3 definitiontable">
                    Processed At
                </div>
                <div class="col definitiontable">
                    Recipe
                </div>
            </div>
            <div class="row">
                <div class="col-2 isidefinitiontable">
                    <img src="../assets/items/enchstick.gif" alt="Granpas Walking Stick" class="imgicon">
                </div>
                <div class="col-3 isidefinitiontable">
                    <img src="../assets/items/craftingtable.png" alt="Granpas Walking Stick" class="imgicon"><br>
                    Enhanced Crafting Table
                </div>
                <div class="col isidefinitiontable">
                    <div id="recipes">
                        <?php $recipe = DB::query('SELECT * FROM recipes WHERE items_id=:items_id',array(':items_id'=>2));
                        foreach($recipe as $data){ ?>
                        <li><?php echo $data['amount'] ." ". $data['recipe'];?></li>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="tutorialdetailhead" id="Sword%20Of%20Beheading" style="margin-top:30px; font-size:25px;">
                Sword Of Beheading
            </div>
            <hr>
            <div class="isitutorial">
                It is an Iron Sword enchanted with Beheading II, which has a chance to drop a Player's or Mob's head
                upon killing them.
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-2 definitiontable">
                    Entity Type
                </div>
                <div class="col-sm-1 definitiontable">
                    Chance
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 isidefinitiontable">
                    Player
                </div>
                <div class="col-sm-1 isidefinitiontable">
                    70%
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 isidefinitiontable">
                    Creeper
                </div>
                <div class="col-sm-1 isidefinitiontable">
                    40%
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 isidefinitiontable">
                    Skeleton
                </div>
                <div class="col-sm-1 isidefinitiontable">
                    40%
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 isidefinitiontable">
                    Zombie
                </div>
                <div class="col-sm-1 isidefinitiontable">
                    40%
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 isidefinitiontable">
                    Wither Skeleton Skull
                </div>
                <div class="col-sm-1 isidefinitiontable">
                    25%
                </div>
            </div>
            <div class="isitutorial">
                Note : If you are using the ExtraHeads addon, it also increases your chance to obtain heads from other
                mobs.
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-2 definitiontable">
                    Icon
                </div>
                <div class="col-3 definitiontable">
                    Processed At
                </div>
                <div class="col definitiontable">
                    Recipe
                </div>
            </div>
            <div class="row">
                <div class="col-2 isidefinitiontable">
                    <img src="../assets/items/ironsword.png" alt="Sword Of Beheading" class="imgicon">
                </div>
                <div class="col-3 isidefinitiontable">
                    <img src="../assets/items/craftingtable.png" alt="Sword Of Beheading" class="imgicon"><br>
                    Enhanced Crafting Table
                </div>
                <div class="col isidefinitiontable">
                    <div id="recipes">
                        <?php $recipe = DB::query('SELECT * FROM recipes WHERE items_id=:items_id',array(':items_id'=>3));
                        foreach($recipe as $data){ ?>
                        <li><?php echo $data['amount'] ." ". $data['recipe'];?></li>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="tutorialdetailhead" id="Blade%20Of%20Vampires" style="margin-top:30px; font-size:25px;">
                Blade Of Vampires
            </div>
            <hr>
            <div class="isitutorial">
                It is a Gold Sword which is enchanted with Fire Aspect II, Sharpness II and Unbreaking IV.
                It also has Life Steal, which gives you a 45% chance to recover 2 Hearts of your Health each time you
                attack something with it.
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-2 definitiontable">
                    Icon
                </div>
                <div class="col-3 definitiontable">
                    Processed At
                </div>
                <div class="col definitiontable">
                    Recipe
                </div>
            </div>
            <div class="row">
                <div class="col-2 isidefinitiontable">
                    <img src="../assets/items/enchgoldsword.gif" alt="Blade Of Vampires" class="imgicon">
                </div>
                <div class="col-3 isidefinitiontable">
                    <img src="../assets/items/craftingtable.png" alt="Blade Of Vampires" class="imgicon"><br>
                    Magic Workbench
                </div>
                <div class="col isidefinitiontable">
                    <div id="recipes">
                        <?php $recipe = DB::query('SELECT * FROM recipes WHERE items_id=:items_id',array(':items_id'=>4));
                        foreach($recipe as $data){ ?>
                        <li><?php echo $data['amount'] ." ". $data['recipe'];?></li>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="tutorialdetailhead" id="Explosive%20Bow" style="margin-top:30px; font-size:25px;">
                Explosive Bow
            </div>
            <hr>
            <div class="isitutorial">
                Arrows fired by the Explosive Bow launch the Player or Mob they hit into the air.
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-2 definitiontable">
                    Icon
                </div>
                <div class="col-3 definitiontable">
                    Processed At
                </div>
                <div class="col definitiontable">
                    Recipe
                </div>
            </div>
            <div class="row">
                <div class="col-2 isidefinitiontable">
                    <img src="../assets/items/bow.png" alt="Explosive Bow" class="imgicon">
                </div>
                <div class="col-3 isidefinitiontable">
                    <img src="../assets/items/craftingtable.png" alt="Explosive Bow" class="imgicon"><br>
                    Magic Workbench
                </div>
                <div class="col isidefinitiontable">
                    <div id="recipes">
                        <?php $recipe = DB::query('SELECT * FROM recipes WHERE items_id=:items_id',array(':items_id'=>5));
                        foreach($recipe as $data){ ?>
                        <li><?php echo $data['amount'] ." ". $data['recipe'];?></li>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="tutorialdetailhead" id="Icy%20Bow" style="margin-top:30px; font-size:25px;">
                Icy Bow
            </div>
            <hr>
            <div class="isitutorial">
            Arrows fired by the Icy Bow prevent the Player or Mob they hit from moving for 2 seconds. They will be immune to freezing for 5 seconds afterwards.
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-2 definitiontable">
                    Icon
                </div>
                <div class="col-3 definitiontable">
                    Processed At
                </div>
                <div class="col definitiontable">
                    Recipe
                </div>
            </div>
            <div class="row">
                <div class="col-2 isidefinitiontable">
                    <img src="../assets/items/bow.png" alt="Icy Bow" class="imgicon">
                </div>
                <div class="col-3 isidefinitiontable">
                    <img src="../assets/items/craftingtable.png" alt="Icy Bow" class="imgicon"><br>
                    Magic Workbench
                </div>
                <div class="col isidefinitiontable">
                    <div id="recipes">
                        <?php $recipe = DB::query('SELECT * FROM recipes WHERE items_id=:items_id',array(':items_id'=>6));
                        foreach($recipe as $data){ ?>
                        <li><?php echo $data['amount'] ." ". $data['recipe'];?></li>
                        <?php } ?>
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


<script src="../vendor/jquery/jquery-3.6.0.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</html>