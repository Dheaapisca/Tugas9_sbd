<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_penyewa'];
	
	$id_penyewa=$_POST['id_penyewa'];
	$nama_penyewa=$_POST['nama_penyewa'];
	$no_telpon=$_POST['no_telpon'];
	$alamat=$_POST['alamat'];
		
	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE penyewa SET id_penyewa='$id_penyewa',nama_penyewa='$nama_penyewa',no_telpon='$no_telpon',alamat='$alamat' 
	WHERE id_penyewa=$id");

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

$result = mysqli_query($conn, "SELECT * FROM penyewa WHERE id_penyewa=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_penyewa = $user_data['id_penyewa'];
	$nama_penyewa = $user_data['nama_penyewa'];
	$no_telpon= $user_data['no_telpon'];
	$alamat = $user_data['alamat'];
}
?>
<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_penyewa.php">
		<table border="0">
			<tr> 
				<td>ID penyewa</td>
				<td><input type="text" name="id_penyewa" value=<?php echo $id_penyewa;?>></td>
			</tr>
			<tr> 
				<td>nama </td>
				<td><input type="text" name="nama_penyewa" value=<?php echo $nama_penyewa;?>></td>
			</tr>
			<tr> 
				<td>no Telepon</td>
				<td><input type="text" name="no_telpon" value=<?php echo $no_telpon;?>></td>
			</tr>
			<tr> 
				<td>alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
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