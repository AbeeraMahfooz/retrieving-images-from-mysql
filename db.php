<?php

$db = new Mysqli;
$db -> connect('localhost','root','','shapes');

if(!$db)

{
	echo "success";
}

?>