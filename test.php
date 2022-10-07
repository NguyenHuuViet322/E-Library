<!DOCTYPE html> 
<?php
    require "autoload.php";
    require "config-cloud.php";
    include "src/Helpers.php";
    
    if(isset($_POST['submit'])){
        $file_tmp = $_FILES['file123']['tmp_name'];
        \Cloudinary\Uploader::upload($file_tmp, array("public_id" => "456"));
    }
?>

<html> 
<head> 
<title>My First Webpage</title> 
<meta charset="UTF-8"> 
<meta name="description" content="This is my first website. It includes lots of information about my life."> 
</head> 
<body> 
<form method = "post" enctype="multipart/form-data"> 
<input type="file" name="file123" value="file" id="file"> 
<label for="fileupload"> Select a file to upload</label> 
<input type="submit" name="submit" value="submit"> </form>
</body> 
</html>
