<?php 
define("title","Menu");
include("includes/header.php");

if(isset($_GET['item']));
{
$menuitem=$_GET['item'];
$dish=$menuitems[$menuitem];

}
?> 
<div id="dish">
<hr>
<h1> <?php echo $dish[ingrediants]; ?></h1>
<hr>
</div>
<?php include ("includes/footer.php"); ?>