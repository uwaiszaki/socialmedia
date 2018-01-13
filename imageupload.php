<!DOCTYPE html>
<html>
<head>
	<title>Upload Picture</title>
	<style type="text/css">
		
		*{
			background:url("websiteb.jpg");
		}

	</style>
</head>
<body>
<h1>Upload Image</h1>
<form  action="upload2.php"  enctype="multipart/form-data" method="POST">  
	
<input type="file"  name="pic"  value="Input Pic" >  <br>
<input type="submit" >

</form>


</body>
</html>