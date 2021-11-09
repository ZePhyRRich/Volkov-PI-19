<?php
    $furl = @$_POST['link'];
    $url = '';

    switch($furl){
        case "yandex": $url = 'https://yandex.ru';break;
        case "google": $url = 'https://google.com';break;
        case "rambler": $url = 'https://rambler.ru';break;
    }

    if($url){
        header("Location: $url");
    }
?>
<style>
    form{
        margin:10%;
    }
</style>
<form action='<?= $_SERVER['REQUEST_URL']?>' method='POST'>
	<select name='link'>
		<option value="yandex">Yandex</option>
		<option value="google">Google</option>
		<option value="rambler">Rambler</option>
	</select>
	<input TYPE="submit" name="linkto"/>
</form>