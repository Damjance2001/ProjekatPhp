<?php 

$baza= mysqli_connect("localhost", "root", "", "knjizevniklub"); 

if(mysqli_connect_errno()){
    echo "Nismo uspeli da se povezemo na bazu" .mysqli_connect_errno(); 
    exit(); 
}

?>
