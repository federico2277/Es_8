<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    include "Connesione.php";

    $query = "INSERT INTO quintaa_assicurazioni.proprietario (codice_fiscale,cognome,nome,residenza) VALUES ('".$_POST['C_F']."','".$_POST['nome']."','".$_POST['cognome']."','".$_POST['nazionalità']."')";

    $result = mysqli_query($connessione,$query) or die ("errore" .mysqli_error($connessione)."".mysqli_errno($connessione));
    // header ('Location: SitoHost.php');
    ?>
    <h1>operazione compiuta</h1>

    <a href='Index.php'> 
        <button class="" role="button">esci</button>
    </a>
    

</body>
</html>