# Operadores Matemáticos en PHP

Los operadores matemáticos en PHP permiten realizar operaciones aritméticas con valores numéricos.

## 📌 Tabla de Operadores Matemáticos

| Operador | Descripción                | Ejemplo        | Resultado  |
|----------|----------------------------|---------------|------------|
| `+`      | Suma                       | `5 + 3`       | `8`        |
| `-`      | Resta                      | `5 - 3`       | `2`        |
| `*`      | Multiplicación              | `5 * 3`       | `15`       |
| `/`      | División                    | `10 / 2`      | `5`        |
| `%`      | Módulo (resto de división)  | `10 % 3`      | `1`        |
| `**`     | Exponente                   | `2 ** 3`      | `8`        |
| `++$a`   | Pre-incremento (suma 1 antes de usar el valor) | `$a = 5; ++$a;` | `$a = 6` |
| `$a++`   | Post-incremento (suma 1 después de usar el valor) | `$a = 5; $b = $a++;` | `$b = 5, $a = 6` |
| `--$a`   | Pre-decremento (resta 1 antes de usar el valor) | `$a = 5; --$a;` | `$a = 4` |
| `$a--`   | Post-decremento (resta 1 después de usar el valor) | `$a = 5; $b = $a--;` | `$b = 5, $a = 4` |

## 🖥️ Ejemplo en PHP:

```php

$a = 10;
$b = 3;

echo $a + $b;  // 13
echo $a - $b;  // 7
echo $a * $b;  // 30
echo $a / $b;  // 3.3333
echo $a % $b;  // 1
echo $a ** $b; // 1000

echo ++$a; // 11 (incrementa antes de usar)
echo $a++; // 11 (usa el valor y luego incrementa)
echo $a;   // 12 (ya está incrementado)

echo --$a; // 11 (decrementa antes de usar)
echo $a--; // 11 (usa el valor y luego decrementa)
echo $a;   // 10 (ya está decrementado)
