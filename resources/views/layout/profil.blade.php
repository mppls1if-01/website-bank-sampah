<?php
	$profil->getUser();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trashy</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<h2>Profil Diri</h2>
	<table class="table">
		<tr>
			<td>Nama</td>
            <td>:</td>
			<td><?php echo $profil->getName();?></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
            <td>:</td>
			<td><?php echo $profil->getPekerjaan();?></td>
		</tr>
		<tr>
			<td>No HP</td>
            <td>:</td>
			<td><?php echo $profil->getNoHP();?></td>
		</tr>
		<tr>
			<td>Email</td>
            <td>:</td>
			<td><?php echo $profil->getEmail();?></td>
		</tr>
	</table>
	<a href="{{route('dashboard')}}"><button class="btn">Dashboard</button></a>
	<a href="{{route('logout')}}"><button class="btn">Logout</button></a>
</body>
</html>