<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet07 Exercice04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet07 Exercice04</h1>
            <h2 class="col-12 text-info text-center">Créez un formulaire demandant un pseudo et mot de passe. 
            Au clic sur le bouton "envoyer", affichez le pseudo et mot de passe sur une autre page.</h2>
        </div>
        <div class="offset-1 row justify-content-center bg-secondary rounded m-4">
            <form method="post" action="infos.php">
                <p class="col-9 text-center text-light p-2 m-3">PSEUDO :<p>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="text" name="pseudonyme" id="pseudonyme"/></p></p>
                <p class="col-9 text-center text-light p-2 m-3">MOT DE PASSE :<p>
                <input class="col-9 btn btn-outline-warning rounded text-warning p-2 m-3" type="password" name="motDePasse" id="motDePasse"/></p></p>
                <p class="text-center text-light p-2 m-3"><p>
                <p class="col-9 text-center text-light p-2 m-3"><button type="submit" formaction="infos.php" class=" col-9 text-center text-warning btn btn-outline-light p-2 m-3" id="check" name="button">ENVOYER LES DONNÉES !</button></p>
            </form>
        </div>
        
    </div>
</body>
</html>