<html>
	<body>
		<form method="post">
			<input type='number' name='id'/>
			<input type='text' name='name'/>
			<input type='submit' name='sub' value='submit'>
			
		</form>
	</body>
</html>
<?php

if(isset($_POST["sub"]))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	
	global $wpdb;
	$sql=$wpdb->insert('test',array("id"=>$id,"name"=>$name));
	if($sql==true)
	{
		echo "<script>alert('inserted');</script>";
	}
}


?>
