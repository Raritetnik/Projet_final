<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Brut-force mot de passe</title>
</head>
<body>
    <header>
        <a id="retour" href="index.html">Retour</a>
        <h1>Force brut du mot de passe</h1>
    </header>
    <main>
    <form class='formPass' method="get">
            <h3>Entrez un mot de passe de 4 symboles incluant les lettres de l'alphabet en minuscule et les chiffres:</h3>
            <input type="text" name="passUtilisateur">
            <input type="submit" value='Soumettre'>
        </form>
    <?php

    $chars[] = "";
    for ($i=0; $i <= 9;$i++) {
        $chars[] = $i;
    }
    for ($i=97; $i <= 122;$i++) {
        $chars[] = chr($i);
    }
    function trouverMotPass($mot, $chars) {
        foreach ($chars as $ltr1) {
            foreach ($chars as $ltr2) {
                foreach ($chars as $ltr3) {
                    foreach ($chars as $ltr4) {
                        foreach ($chars as $ltr5) {
                            foreach ($chars as $ltr6) {
                                foreach ($chars as $ltr7) {
                                    foreach ($chars as $ltr8) {
                                        $check_mot = $ltr8.$ltr7.$ltr6.$ltr5.$ltr4.$ltr3.$ltr2.$ltr1;
                                        if($mot == $check_mot) {
                                            echo "<h3>Hackage reussit! Mot de passe: ".$check_mot."</h3>";
                                            return true;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        return false;
    }

    /**
     * ASCII Table
     * 0-9 --> Numbers 0 to 9
     * 97-122 --> Letters a to z
    */
    if(isset($_GET['passUtilisateur'])) {
        $motPass = $_GET['passUtilisateur'];

        $start_time = microtime(true);
        $trouve = trouverMotPass($motPass, $chars);
        $end_time = microtime(true);
        $execution_time = ($end_time - $start_time);
        echo ($trouve) ?
        "<h3>Force brut de votre mot de passe a prit ".$execution_time."ms</h3>"
        : '<h3>Echec. Le mot de pass n\'a pas été decouvert...</h3>';

    }
?>
    </main>
</body>
</html>