<?php
include('../class/DB.php');

$items = $_GET['items'];            
if(!empty($_GET['totalitem'])){
    $total = $_GET['totalitem'];
} else {
    $total = 1;
}

$result2 = array(9,81,84);                           //if result != 1
if(in_array($items,$result2)){
    $total = round($total/2,0,PHP_ROUND_HALF_UP);
}

$i=0;
$itemrecipe = DB::query('SELECT recipe FROM recipes WHERE items_id=:items', array(':items'=>$items));
$amount = DB::query('SELECT amount FROM recipes WHERE items_id=:items', array(':items'=>$items));

$glowstone = array("Copper Dust","Gold Dust");
$gunpowder = array("Iron Dust","Lead Dust","Gunpowder","Sifted Ore");
$sugar = array("Tin Dust","Silver Dust","Aluminum Dust","Zinc Dust","Magnesium", "Sugar");
?>
<div class="row">
    <?php foreach($amount as $data){
?>
    <div class="col">
        <?php if(in_array($itemrecipe[$i]['recipe'],$glowstone)){ ?>
        <img src="../assets/items/glowstone.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if(in_array($itemrecipe[$i]['recipe'],$gunpowder)){ ?>
        <img src="../assets/items/gunpowder.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if(in_array($itemrecipe[$i]['recipe'],$sugar)){ ?>
        <img src="../assets/items/sugar.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Netherrack"){ ?>
        <img src="../assets/items/netherrack.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Iron Ingot"){ ?>
        <img src="../assets/items/ironingot.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Redstone Dust"){ ?>
        <img src="../assets/items/redstone.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Oak Log"){ ?>
        <img src="../assets/items/oaklog.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Stick"){ ?>
        <img src="../assets/items/stick.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Nether Wart"){ ?>
        <img src="../assets/items/netherwart.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Book"){ ?>
        <img src="../assets/items/book.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Blaze Powder"){ ?>
        <img src="../assets/items/blazepowder.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Flint And Steel"){ ?>
        <img src="../assets/items/flintsteel.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Coal"){ ?>
        <img src="../assets/items/coal.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Leather"){ ?>
        <img src="../assets/items/leather.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Dirt"){ ?>
        <img src="../assets/items/dirt.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Stone"){ ?>
        <img src="../assets/items/stone.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Obsidian"){ ?>
        <img src="../assets/items/obsidian.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Emerald"){ ?>
        <img src="../assets/items/emerald.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Blaze Rod"){ ?>
        <img src="../assets/items/blazerod.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Wither Skeleton Skull"){ ?>
        <img src="../assets/items/witherskull.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Ice"){ ?>
        <img src="../assets/items/ice.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Packed Ice"){ ?>
        <img src="../assets/items/packedice.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Lily Pad"){ ?>
        <img src="../assets/items/lily.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Crafting Table"){ ?>
        <img src="../assets/items/craftingtable.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="White Wool"){ ?>
        <img src="../assets/items/whitewool.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="String"){ ?>
        <img src="../assets/items/string.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Red Mushroom"){ ?>
        <img src="../assets/items/redmushroom.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Apple"){ ?>
        <img src="../assets/items/apple.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Milk Bucket"){ ?>
        <img src="../assets/items/milkbucket.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Glass Bottle"){ ?>
        <img src="../assets/items/glassbottle.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Chest"){ ?>
        <img src="../assets/items/chest.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Yellow Dye"){ ?>
        <img src="../assets/items/yellowdye.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Silicon"){ ?>
        <img src="../assets/items/silicon.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Bowl"){ ?>
        <img src="../assets/items/bowl.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Nether Brick"){ ?>
        <img src="../assets/items/netherbrick.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Glass"){ ?>
        <img src="../assets/items/glass.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Lapis Lazuli"){ ?>
        <img src="../assets/items/lapis.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Flint"){ ?>
        <img src="../assets/items/flint.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Glass Pane"){ ?>
        <img src="../assets/items/glasspane.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="TNT"){ ?>
        <img src="../assets/items/tnt.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Compass"){ ?>
        <img src="../assets/items/compass.gif" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Emerald Ore"){ ?>
        <img src="../assets/items/emeore.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Block Of Quartz"){ ?>
        <img src="../assets/items/blockquartz.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Block Of Redstone"){ ?>
        <img src="../assets/items/blockredstone.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Sand"){ ?>
        <img src="../assets/items/sand.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Nether Star"){ ?>
        <img src="../assets/items/netherstar.gif" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Nether Ice"){ ?>
        <img src="../assets/items/netherice.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Bucket"){ ?>
        <img src="../assets/items/bucket.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Eye Of Ender"){ ?>
        <img src="../assets/items/eyeender.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Flask Of Knowledge"){ ?>
        <img src="../assets/items/bottleench.gif" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Fire Charge"){ ?>
        <img src="../assets/items/charge.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Raw Salmon"){ ?>
        <img src="../assets/items/rawsalmon.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Raw Cod"){ ?>
        <img src="../assets/items/rawcod.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Water Bucket"){ ?>
        <img src="../assets/items/waterbucket.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Feather"){ ?>
        <img src="../assets/items/feather.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } else if($itemrecipe[$i]['recipe']=="Ghast Tear"){ ?>
        <img src="../assets/items/ghasttear.png" class="resultitem"><br>
        <?php echo $data['amount']*$total ." ". $itemrecipe[$i]['recipe'];
    } 
    else {
        echo $itemrecipe[$i]['recipe'];
    }
    $i++; ?>
    </div>
    <?php } ?>
</div>