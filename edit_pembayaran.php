<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_camera'];
	
	$id_camera=$_POST['id_camera'];
	$id_bayar=$_POST['id_bayar'];
	$tanggal_bayar=$_POST['tanggal_bayar'];
	$jumlah_bayar=$_POST['jumlah_bayar'];
		
	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE pembayaran SET id_camera='$id_camera',id_bayar='$id_bayar',tanggal_bayar='$tanggal_bayar',jumlah_bayar='$jumlah_bayar' 
	WHERE id_camera=$id");

    header("Location: index.php");
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data pembayaran</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM pembayaran WHERE id_camera=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_camera = $user_data['id_camera'];
	$id_bayar = $user_data['id_bayar'];
	$tanggal_bayar = $user_data['tanggal_bayar'];
	$jumlah_bayar = $user_data['jumlah_bayar'];
}
?>
<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_pembayaran.php">
		<table border="0">
			<tr> 
				<td>ID camera</td>
				<td><input type="text" name="id_camera" value=<?php echo $id_camera;?>></td>
			</tr>
			<tr> 
				<td>id bayar</td>
				<td><input type="text" name="id_bayar" value=<?php echo $id_bayar;?>></td>
			</tr>
			<tr> 
				<td>tanggal bayar</td>
				<td><input type="text" name="tanggal_bayar" value=<?php echo $tanggal_bayar;?>></td>
			</tr>
			<tr> 
				<td>jumlah bayar</td>
				<td><input type="text" name="jumlah_bayar" value=<?php echo $jumlah_bayar;?>></td>
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