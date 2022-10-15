<?php
$GetUser = "admin";
$GetPass = "admin";

//$GetUser = $_POST ['user'];
//$GetPass = $_POST ['pass'];

$originalUser = "admin";
$originalPass = "admin";


echo "<h1>HOLA</h1>";


if ($GetUser == $originalUser && $GetPass == $originalPass){
    echo "Ingresaste con exito";
    header("LOCATION: google.com");

}else{
   echo "Fallo el ingreso";
   header("LOCATION: index.html");
}

?>