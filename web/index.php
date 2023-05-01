<!DOCTYPE html>
<html>
<head>
	<title>Redlock's DB</title>
	<style>
		table {
			font-family: "Times New Roman", serif;
			border-collapse: collapse;
			width: 100%;
		}

		h1 {
			text-align: center;
			color: #0000FF;
		}

		td, th {
			border: 1px solid #000000;
			padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2;}

		tr:hover {background-color: #ddd;}

		th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: middle;
			background-color: #FF0000;
			color: white;
		}
	</style>
</head>
<body>
	<h1>Redlock's DB</h1>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jabatan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// membuat koneksi ke database
            $servername = "mysql_db";
            $username = "root";
            $password = "root";
            $dbname = "redlock";
    
            // Membuat koneksi ke database
            $conn = new mysqli($servername, $username, $password, $dbname);
    
            // Mengecek apakah koneksi berhasil
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

			$sql = "SELECT * FROM users";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data dari setiap baris
			    while($row = $result->fetch_assoc()) {
			        echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Nama"]. "</td><td>" . $row["Alamat"]. "</td><td>" . $row["Jabatan"]. "</td></tr>";
			    }
			} else {
			    echo "0 results";
			}
			$conn->close();
			?>
		</tbody>
	</table>
</body>
</html>

