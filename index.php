
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

        <h1><?php
            $testo = 'Ciao sono Lucia, sono una sirena. Può sembrare strano ma è una storia vera';
            $censura = $_GET['name'];
            $censurata = str_ireplace( $censura, "***", $testo);
            echo $censurata . ' ,La lunghezza '.strlen($testo);

        ?></h1>
    <!--Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall’utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    Tutto ciò che volete provare in più nel vostro codice inseritelo in un file bonus.php-->
    </main>
</body>
</html>

