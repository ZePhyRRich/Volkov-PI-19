<?
header("Cache-control: max-age=3600");
header("Expires: " . date("r", time() + 600));
?>

<html>
<head>
	<title>Разрешение кеширования</title>
</head>

<body>
<h1>Разрешение кеширования</h1>
<h1><?=date("H:i:s")?></h1>

</body>
</html>