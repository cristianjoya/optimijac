<?php
$db = new mysqli('localhost','root','','optimijac');

       
// Check for errors
if(mysqli_connect_errno()){
echo "Error en la base de datos";
}
