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
 
	<form action="add_penyewa.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID penyewa</td>
				<td><input type="text" name="id_penyewa"></td>
			</tr>
            <tr> 
				<td>nama penyewa</td>
				<td><input type="text" name="nama_penyewa"></td>
			</tr>
			<tr> 
				<td>no telpon</td>
				<td><input type="text" name="no_telpon"></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
            <tr>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
 
	if(isset($_POST['Submit'])) {
        $id_penyewa = $_POST['id_penyewa'];
		$nama_penyewa = $_POST['nama_penyewa'];
		$no_telpon = $_POST['no_telpon'];
		$alamat = $_POST['alamat'];
		
		include("koneksi.php");
		
		$result = mysqli_query($conn, "INSERT INTO penyewa(id_penyewa,nama_penyewa,no_telpon,alamat) 
		VALUES('$id_penyewa','$nama_penyewa','$no_telpon','$alamat')");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>