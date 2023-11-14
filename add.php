<html>
<head>
	<title>Add Users</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="eksternal.css">
    <title>Action add php</title>
</head>
 
<body>
	<a href="index.php">Ke Index php</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%";border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
            <tr> 
				<td>ID</td>
				<td><input type="number" name="id"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Status</td>
				<td>
                <select name="statusUser">
                <option value="aktif">Aktif</option>
                <option value="tidak aktif">Tidak Aktif</option>
            </select>
                </td>
			</tr>
		</table>
        <button class="btn btn-primary" type="submit"><font5>Tambah</font5></button>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $status = $_POST['statusUser'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO user_admin(nama,id,email,statusUser) VALUES('$nama','$id','$email','statusUser')");
		
		// Show message when user added
		echo "Data berhasil ditambahkan. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>