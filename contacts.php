<?php 
define ("title","Contacts");
include("includes/header.php");
?>
<?php
if(isset($_POST["button-sub"]))
{
$name=$_POST["name"];
$mail=$_POST["mail"];
$msg=$_POST["msg"];
if(!$name||!$mail||!$msg)
{
echo '<h4 class="error"> All field required</h4> <a class="button block" href="contacts.php">Go back to form</a>';
exit;

}
else{
echo('<h4>thank u for send ur message </h4> <a class="button" href="contacts.php">Go back to the contacts page</a>');
exit;
}
}
?>


<div id="contact">
<hr>
<h1>Get touch with us</h1>
<form method="post" action="" id="contact-form">
<label>  name </label>
<input type="text" id="name" name="name"/>
<label>email</label>
<input type="email" id="mail" name="mail"/>
<label > Message </label>
<textarea id="msg" name="msg"></textarea>
<input type="checkbox" id="subscribe" name="subscribe"/>
<label>Subscribe for new news</label>
<input type="submit" class="button next" value="Submit"name=" button-sub"/>

</form>
</div>
<?php include("includes/footer.php");?>