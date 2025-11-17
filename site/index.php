<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	<h2>Welcome to my website!</h2>
	<p>Some content goes here!</p>

	<h3>
		Hello my name is Richard Thomas.
	</h3>
	<p>
		This is for my DevOps module.
	</p>
	
</div>

<?php include("includes/footer.php");
 echo "hello mate2 ";
include ("DbConnect.php");
 $db= new Dbconnection();
 $conn=$db->connect();
 $db= new Dbconnection();
 
 $conn=$db->connect();
 $stm=$conn->prepare("select * from test");
 $stm->execute();
 $result=$stm->fetchAll(PDO::FETCH_ASSOC);
 echo "<pre>";
 print_r($result);
 echo"</pre>";
?>

</body>
</html>
