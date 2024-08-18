<?php 

require_once("PovezivanjeSaBazom.php"); 


if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["nazivKnjige"]) && isset($_POST["autorKnjige"]) && isset($_POST["zanrKnjige"]) && isset($_POST["pdfLinkKnjige"]) && isset($_POST["opisKnjige"]) ){
        $naziv_knjige=$_POST["nazivKnjige"]; 
        $autor_knjige= $_POST["autorKnjige"]; 
        $zanr_knjige=$_POST["zanrKnjige"]; 
        $pdf= $_POST["pdfLinkKnjige"]; 
        $opis_knjige= $_POST["opisKnjige"]; 

        $ubacivanje_knjige= mysqli_query($baza, "INSERT INTO `knjige` (`NazivKnjige`, `AutorKnjige`, `Zanr`, `PDF`, `Opis`) VALUES ('$naziv_knjige', ' $autor_knjige', '$zanr_knjige', '$pdf', '$opis_knjige');");
        header("Location: Knjige.php"); 
        exit(); 
    }
    else{
        echo "Nisu setovani podaci"; 
    }
}else{
    echo "Nije dobro prosledjena metoda"; 
}

?>