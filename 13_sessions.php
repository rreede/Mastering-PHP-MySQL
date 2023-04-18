<?php

/* SESSIONS */

// Sessions are a way to store information (in variables) to be used across multiple pages.

// ON SERVERS




// WE can pass data throughs urls and forms using $_GET and $_POST superglobals.



if(isset($_POST["submit"])) {

   $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);


   $age = htmlspecialchars($_POST['age']);

   echo $name;
   echo $age;

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

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

<div>
    <label for="">Name:</label>
    <input type="text" name="name">

</div>

<div>
    <label for="username">Username:</label>
    <input type="password" name="password">
    <input name="submit" type="submit" value="submit">
</div>

</form>

</body>
</html>

?>