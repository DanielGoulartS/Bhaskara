<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            *{
                font-size: 120%;
            }
        </style>
    </head>
    <body>
        <form method='get'>
            <label>Insira o 'a'(x²):<br><input type='number' name='a'></input></label>
            <br><label>Insira o 'b'(x):<br><input type='number' name='b'></input></label>
            <br><label>Insira o 'c'(numeral):<br><input type='number' name='c'></input></label>
            <input type='submit'>
        </form>
        <?php
        if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];
            $delta = Delta($a, $b, $c);
            echo "<br>▲ = " . $delta;
            Bhaskara($a, $b, $delta);
        } else {
            echo'<h3>Insira as Incógnitas Solicitadas, e envie o formulário!</h3>';
        }

        function Delta($a, $b, $c) {
            echo 'b²- 4*a*c';
            echo '<br>' . $b . '²' . '- 4*' . $a . '*' . $c;
            return ($b * $b) - 4 * $a * $c;
        }

        function Bhaskara($a, $b, $delta) {
            if ($delta >= 0) {
                echo '<br><br>(+) x´ = -b +√▲ / (2 * a)';
                echo '<br>(+) x´ = (' . ((-1 * $b) . '+' . +sqrt($delta)) . ')/' . '(2 *' . $a . ')';
                echo '<br>(+) x´ = ' . ((-1 * $b) + sqrt($delta)) . '/' . (2 * $a);
                echo '<br>(+) x´ = ' . ((-1 * $b) + sqrt($delta)) / (2 * $a);

                echo '<br><br>(-) x´´ = -b -√▲ / (2 * a)';
                echo '<br>(-) x´´ = (' . ((-1 * $b) . '' . -sqrt($delta)) . ')/' . '(2 *' . $a . ')';
                echo '<br>(-) x´´ = ' . ((-1 * $b) - sqrt($delta)) . '/' . (2 * $a);
                echo '<br>(-) x´´ = ' . ((-1 * $b) - sqrt($delta)) / (2 * $a);
            } else {
                echo'<br>Delta negativo, raízes não reais.';
            }
        }
        ?>
    </body>
</html>
