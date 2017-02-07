<?php

date_default_timezone_set("Europe/Amsterdam");
$now = date("H:i");

if ($now > '00:00') {
    $bg = 'night.png';
    $time = 'nacht';
}
if ($now > '06:00') {
    $bg = 'morning.png';
    $time = 'morgen';
} 
if ($now > '12:00') {
    $bg = 'afternoon.png';
    $time = 'middag';
} 
if ($now > '18:00') {
    $bg = 'evening.png';
    $time = 'avond';
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style>
html, body {
	height: 100%;
}
body{
	background-image: url(<?php echo $bg ?>) ;
	display: block;
}
h1.banner {
	position: relative;
	color: white;
	font-family: AR BLANCA;
	font-size: 60px;
	left: 40%;
	top: 40%;
}
</style>
<h1 class="banner"> goede <?php echo $time ?></h1>
<h1 class="banner"> Het is nu <?php echo $now ?></h1>
</body>
</html>