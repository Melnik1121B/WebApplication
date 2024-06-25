<?php
        function combination($n, $m) {
            if ($m == 0 || $m == $n) {
                return 1;
            }
            return combination($n - 1, $m) + combination($n - 1, $m - 1);
        }

        function calculate($num1, $num2, $operation) {
            switch ($operation) {
                case 'add':
                    return $num1 + $num2;
                case 'subtract':
                    return $num1 - $num2;
                case 'multiply':
                    return $num1 * $num2;
                case 'divide':
                    return ($num2 != 0) ? ($num1 / $num2) : "Ошибка: деление на ноль";
                case 'combination':
                    return ($num2 >= 0 && $num2 <= $num1) ? combination($num1, $num2) : "Некорректные значения";
                default:
                    return "Неизвестная операция";
            }
        }

        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];

            $result = calculate($num1, $num2, $operation);
            echo "Результат: $result";
        }
    ?>