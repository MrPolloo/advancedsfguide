<script> 
var image = document.getElementById('itemsimage');
</script>
<?php
include('../class/DB.php');

$items = $_GET['items'];

$oak = array(1,2);
$bow = array(5,6);
$bowl = array(22,23);
$ironsword = array(3);
$engoldsword = array(4);
$enironpick = array(27,30);
$ironpick = array(32);
$lead = array(24);
$dimepick = array(25,28,29,31);
$dimeaxe = array(26);
if(in_array($items,$oak)){?>
<script> image.src = "./assets/items/enchstick.gif";</script>
<?php } else if(in_array($items,$bow)){ ?>
<script> image.src = "./assets/items/bow.png"; </script>
<?php } else if(in_array($items,$ironsword)){ ?>
<script> image.src = "./assets/items/ironsword.png"; </script>
<?php } else if(in_array($items,$engoldsword)){ ?>
<script> image.src = "./assets/items/enchgoldsword.gif";;</script>
<?php } else if(in_array($items,$bowl)){ ?>
<script> image.src = "./assets/items/bowl.png";;</script>
<?php } else if(in_array($items,$lead)){ ?>
<script> image.src = "./assets/items/lead.png";;</script>
<?php } else if(in_array($items,$dimepick)){ ?>
<script> image.src = "./assets/items/dimepick.png";;</script>
<?php } else if(in_array($items,$enironpick)){ ?>
<script> image.src = "./assets/items/enchironpick.gif";;</script>
<?php } else if(in_array($items,$ironpick)){ ?>
<script> image.src = "./assets/items/ironpick.png";;</script>
<?php } else if(in_array($items,$dimeaxe)){ ?>
<script> image.src = "./assets/items/dimeaxe.png";;</script>
<?php } ?>