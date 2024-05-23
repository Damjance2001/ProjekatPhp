<?php 

    require_once("PovezivanjeSaBazom.php"); 

    $nizKnjiga=mysqli_query($baza, "SELECT * FROM `knjige`"); 

    function dajMiKnjigu ($id){
        global $baza;
        $upit = mysqli_query($baza, "SELECT * FROM `knjige` WHERE ID=$id");
    
        return mysqli_fetch_assoc($upit); 
    }
?>