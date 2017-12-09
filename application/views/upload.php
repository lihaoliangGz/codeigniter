<html>

<head>
    <title>Upload Form</title>
</head>

<body>
<?php echo $error; ?>
<form action="http://codeigniter_test.local.com/index.php/class_libraries/do_upload" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
    <input type="file" name="userfile" size="20"/>
    <br/><br/>
    <input type="submit" value="upload"/>
</form>
</body>

</html>