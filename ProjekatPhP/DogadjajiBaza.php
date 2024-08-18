<?php 

require_once("PovezivanjeSaBazom.php"); 

$nizIzBaze=mysqli_query($baza, "SELECT * FROM `dogadjaj` ORDER BY `dogadjaj`.`Datum` DESC");

function dajMiDogadja ($id){
    global $baza;
    $query = mysqli_query($baza, "SELECT * FROM `dogadjaj` WHERE ID=$id");

    return mysqli_fetch_assoc($query); 
}


?>