<?php
$GetUser = $_POST ['user'];
$GetPass = $_POST ['pass'];

$originalUser = "admin";
$originalPass = "admin";


if ($GetUser == $originalUser AND $GetPass == $originalPass){

}else{
    header("LOCATION: index.php");
}

?>