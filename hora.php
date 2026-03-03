<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hora restante</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #2e7d32; /* verde */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .caja {
            background: #f5f5dc; /* beige */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
            text-align: center;
            width: 300px;
        }

        h2 {
            margin-bottom: 20px;
        }

        input {
            width: 90%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #aaa;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            background: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #1e7e34;
        }
    </style>
</head>

<body>

<div class="caja">
    <h2>Calcular la hora</h2>

    <form method="post">
        Hora:<br>
        <input type="number" name="hora" required><br><br>

        Minutos:<br>
        <input type="number" name="minuto" required><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_POST) {
        $h = intval($_POST["hora"]);
        $m = intval($_POST["minuto"]);

        $m = (60 - $m) % 60;
        $h = (12 - $h) % 12;  

        if ($m != 0) {
            $h = ($h - 1 + 12) % 12;
        }

        echo "<h3>La hora exacta es: " . sprintf("%02d:%02d", $h, $m) . "</h3>";
    }
    ?>
</div>

</body>
</html>
