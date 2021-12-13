<html>
 <head>
        <style>
            input {
            width: 100%;
            height:100%;
            }
        </style>
    </head>
	<body style="text-align:center;">
		<form method="post" enctype="multipart/form-data" >
				<center>
				<h2> Register</h2>
				<table>
					<tr>
					  <td>Name: </td>
					  <td><input type="text" id="pname" name="pname" placeholder="Enter Name" ></td>
					</tr>
					<tr>
						<td>Profile Pic:</td>
						<td><input type="file" id="img" name="img[]" multiple id="uc3"></td>
					</tr>
					<tr>
					  <td>Contact Number : </td>
					  <td><input type="text" id="phone" name="phone" placeholder="Enter Mobile No." ></td>
					</tr>
					<tr>
					  <td>Email id: </td>
					  <td><input type="email" id="mail" name="mail" placeholder="Enter Email id" ></td>
					</tr>
					<tr>
					  <td>D.O.B: </td>
					  <td><input type="date" id="dob" name="dob"  ></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="Submit" name="submit"></td>
					</tr>
				</table>
				</center>

			
		</form>
	</body>
</html>
<?php
	if(isset($_POST["submit"]))
	{
		for($i=0;$i<count($_FILES["img"]["name"]);$i++)
	{
		$filetmp=$_FILES["img"]["tmp_name"][$i];
		$filename=$_FILES["img"]["name"][$i];
		$filetype=$_FILES["img"]["type"][$i];
		$filepath="images/".$filename;
		move_uploaded_file($filetmp,$filepath);
		
		$Name=$_POST["pname"];
	   
		$Mobile=$_POST["phone"];
		$Email=$_POST["mail"];
		$DOB=$_POST["dob"];
		global $wpdb;
		$sql=$wpdb->insert("wp_participantdata",array("id"=>null,"pname"=>$Name,"profilephoto"=>$filepath,"mobileno"=>$Mobile,"email"=>$Email,"dob"=>$DOB));
		if($sql==true)
		{
			echo "<script>alert('inserted sucessfully Data');</script>";
		}
	}
		
		
	}
?>
