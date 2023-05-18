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
    
    $query = "SELECT residenza from proprietario";

    $result = mysqli_query ($connessione, $query) or
    die ("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));

    ?>
    <form action="Riepilogo.php" method="post" >
    <h4>codice Fiscale:</h4>
    <input type="text" name="C_F" required>
    <h4>nome:</h4>
    <input type="text" name="nome" required>
    <h4>cognome:</h4>
    <input type="text" name="cognome" required >
    <h4>sesso:</h4>
    <label>Maschio</label><input type="radio" name="sesso" value="Maschio" required>
    <label>Femmina</label><input type="radio" name="sesso" value="Femmina" required>
    <h4>nazionalita:</h4>
    <select name ="nazionalità">
    <?php
        while ($row = mysqli_fetch_assoc ($result))
    {
        echo "<option>";
        echo $row['residenza'];
        echo "</option>";
    }
    ?>
    </select>
    <h4>patente:</h4>
    <div>
    <label>pat.A</label><input type="checkbox" name="pat_A" value="pat_A">
    <label>pat.B</label><input type="checkbox" name="pat_B" value="pat_B">
    </div>
    <h4>email:</h4>
    <input type="email" name="email" required>
    <h4>password:</h4>
    <input type="password" name="pass" required><br><br>
    <input type="submit" value="invia">
    </form>
    <br>
        
    <h1>accedi</h1>

    <form action="index.php" method="post">
        <h4>codice Fiscale:</h4>
        <input type="text" name="C_F" required>
        <input type="submit" value="invia">
    </form>

    <?php   
    
    
    $query2 = "SELECT codice_fiscale From proprietario";

    $result2 = mysqli_query($connessione,$query2) or die ("Errore" . mysqli_error($connessione) ."".mysqli_errno($connessione));
    if (isset($_POST['C_F'])) {

        while ($row = mysqli_fetch_assoc($result2)){

            if ($row['codice_fiscale'] == $_POST['C_F']) {

                header ('Location: Sito.php');

        }

    }
    echo "l'utente inserito non esiste";
}
    ?>
</body>
</html>