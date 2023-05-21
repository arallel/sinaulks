
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>json reader</title>
</head>
<body>
<form action="" method="post">
	<textarea name="text" rows="10" cols="25"></textarea>
	<button name="submit" type="submit">submit</button>	
</form>
<p>hasil</p>
<?php 
if (isset($_POST['submit'])) {
	$text = $_POST['text'];
	$xml = simplexml_load_string($text);
	$json = json_encode($xml);
	echo "<textarea cols='25' rows='10'>". $json."</textarea>";
}
 ?>
</body>
</html>