<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_camera'];
	
	$id_camera=$_POST['id_camera'];
	$type_camera=$_POST['type_camera'];
	$merk_camera=$_POST['merk_camera'];
	$harga_sewa=$_POST['harga_sewa'];
		
	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE camera SET id_camera='$id_camera',type_camera='$type_camera',merk_camera='$merk_camera',harga_sewa='$harga_sewa' 
	WHERE id_camera=$id");

    header("Location: index.php");
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data camera</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM camera WHERE id_camera=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_camera = $user_data['id_camera'];
	$type_camera = $user_data['type_camera'];
	$merk_camera = $user_data['merk_camera'];
	$harga_sewa = $user_data['harga_sewa'];
}
?>
<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_camera.php">
		<table border="0">
			<tr> 
				<td>ID camera</td>
				<td><input type="text" name="id_camera" value=<?php echo $id_camera;?>></td>
			</tr>
			<tr> 
				<td>type camera</td>
				<td><input type="text" name="type_camera" value=<?php echo $type_camera;?>></td>
			</tr>
			<tr> 
				<td>merk camera</td>
				<td><input type="text" name="merk_camera" value=<?php echo $merk_camera;?>></td>
			</tr>
			<tr> 
				<td>harga sewa</td>
				<td><input type="text" name="harga_sewa" value=<?php echo $harga_sewa;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html>