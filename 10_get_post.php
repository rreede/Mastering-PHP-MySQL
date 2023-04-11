<?php


// WE can pass data throughs urls and forms using $_GET and $_POST superglobals.







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
    <a href="<?php echo $_SERVER["PHP_SELF"];?>?name=''">Click</a>
</body>
</html>