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
                                            echo '<h3>Mot de passe trouvé! Password: '.$check_mot.'</h3>';
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
    $tabMots = ["auto3", "83c", "j234j3"];
    /**
     * ASCII Table
     * 0-9 --> Numbers 0 to 9
     * 97-122 --> Letters a to z
    */
    echo "<h2>Objectif, trouver les 3 mots de pass caché</h2>";
    $chars[] = "";
    for ($i=0; $i <= 9;$i++) {
        $chars[] = $i;
    }
    for ($i=97; $i <= 122;$i++) {
        $chars[] = chr($i);
    }
    foreach ($tabMots as $mot) {
        $start_time = microtime(true);
        $trouve = trouverMotPass($mot, $chars);
        echo ($trouve) ?  "<h3>Succes!" : '<h3>Echec...';
        $end_time = microtime(true);
        $execution_time = ($end_time - $start_time);
        echo ' Temps pour le retrouver: '.$execution_time.'ms</h3>';
    }
?>

</body>
</html>