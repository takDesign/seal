<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="loginform">
<form method="post" action="../index.php">
	<!-- <form method="post" action="index.php"> -->
		<input type="hidden" name="controller" value="outside">
		<input type="hidden" name="route" value="processlogin">

		<input type="text" name="username" value="" placeholder="enter username"><Br/>
		<input type="text" name="password" value="" placeholder="enter password"><Br/>

		<input type="submit">
	</form>
</body>
</html>