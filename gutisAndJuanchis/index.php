<?php session_start();
 
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
	<?php include '../lib/php/header.php' ?>

</head>
<body>
			

	<p>Hello,<?php echo $_SESSION['token']; ?></p>
	<p>	<?php echo 	$_SESSION['email']=$res->email;		?></p>
	<p>	<?php echo 	$_SESSION['id']=$res->id;		?></p>
	<p>	<?php echo 	$_SESSION['verified_email']=$res->verified_email;		?></p>
	<p>	<?php echo 	$_SESSION['name']=$res->name;		?></p>
	<p>	<?php echo 	$_SESSION['given_name']=$res->given_name;		?></p>
	<p>	<?php echo 	$_SESSION['family_name']=$res->family_name;		?></p>
	<p>	<?php echo 	$_SESSION['link']=$res->link;		?></p>
	<p>	<?php echo 	$_SESSION['picture']=$res->picture;		?></p>
	<p>	<?php echo 	$_SESSION['gender']=$res->gender;		?></p>
	<p>	<?php echo 	$_SESSION['locale']=$res->locale;		?></p>
	
</body>
	
	<?php include '../lib/php/footer.php' ?>
</html>