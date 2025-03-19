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
$a = 5;

echo ++$a; // 6 (incrementa antes de usar)
echo $a++; // 6 (usa el valor y luego incrementa)
echo $a;   // 7 (ya está incrementado)

echo --$a; // 6 (decrementa antes de usar)
echo $a--; // 6 (usa el valor y luego decrementa)
echo $a;   // 5 (ya está decrementado)
