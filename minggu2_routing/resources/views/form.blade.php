<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
<body>
 
	<form action="/form/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Nama :
		<input type="text" name="nama"> <br/>
		Alamat :
		<input type="text" name="alamat"> <br/>
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>