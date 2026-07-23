<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular área de un Cubo y un Círculo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 40px;
        }
        form {
            background: #fff;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            width: 320px;
            margin-bottom: 25px;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
        .resultado {
            background: #e8f5e9;
            border: 1px solid #4CAF50;
            padding: 10px;
            border-radius: 8px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h2>Calculadora de Áreas</h2>

<!-- Formulario para el área del cubo -->
<form method="post">
    <h3>Área del Cubo</h3>
    <label for="lado">Lado del cubo (en cm):</label>
    <input type="number" name="lado" id="lado" step="any" required>
    <button type="submit" name="calcular_cubo">Calcular área del cubo</button>
</form>

<!-- Formulario para el área del círculo -->
<form method="post">
    <h3>Área del Círculo</h3>
    <label for="radio">Radio del círculo (en cm):</label>
    <input type="number" name="radio" id="radio" step="any" required>
    <button type="submit" name="calcular_circulo">Calcular área del círculo</button>
</form>

<?php
// Calcular área del cubo
if (isset($_POST['calcular_cubo'])) {
    $lado = $_POST['lado'];
    $area_cubo = 6 * pow($lado, 2);
    echo "<div class='resultado'>El área del cubo con lado $lado cm es <strong>$area_cubo cm²</strong></div>";
}

// Calcular área del círculo
if (isset($_POST['calcular_circulo'])) {
    $radio = $_POST['radio'];
    $area_circulo = M_PI * pow($radio, 2);
    echo "<div class='resultado'>El área del círculo con radio $radio cm es <strong>" . round($area_circulo, 2) . " cm²</strong></div>";
}
?>

</body>
</html>
