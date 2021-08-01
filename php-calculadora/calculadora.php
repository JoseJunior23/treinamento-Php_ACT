<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];
switch ($operator) {
  case 0:
    echo 'O resultado da sua operação é: ' . ($num1 + $num2);
    break;
  case 1:
    echo 'O resultado da sua operação é: ' . ($num1 - $num2);
    break;
  case 2:
    echo 'O resultado da sua operação é: ' . ($num1 * $num2);
    break;
  case 3:
    echo 'O resultado da sua operação é: ' . ($num1 / $num2);
    break;
}
