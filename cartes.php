<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cartes</title>
</head>
<body>
    <header>
    <a id="retour" href="index.html">Retour</a>
        <h1>Cartes</h1>
    </header>
    <main>
    <?php
    class Carte {
        public $valeurCarte = 0;
        public $signeCarte = "-";

        function afficherCarte() {
            return "$this->valeurCarte-$this->signeCarte";
        }
        function afficherSigne() {
            return "$this->signeCarte";
        }
        function afficherValeur() {
            return "$this->valeurCarte";
        }

        function setValeurCarte($valeur) {
            $this->valeurCarte = $valeur;
        }
        function setSigneCarte($signe) {
            $this->signeCarte = $signe;
        }
    }

    function creationPaquet() {
        $listeSignes = array('Carreau','Trèfle','Coeur','Pique');
        foreach($listeSignes as $signe) {
            for($i = 1; $i <= 13; $i++) {
                $carte = new Carte();
                $carte->setSigneCarte($signe);
                $carte->setValeurCarte($i);
                $cartes[] = $carte;
            }
        }
        return $cartes;
    }

    function afficherLesCartes($paquet) {
        echo '<table class=\'tabCartes\'> <tr>';
        for($i=0; $i < count($paquet); $i++){
            echo("<td>".$paquet[$i]->afficherCarte()."</td>");
            if(($i+1)%13 == 0){
                echo "</tr><tr>";
            }
        }
        echo '</tr></table>';
    }
    $paquetCartes = creationPaquet();

    /*
    $paquet1 = array_slice($paquetCartes,(count($paquetCartes)/2));
    $paquet2 = array_slice($paquetCartes, 0, (count($paquetCartes)/2));

    for ($i=0; $i < count($paquet1); $i++) {
        $paquetMelange[] = $paquet1[$i];
        $paquetMelange[] = $paquet2[$i];
    }
    echo ('<h2>Paquet brassé et affiché</h2>');
    afficherLesCartes($paquetMelange);

    echo ('<h2>Paquet arrangé et affiché</h2>');
    afficherLesCartes($paquetCartes);
    */

    shuffle($paquetCartes);
    afficherLesCartes($paquetCartes);

    ?>
    </main>
</body>
</html>