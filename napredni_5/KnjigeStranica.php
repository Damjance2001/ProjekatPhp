<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Događaj</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="Knjige-stranica.css" rel="stylesheet">
</head>
<body>
    <?php require_once("KnjigeBaza.php")?>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Književni Klub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Početna</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dogadjaji</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Knjige.php">Knjige</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Kontakti.php">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="header">
        <div class="overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="display-4 text-white">Knjige</h1>
                    <p class="lead text-white">Uživajte u knjigama koje Vam nudimo!</p>
                </div>
            </div>
        </div>
    </header>

    <?php 
        $id= $_GET["id"];

        $knjiga= dajMiKnjigu($id); 
      
        if (is_null($knjiga)) {
    ?>  
    Ne postji
    <?php 
        }else{
    ?>

    <?php $pdfKnjige=$knjiga['PDF']; ?>


    <div class="container mt-5">
        <h2 class="text-center mb-4"></h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Naslov: <?php echo $knjiga["NazivKnjige"]; ?></h5>
                <h5 class="card-title">Autor: <?php echo $knjiga["AutorKnjige"]; ?></h5>
                <h5 class="card-title">Zanr:<?php echo $knjiga["Zanr"]; ?> </h5>
                <p class="card-text"><?php echo $knjiga["Opis"]?></p>
            </div>
            <div class="card-footer">
                <a href="<?php echo ($pdfKnjige)?>" target="_blank" class="btn btn-primary">PDF</a>

            </div>
        </div>
    </div>
    <?php }?>

    <footer class="footer mt-5 py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">© 2024 Književni Klub. Sva prava zadržana.</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

