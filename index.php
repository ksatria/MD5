<html>
	<head>
		<title>Tes MD5</title>
	</head>
	<body>
		<form method="post" action="#">
			<label>Masukkan kalimat yang akan dienkripsikan</label><br>
			<input type="text" name="input">
			<input type="submit" value="Proses">
		</form>
		
		<?PHP
			$input = $_POST["input"];
			$hasil = md5($input);
			
			if(isset($input)){
				echo "Hasil enkripsi :<br>";
				echo "$hasil";
			}
		?>
	</body>
</html>