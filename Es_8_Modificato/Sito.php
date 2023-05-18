<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>sitoooo</h1>
    <a href='Index.php'> 
        <button class="" role="button">ritorna</button>
    </a>

    <h1>Modifica l'utente</h1>
    <form action="Sito.php" method="post">
    <h4>Inserisci l'utente da modificare</h4>
    <input type="text" name="C_F" required>
    <h4>Inserisci l'utente da modificare</h4>
    <input type="text" name="Mod_C_F" required>
    <input type="submit" name="" required>
    </form>
<?php
    include "Connesione.php";

    $query2 = "SELECT nome From proprietario";

    $result2 = mysqli_query($connessione,$query2) or die ("Errore" . mysqli_error($connessione) ."".mysqli_errno($connessione));
    if (isset($_POST['C_F'])) {

        while ($row = mysqli_fetch_assoc($result2)){

            if ($row['nome'] == $_POST['C_F']) {

                $controllo = true;
        }

    }
    
}
    if (isset($controllo)) {
        $query = "UPDATE quintaa_assicurazioni . proprietario SET nome = '".$_POST['Mod_C_F']."' WHERE nome = '".$_POST['C_F']."'";
        $result = mysqli_query($connessione,$query) or die ("Errore" . mysqli_error($connessione) ."".mysqli_errno($connessione));
        echo "operazione finist";
    }else{
        echo "non funzia";
    }

?>

<h1>elimina il tipo</h1>

<form action="Sito.php" method="post">
<h4>Inserisci il nome da togliere</h4>
    <input type="text" name="F_C" required>
    <input type="submit"  required>
</form>
<?php
    $query3 = "SELECT codice_fiscale From proprietario";

    $result3 = mysqli_query($connessione,$query3) or die ("Errore" . mysqli_error($connessione) ."".mysqli_errno($connessione));
    if (isset($_POST['F_C'])) {

        while ($row = mysqli_fetch_assoc($result3)){

            if ($row['codice_fiscale'] == $_POST['F_C']) {

                $controladlo = true;
        }

    }
    
}
    if (isset($controladlo)) {
        
    $query4 = "DELETE FROM quintaa_assicurazioni . proprietario WHERE codice_fiscale = '".$_POST['F_C']."'";
    $result4 = mysqli_query($connessione,$query4) or die ("Errore" . mysqli_error($connessione) ."".mysqli_errno($connessione));
        echo "operazione finist";
    }else{
        echo "non funzia";
    }
?>
</body>
</html>