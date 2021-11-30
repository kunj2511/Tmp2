<html>
<?php
	global $wpdb;
	$sql="select * from test";
	$result=$wpdb->get_results($sql);
?>
<body>

	<?php
		foreach($result as $li)
		{
			echo $li->id;
			echo $li->name;
		}
		?>
</body>
</html>