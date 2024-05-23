<?php 
session_start(); 
    if(isset($_SESSION['registrovan'])==false){
        header("Location: Prijava.php"); 
        exit(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knjige-Knjizevni Klub</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="StyleKnjige.css" rel="stylesheet">

</head>
<body>
    
<?php require_once("header.php")?>
<?php require_once("KnjigeBaza.php")?>


    <header class="header">
        <div class="overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="display-4 text-white">Naše Knjige</h1>
                    <p class="lead text-white">Otkrijte našu bogatu kolekciju knjiga</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-5">
        
        <div class="row">
           
            <?php while($red=mysqli_fetch_array($nizKnjiga)){?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="KnjigePozadinaStranica.jpg" class="card-img-top" alt="Book Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $red["NazivKnjige"]?></h5>
                        <p class="card-text">Autor: <?php echo $red["AutorKnjige"]?></p>
                        <p class="card-text">Žanr: <?php echo $red["Zanr"]?></p>
                    </div>
                    <div class="card-footer">
                        <a href="KnjigeStranica.php?id=<?php echo $red["ID"]?>" class="btn btn-primary btn-block">Saznaj više</a>
                    </div>
                </div>
            </div>
            <?php }?>
           

        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>