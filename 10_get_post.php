<?php


// WE can pass data throughs urls and forms using $_GET and $_POST superglobals.



if(isset($_POST["submit"])) {

    echo $_POST['name'];
    echo $_POST['age'];

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
    <a href="<?php echo $_SERVER['PHP_SELF'];?>?name=rene&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

<div>
    <label for="">Name:</label>
    <input type="text" name="name">

</div>

<div>
    <label for="">Age:</label>
    <input type="text" name="age">
    <input name="submit" type="submit" value="submit">
</div>

</form>

</body>
</html>