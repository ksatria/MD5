<html>
	<head>
		<title>Tes MD5</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
		<style type="text/css">
			body{
				margin-top: 50px;
			}
			
			#plain-text{
				font-weight: bold;
				font-size: 17px;
			}
			
			div.center{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="hero-unit">
				<h1>MD5 Encryptor</h1>
				<p>Aplikasi enkripsi MD5 sederhana</p>
				<p><small>Oleh <a href="http://www.facebook.com/umam.ksatria" target="_blank">Khoirul Umam</a></small></p>
			</div>
			<div class="center">
				<form method="post">
					<input type="text" name="input" id="plain-text" class="input-block-level" placeholder="Masukkan teks yang akan dienkripsi di sini...">
					<input type="submit" value="Enkripsi" class="btn btn-primary btn-large">
				</form>
				
				<?PHP
					$input = $_POST["input"];
					$hasil = md5($input);
					
					if(isset($input)){
						echo "<p class=\"lead\">Hasil enkripsi <strong>".$input."</strong>:</p>";
						echo "<div class=\"alert alert-info lead\">".$hasil."</div>";
					}
				?>
			</div>
		</div>
	</body>
</html>