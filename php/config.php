<?php 
$conn = mysqli_connect("localhost","root","","chat");
if(!$conn){
    echo "Success Full ". mysqli_connect_error();
}

?>