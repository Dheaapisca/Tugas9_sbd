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
 
	<form action="add_pembayaran.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>id camera</td>
				<td><input type="text" name="id_camera"></td>
			</tr>
			<tr> 
				<td>id bayar</td>
				<td><input type="text" name="id_bayar"></td>
			</tr>
			<tr>
				<td>tanggal bayar</td>
				<td><input type="text" name="tanggal_bayar"></td>
			</tr>
            <tr>
				<td>jumlah bayar</td>
				<td><input type="text" name="jumlah_bayar"></td>
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
		$id_bayar = $_POST['id_bayar'];
		$tanggal_bayar = $_POST['tanggal_bayar'];
        $jumlah_bayar = $_POST['jumlah_bayar'];
		
		include("koneksi.php");
		
		$result = mysqli_query($conn, "INSERT INTO pembayaran(id_camera,id_bayar,tanggal_bayar,jumlah_bayar) 
		VALUES('$id_camera','$id_bayar','$tanggal_bayar','$jumlah_bayar')");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>