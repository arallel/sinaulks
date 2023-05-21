<?php 
if(isset($_POST['submit']))
{
    $filename =$_FILES["file"]["name"];
    $xml = simplexml_load_file($filename);
    $json = json_encode($xml);
    header('Content-Disposition:attachement; filename="file.json"');
    header('Content-Type:application/json');
    echo $json;
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" value="submit" name="submit">submit</button>
    </form>
   
</body>
</html>