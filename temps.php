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
    <?php
    date_default_timezone_set('Canada/Eastern');


    $hour = intval(date("h"));
    $min = intval(date("i"));


    echo "<table border='1px' cellpadding = '2'>";
    echo "<tr> <th></th>";
    for($j = 0; $j < 60; $j++) {
        echo "<th>$j</th>";
    }
    echo "</th>";

    for($i = 1; $i <= 12; $i++)
    {
        echo "<tr><th>$i</th>";
        for($j = 0; $j < 60; $j++)
        {
            if($i == $hour && $j == $min)
            {
                echo "<td  align='middle' style='background-color: #fff'> X </td>";
            }
            else
            {
                echo "<td></td>";
            }
        }
            echo "</tr>";
    }
    ?>
    </main>
</body>
</html>