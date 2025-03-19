<?php
            if(isset($_POST["button"]))
            {
                $numero1=$_POST["num1"];
                $numero2=$_POST["num2"];
                $operacion=$_POST["operacion"];

                calcular($operacion);

            }
            function calcular($calculo)
            {

                if(!strcmp("suma",$calculo))
                {
                    global $numero1;
                    global $numero2;
                    echo "El resultado es: " . ($numero1+$numero2);
                }
                if(!strcmp("resta",$calculo))
                {
                    global $numero1;
                    global $numero2;
                    echo "El resultado es: " . ($numero1-$numero2);
                }
                if(!strcmp("multiplicacion",$calculo))
                {
                    global $numero1;
                    global $numero2;
                    echo "El resultado es: " . ($numero1*$numero2);
                }
                if(!strcmp("division",$calculo))
                {
                    global $numero1;
                    global $numero2;
                    echo "El resultado es: " . ($numero1/$numero2);
                }
                if(!strcmp("modulo",$calculo))
                {
                    global $numero1;
                    global $numero2;
                    echo "El resultado es: " . ($numero1%$numero2);
                }
                if(!strcmp("exponente", $calculo)) 
                {
                    global $numero1;
                    global $numero2;
                    echo "El resultado es: " . ($numero1 ** $numero2);
                }
                if(!strcmp("incremento", $calculo)) 
                {
                    global $numero1;
                    global $numero2;
                    echo "Antes del incremento: $numero1, después: " . (++$numero1) . "<br>";
                    echo "Antes del incremento: $numero2, después: " . (++$numero2);
                }
                if(!strcmp("decremento", $calculo)) 
                {
                    global $numero1;
                    global $numero2;
                    echo "Antes del decremento: $numero1, después: " . (--$numero1) . "<br>";
                    echo "Antes del decremento: $numero2, después: " . (--$numero2);
                }
            }

        ?>