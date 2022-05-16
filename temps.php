<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Horloge</title>
</head>
<body>
    <header>
    <a id="retour" href="index.html">Retour</a>
        <h1>Horloge</h1>
    </header>
    <main>
        <form method="get">
            <h3>Deviner l'heure:
                <input type="time" name="heureUtilisateur">
                <input type="submit" value='Soumettre'></h2>
        </form>
    <?php
    date_default_timezone_set('Canada/Eastern');
    $hour = intval(date("h"));
    $min = intval(date("i"));

    if (isset($_GET['heureUtilisateur'])) {
        $pattern = '/^(0[1-9]|1[0-2]):[0-5][0-9]$/';
        $heureUtilisateur = '';
        $heureUtilisateur = $_GET['heureUtilisateur'];
        $heure = explode(':',$heureUtilisateur);
    }

    if(isset($_GET['heureUtilisateur']) && !empty($heureUtilisateur)) {
        if (!preg_match($pattern, $heureUtilisateur)) {
            echo '<h3>L\'heure indiqué '.$heureUtilisateur.' ne correspond pas au bon format: [heures 1 à 12:minutes 0 à 59]! Exemple: 4:23 am </h3>';
        } else {
            echo "<table class='tabHeures' border='1px' cellpadding = '2'>";
            for($i = 1; $i <= 12; $i++)
            {
                for($j = 0; $j < 60; $j++)
                {
                    if($i == $hour && $j == $min)
                    {
                        if(preg_match($pattern, $heureUtilisateur)
                        && $heure[0] == $i && $heure[1] == $j){
                            echo "<td  align='middle' style='background-color: green'>";
                            echo ($j <= 9) ? "$i:0$j</td>" : "$i:$j</td>";
                        } else {
                            echo "<td  align='middle' style='background-color: aqua'>";
                            echo ($j <= 9) ? "$i:0$j</td>" : "$i:$j</td>";
                        }
                    }
                    else if ($heure[0] == $i && $heure[1] == $j) {
                        echo "<td  align='middle' style='background-color: red'>";
                        echo ($j <= 9) ? "$i:0$j</td>" : "$i:$j</td>";
                    }
                    else
                    {
                        echo ($j <= 9) ? "<td>$i:0$j</td>" : "<td>$i:$j</td>";
                    }
                }
                    echo "</tr>";
            }
        }
    }
    ?>
    </main>
</body>
</html>