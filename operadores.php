<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .calculator {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        
        input, button, select{
            width: calc(100% - 20px); /* Se asegura de que todos sean del mismo tamaño */
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box; /* Evita que el padding afecte el tamaño total */
        }
        select {
            appearance: none; /* Mejora la apariencia en algunos navegadores */
            background-color: #fff;
            cursor: pointer;
        }

        #button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }

        #button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="calculator">
        <h2>Calculadora</h2>
        <form name="form" action="" method="POST">
            <label for = "num1"></label>
            <input type="text" name="num1" placeholder="Número 1" required>
            <label for = "num2"></label>
            <input type="text" name="num2" placeholder="Número 2" required>
            <label for = "operacion" id="operacion"></label>
            <select name="operacion" required>
                <option value="suma">Suma (+)</option>
                <option value="resta">Resta (-)</option>
                <option value="multiplicacion">Multiplicación (*)</option>
                <option value="division">División (/)</option>
                <option value="modulo">Módulo (%)</option>
            </select>
            <input type="submit" name="button" id="button" value="Calcular" onClick= "prueba">
        </form>
        <?php
            if(isset($_POST["button"]))
            {
                $numero1=$_POST["num1"];
                $numero2=$_POST["num2"];
                $operacion=$_POST["operacion"];

                if(!strcmp("suma",$operacion))
                {
                    echo "El resultado es: " . ($numero1+$numero2);
                }
                if(!strcmp("resta",$operacion))
                {
                    echo "El resultado es: " . ($numero1-$numero2);
                }
                if(!strcmp("multiplicacion",$operacion))
                {
                    echo "El resultado es: " . ($numero1*$numero2);
                }
                if(!strcmp("division",$operacion))
                {
                    echo "El resultado es: " . ($numero1/$numero2);
                }
                if(!strcmp("modulo",$operacion))
                {
                    echo "El resultado es: " . ($numero1%$numero2);
                }
            }

        ?>
    </div>

</body>
</html>
