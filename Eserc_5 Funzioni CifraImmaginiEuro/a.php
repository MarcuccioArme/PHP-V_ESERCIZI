<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcolatore del numero minimo di monete</title>
</head>
<body>

    <h1>Calcolatore del numero minimo di monete</h1>

    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="POST">

        <p>Inserire l'importo (in centesimi, es: 134 equivale a 1 euro e 34 cent);</p>
        <input type="number" id="centesimi" name="centesimi" required>
        <input type="submit" name="submit" value="Invia Query"><br><br>

    </form>
    
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cent = $_POST["centesimi"];
        calcolaMonete($cent);
    }

    function calcolaMonete($cent) {

        while ($cent > 0) {
            if ($cent >= 200) {
                echo "<img src='Immagini/2_euro.gif' alt='2_euro' width='100px'>";
                $cent -= 200;
            } elseif ($cent >= 100) {
                echo "<img src='Immagini/1_euro.png' alt='1_euro' width='100px'>";
                $cent -= 100;
            } elseif ($cent >= 50) {
                echo "<img src='Immagini/50_cent.png' alt='50_cent' width='100px'>";
                $cent -= 50;
            } elseif ($cent >= 20) {
                echo "<img src='Immagini/20_cent.png' alt='20_cent' width='100px'>";
                $cent -= 20;
            } elseif ($cent >= 10) {
                echo "<img src='Immagini/10_cent.png' alt='10_cent' width='100px'>";
                $cent -= 10;
            } elseif ($cent >= 2) {
                echo "<img src='Immagini/2_cent.png' alt='2_cent' width='100px'>";
                $cent -= 2;
            } elseif ($cent >= 1) {
                echo "<img src='Immagini/1_cent.png' alt='1_cent' width='100px'>";
                $cent -= 1;
            }
        }
        
    }
?>