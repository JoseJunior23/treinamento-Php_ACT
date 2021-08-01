<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Math.Calculator</title>
</head>

<body>
  <header>
    <h1>Math Calculator</h1>
    <h3>A sua melhor calculadora online</h3>
  </header>
  <form action="calculadora.php" method="post">
    <div class="calculatorBody">
      <label for="">Primeiro digito:</label>
      <input type="number" name="num1" id="">
      <div>
        <label>Selecione a operação:</label>
        <select name="operator" class="operator">
          <option value="0">+</option>
          <option value="1">-</option>
          <option value="2">x</option>
          <option value="3">%</option>
        </select>
      </div>
      <label for="">Segundo digito:</label>
      <input type="number" name="num2" id="">
    </div>
    <button type="submit">Calcular</button>
    </div>
  </form>
  <footer>
    <p>Desenvolvido por: José Junior</p>
    <p id="copyright"> © 2021</p>
  </footer>

</body>

</html>