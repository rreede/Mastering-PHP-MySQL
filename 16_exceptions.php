<?php

// Exceptions

function inverse($x) {
if(!$x){
    throw new Exception("Divizion by zero");
}

    return 1/$x;
}


echo inverse(0);


try {
    echo inverse(0);

} catch(Exception $e) {
    echo "Caught Exception";

}



?>

