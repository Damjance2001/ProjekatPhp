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
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Književni Klub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Početna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Dogadjaji.php">Dogadjaji</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Knjige.php">Knjige</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Kontakti.php">Kontakt</a>
                </li>
                <li class="nav-item">
                <a class="btn btn-outline-danger" href="Odjava.php" onclick="return confirm('Da li ste sigurni da zelite da se izlogujte sa Vaseg naloga?');">Odjavi se</a>
                </li>

            </ul>
        </div>
    </nav>

<?php require_once("KnjigeBaza.php")?>


    <header class="header">
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
        <?php if($_SESSION['email']=="markomarkovic@gmail.com"){ ?>

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    Dodaj novu knjigu
                </div>
                <div class="card-body">
                    <form method="POST" action="DodavanjeKnjige.php">
                        <div class="mb-3">
                            <label for="bookTitle" class="form-label">Naziv knjige</label>
                            <input type="text" class="form-control" name="nazivKnjige" required>
                        </div>
                        <div class="mb-3">
                            <label for="bookAuthor" class="form-label">Autor knjige</label>
                            <input type="text" class="form-control" name="autorKnjige" required>
                        </div>
                        <div class="mb-3">
                            <label for="bookGenre" class="form-label">Žanr knjige</label>
                            <input type="text" class="form-control" name="zanrKnjige" required>
                        </div>
                        <div class="mb-3">
                            <label for="bookPdfLink" class="form-label">PDF link knjige</label>
                            <input type="url" class="form-control" name="pdfLinkKnjige" required>
                        </div>
                        <div class="mb-3">
                            <label for="bookDescription" class="form-label">Opis knjige</label>
                            <textarea class="form-control" name="opisKnjige" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Dodaj knjigu</button>
                    </form>
                </div>
            </div>
        </div>

        <?php }?>
           
            <?php while($red=mysqli_fetch_array($nizKnjiga)){?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="Slike/KnjigePozadinaStranica.jpg" class="card-img-top" alt="Book Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $red["NazivKnjige"]?></h5>
                        <p class="card-text">Autor: <?php echo $red["AutorKnjige"]?></p>
                        <p class="card-text">Žanr: <?php echo $red["Zanr"]?></p>
                    </div>
                    <div class="card-footer">
                        <a href="KnjigeStranica.php?id=<?php echo $red["ID"]?>" class="btn btn-primary btn-block">Saznaj više</a>
                        <?php if($_SESSION['email']=="markomarkovic@gmail.com"){ ?>
                        <a href="UklanjanjeKnjige.php?id=<?php echo $red["ID"]; ?>" class="btn btn-danger btn-block" onclick="return confirm('Da li ste sigurni da želite da obrišete ovu knjigu sa liste?');">Ukloni knjigu</a>
                        <?php }?>
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