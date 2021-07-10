<?php include('header.php');?>
 
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>PENYEWAAN CAMERA</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
 
	<form action="add_camera.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>id camera</td>
				<td><input type="text" name="id_camera"></td>
			</tr>
			<tr> 
				<td>type camera</td>
				<td><input type="text" name="type_camera"></td>
			</tr>
			<tr>
				<td>merk camera</td>
				<td><input type="text" name="merk_camera"></td>
			</tr>
            <tr>
				<td>harga sewa</td>
				<td><input type="text" name="harga_sewa"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
 
	if(isset($_POST['Submit'])) {
		$id_camera = $_POST['id_camera'];
		$type_camera = $_POST['type_camera'];
		$merk_camera = $_POST['merk_camera'];
        $harga_sewa = $_POST['harga_sewa'];
		
		include("koneksi.php");
		
		$result = mysqli_query($conn, "INSERT INTO camera(id_camera,type_camera,merk_camera,harga_sewa) 
		VALUES('$id_camera','$type_camera','$merk_camera','$harga_sewa')");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>