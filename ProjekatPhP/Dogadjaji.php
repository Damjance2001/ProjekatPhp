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
    <title>Dogadjaji-Knjizevni Klub</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="StyleDogadjaji.css">
</head>
<body>

    <?php require_once("DogadjajiBaza.php")?>
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
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dogadjaji</a>
                </li>
                <li class="nav-item">
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

    <header class="header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="display-4 text-white">Dogadjaji</h1>
                    <p class="lead text-white">Otkrijte i budite informisani o dogadjajima koje organizujemo!</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-5">
        
    <div class="row">
        <?php if($_SESSION['email']=="markomarkovic@gmail.com"){?>

        <!-- ovo je kartica uz pomoc admin dodaje dogadjaj -->

                <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    Dodaj novi događaj
                </div>
                <div class="card-body">
                    <form method="POST" action="DodavanjeDogadjaja.php">
                        <div class="mb-3">
                            <label for="eventName" class="form-label">Naziv događaja</label>
                            <input type="text" class="form-control" name="nazivDogadjaja" required>
                        </div>
                        <div class="mb-3">
                            <label for="eventDate" class="form-label">Datum događaja</label>
                            <input type="date" class="form-control" name="datumDogadjaja" required>
                        </div>
                        <div class="mb-3">
                            <label for="eventTime" class="form-label">Vreme događaja</label>
                            <input type="time" class="form-control" name="vremeDogadjaja" required>
                        </div>
                        <div class="mb-3">
                            <label for="eventLocation" class="form-label">Lokacija događaja</label>
                            <input type="text" class="form-control" name="lokacijaDogadjaja" required>
                        </div>
                        <div class="mb-3">
                            <label for="eventDescription" class="form-label">Opis događaja</label>
                            <textarea class="form-control" name="opisDogadjaja" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Dodaj događaj</button>
                    </form>
                </div>
            </div>
        </div>

         <!-- dinamicka kartica koja cita i ispisuje iz baze dogadjaje hronoloski -->
        <?php }?>

            <?php while($red = mysqli_fetch_array($nizIzBaze)){ ?>
            <div class="col-md-4 mb-4" v-for="event in events">
                <div class="card h-100">
                    <img src="Slike/DogadjajPozadina.webp" class="card-img-top" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $red["NazivDogadjaja"]?></h5>
                        <p class="card-text">Vreme: <?php echo $red["Vreme"]?> </p>
                        <p class="card-text"><small class="text-muted">Datum: <?php echo $red["Datum"]?></small></p>
                    </div>
                    <div class="card-footer">
                        <a href="Dogadjaj-stranica.php?id=<?php echo $red["ID"]; ?>" class="btn btn-primary btn-block">Saznaj više</a>
                        <?php if($_SESSION['email']=="markomarkovic@gmail.com"){?>
                        <a href="UklanjanjeDogadjaja.php?id=<?php echo $red["ID"]; ?>" class="btn btn-danger btn-block" onclick="return confirm('Da li ste sigurni da želite da obrišete ovaj događaj?');">Ukloni događaj</a>
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php }; ?>

     </div>
    </div>
          

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>