<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Calculadora Simple</title>
</head>

<body>

    <h1>Calculadora Simple</h1>

    <form method="post">
        <label for="operando1">Operando 1:</label>
        <input type="number" name="operando1" id="operando1" required><br><br>

        <label for="operando2">Operando 2:</label>
        <input type="number" name="operando2" id="operando2" required><br><br>

        <label>Operación:</label><br>
        <input type="radio" name="operacion" value="suma" checked> Suma<br>
        <input type="radio" name="operacion" value="resta"> Resta<br>
        <input type="radio" name="operacion" value="multiplicacion"> Multiplicación<br><br>


        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $operando1 = $_POST["operando1"];
        $operando2 = $_POST["operando2"];
        $operacion = $_POST["operacion"];

        switch ($operacion) {
            case "suma":
                $resultado = $operando1 + $operando2;
                break;
            case "resta":
                $resultado = $operando1 - $operando2;
                break;
            case "multiplicacion":
                $resultado = $operando1 * $operando2;
                break;
        }

        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>

</body>

</html>