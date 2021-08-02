<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      background-color: #09ACDB;
      border-bottom: 1px solid #27313a;
      padding: 5px;
    }

    body {
      max-width: 100vw;
      font-size: 2.5rem;
      background-color: #ffffff;
      min-height: 100%;
    }

    form {
      padding: 10px;
      height: 550px;
      max-width: 600px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #fff;
      border-radius: 10px;
      font-size: 2rem;
      margin-right: 20%;
    }

    input,
    select {
      width: 100%;
      font-size: 1.5rem;
      padding: 12px 20px;
      margin: 8px 0;
      border: 1px solid #09ACDB;
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
      color: #09ACDB;
      border: 1px solid #09ACDB;
    }

    footer {
      font-size: 1.3rem;
      text-align: center;
      padding: 10px;
      background-color: #09ACDB;
      color: #ffffff;
      margin-top: auto;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
  <title>Document</title>

</head>

<body>
  <header>
    <h1>Pontos turisticos.com</h1>
    <h3>Seu guia turistico online</h3>
  </header>
  <h3>Adicionar ponto turistico</h3>
  <form action="/places/store" method="post">
    @CSRF
    <label"> Nome: </label>
      <input type="text" name="name" placeholder="Nome do local">
      <label"> Descrição: </label>
        <input type="text" name="description" placeholder="Descrição do local">
        <label"> Endereço: </label>
          <input type="text" name="address" placeholder="Endereço do local">
          <button type="submit">Enviar</button>
  </form>
</body>
<footer>
  <p>Desenvolvido por: José Junior</p>
  <p id="copyright"> © 2021</p>
</footer>

</html>