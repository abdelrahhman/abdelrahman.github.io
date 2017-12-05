<?php
define("title","Menu");
include("includes/header.php");
?>

 <div id="menu-items">
 <h1>  our menu  </h1>
 <p> chose form our dishes ;</p>
 <hr>
 <ul>
 <?php foreach($menuitems as $dish=> $item ){?>
 <li>
 <a href="dish.php?item=<?php echo$dish;?>">
 <?php 
 echo $dish;
 ?>
 </a>
 <sup>$</sup>
 <?php
echo $item[price]; 
 ?>
 </a>
 </li>
 <?php
 }
 ?>
 </ul>
 </div>
 <?php include("includes/footer.php");
?>