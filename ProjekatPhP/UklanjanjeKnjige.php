<?php 
require_once("PovezivanjeSaBazom.php"); 

if (isset($_GET['id'])) {
    
    $id = intval($_GET['id']);
    
   
    $brisanje = "DELETE FROM `knjige` WHERE `ID` = $id";
    
    
    if (mysqli_query($baza, $brisanje)) {
        
        header("Location: Knjige.php");
        exit();
    } else {
        
        echo "Greška prilikom brisanja događaja: " . mysqli_error($baza);
    }
} else {
    
    echo "ID događaja nije prosleđen.";
}

?>