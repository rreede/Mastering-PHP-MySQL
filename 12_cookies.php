<?php

/* COOKIES */

// Cookies allow to store data in the browser to track the user

// Set cookie

setcookie("name","Rene",time() + 86400 * 30);

if(isset($_COOKIE["name"])) {
    echo $_COOKIE["name"];
}

setcookie("name", "", time() - 86400);


?>