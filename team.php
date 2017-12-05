<?php 
define("title","Team");
include("includes/header.php");

?>
<div id="team-memers" class="cf">
<h1> Our Team members</h1>


<hr>
<?php
 foreach($TeamMembers as $TeamMember)
{


?>
<div class="member">
<img src="img/<?php echo $TeamMember[img];?>.jpg">
<h2><?php echo $TeamMember[name];?></h2>
<h2><?php echo $TeamMember[position];?></h2>
</div>
<?php
}
?>
</div>
<hr>
<?php 
include("includes/footer.php");

?>