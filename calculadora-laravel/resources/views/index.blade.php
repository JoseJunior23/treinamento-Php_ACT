<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <style>
    * {
      padding: 0;
      margin: 0;
    }

    html {
      font-size: 62.5%;
    }

    header {
      font-size: 2rem;
      color: #ffffff;
      display: block;
      flex-direction: flex;
      text-align: center;
      background-color: #4a727e;
      border-bottom: 1px solid #27313a;
      padding: 5px;
    }

    body {
      max-width: 100vw;
      font-size: 2.5rem;
      background-color: #ffffff;

    }


    form {
      padding: 10px;
      height: 550px;
      max-width: 800px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #fff;
      border-radius: 10px;
      font-size: 2rem;
      margin-left: 20%;
      margin-right: 20%;
    }

    input,
    select {
      width: 100%;
      font-size: 1.5rem;
      padding: 12px 20px;
      margin: 8px 0;
      border: 1px solid #4a727e;
      border-radius: 6px;
      box-sizing: border-box;
      background-color: #ffffff;
    }

    button {
      width: 20%;
      font-size: 2rem;
      border-radius: 10px;
      padding: 10px;
      background-color: #ffffff;
      color: #4a727e;
      border: 1px solid #4a727e;
    }
  </style>
  <title>Math.Calculator</title>
</head>

<body>
  <header>
    <h1>Math Calculator</h1>
    <h3>A sua melhor calculadora online</h3>
  </header>
  <form action="resultado" method="post">
    @csrf
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

</body>