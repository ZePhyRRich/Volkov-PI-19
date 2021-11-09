<?
header("Cache-control: no-store");
header("Expires: " . date("r"));
?>

<html>
<head>
	<title>Запрет кеширования</title>
</head>

<body>
<h1>Запрет кеширования</h1>
<h1><?=date("H:i:s")?></h1>

</body>
</html>
 