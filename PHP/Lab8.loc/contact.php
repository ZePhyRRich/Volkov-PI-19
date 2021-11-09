
<?php
	define('DB_HOST','localhost');
	define('DB_LOGIN','root');
	define('DB_PASSWORD','');
	define('DB_NAME','gBook');
	$link=mysqli_connect(DB_HOST,DB_LOGIN, DB_PASSWORD, DB_NAME);
	
	function clearStr($data){
		global $link;
		return mysqli_real_escape_string($link,trim(strip_tags($data)));
	}
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = clearStr($_POST['subject']);
		$msg = clearStr($_POST['body']);
		$email = clearStr($_POST['email']);
		$sql = "INSERT INTO contact_msgs(name, msg, email) VALUES('$name','$msg', '$email')";
		mysqli_query($link,$sql) or die(mysqli_error($link));
		header('Location:'.$_SERVER['REQUEST_URL']);
		exit;
	}
?>
<!-- Область основного контента -->
<form action="<?php echo $_SERVER['REQUEST_URL']; ?>" method="post">
	<label>E-Mail: </label><br />
	<input name='email' type='text' size="50"/><br />	
	<label>Тема письма: </label><br />
	<input name='subject' type='text' size="50"/><br />
	<label>Содержание: </label><br />
	<textarea name='body' cols="50" rows="10"></textarea><br /><br />
	<input type='submit' value='Отправить' />
</form>	

<?php
			$sql= "SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt FROM contact_msgs ORDER BY id DESC LIMIT 5";
			$res=mysqli_query($link,$sql) or die(mysqli_error($link));
			mysqli_close($link);
			while($row=mysqli_fetch_assoc($res)){
				$id=$row['id'];
				$name=$row['name'];
				$email=$row['email'];
				$dt=date('d-m-Y H:i:s',$row['dt']);
				$msg=$row['msg'];
				echo <<<HTML
					<hr>
					<p>
						<a href = "mailto:$email">$name</a> @ $dt <br>$msg
					</p>
HTML;
}
		?>
<!-- Область основного контента -->