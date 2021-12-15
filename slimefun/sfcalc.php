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
    <title>SF Calc - Advanced Slimefun</title>
    <link rel="icon" href="../assets/sf.png">
    <link rel="stylesheet" href="./style/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor/bootstrap/js/bootstrap.min.js">
    <script src="./scripts/sfcalcimg.js"></script>
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
<script>
    function callrecipe() {
        var items = document.getElementById("items").value;
        var totalitem = document.getElementById("totalitem").value;
        $.ajax({
            url: "./scripts/recipe.php?items=" + items + "&totalitem=" + totalitem
        }).done(function (data) { // data what is sent back by the php page
            $('#recipes').html(data); // display data
        });
    }
</script>
<script>
    function showImg() {
        var items = document.getElementById("items").value;
        var image = document.getElementById("itemsimage");
        document.getElementById("totalitem").style.marginTop = "20px";
        image.style.border = "thick solid rgb(85, 85, 85)";
        image.style.borderRadius = "30px";
        image.style.width = "17%";
        image.style.backgroundColor = "white";
        document.getElementById('name').innerHTML = document.getElementById('items').selectedOptions[0].innerHTML;
        $.ajax({
            url: "./scripts/sfcalcimg.php?items=" + items
        }).done(function (data) { // data what is sent back by the php page
            $('#itemsimage').html(data); // display data
        });
    }
</script>

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
                <div class="col sfcalctext" style="font-size: 17px;">Category</div>
                <div class="col sfcalctext" style="font-size: 17px;">Items</div>
            </div>
            <div class="row">
                <div class="col">
                    <select class="categoryitems" id="category" style="text-align: center;" name="category" required>
                        <option value="">Category</option>
                    </select>
                </div>
                <div class="col">
                    <select class="categoryitems" id="items" style="text-align: center;" name="items"
                        onchange="showImg();" required>
                        <option value="">Items</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col text-center sfcalctext" id="name">You Need</div>
            </div>

            <div class="row">
                <div class="col itemimage">
                    <img id="itemsimage" src="" alt="">
                </div>
            </div>
            <div>
                <input class="inputitems" type="number" name="totalitem" id="totalitem" min="1" placeholder="Items"
                    required>
            </div>
            <input type="submit" name="submit" class="submitcalc" onclick="callrecipe();"><br />
            <div id="recipes">

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
<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            type: 'POST',
            url: "get/get_category.php",
            cache: false,
            success: function (msg) {
                $("#category").html(msg);
            }
        });

        $("#category").change(function () {
            var category = $("#category").val();
            $.ajax({
                type: 'POST',
                url: "get/get_items.php",
                data: {
                    category: category
                },
                cache: false,
                success: function (msg) {
                    $("#items").html(msg);
                }
            });
        });
    });
</script>

</html>