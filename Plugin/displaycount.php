
<html>
<?php
 $id=$_GET['select'];
 
	global $wpdb;
	$sql="select * from test where id=$id";
	$result=$wpdb->get_results($sql);
	
?>
<body>
<center>
<table border=4>
<tr>
<th>id</th>
<th>Name</th>

</tr>

<?php 


foreach($result as $qry1)
{
	$res=$qry1->id;
?>
<tr>
<td>
<?php echo $res;?>
</td>
<td>
<?php echo $qry1->name;?>
</td>

</tr>
<?php 

}
?>
</table>
</center>
</body>
</html>
