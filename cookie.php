<?php



setcookie('userid','1',time()+10,'/');

// setcookie('cookie name','cookie value','expiration time','/');


$user=$_COOKIE['userid'];


echo "$user";

?>


<?php


