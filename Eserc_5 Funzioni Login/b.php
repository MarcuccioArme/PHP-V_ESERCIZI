<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equazione di Secondo Grado</title>
</head>
<body>

    <h1>Equazione di Secondo Grado</h1>

    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="POST">

        A: <input type="number" id="a" name="a" required><br><br>
        B: <input type="number" id="b" name="b" required><br><br>
        C: <input type="number" id="c" name="c" required><br><br>

        <input type="submit" name="submit" value="<-- Calcola -->"><br><br>
    
    </form>
    
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        risolviEquazione($a, $b, $c);
    }

    function risolviEquazione($a, $b, $c) {

        $delta = ($b*$b) -4 * ($a*$c);

        if ($delta > 0) {
            echo "Ammette due soluzioni reali distinte.";
        } elseif ($delta == 0) {
            echo "Ammette una soluzione reale. (o due soluzioni coincidenti)";
        } elseif ($delta < 0) {
            echo "Non ammette alcuna soluzione reale.";
        }

    }

?>