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
      display: flex;
      flex-direction: column;
      font-size: 1.3rem;
      text-align: center;
      padding: 10px;
      background-color: #09ACDB;
      color: #ffffff;
      margin-top: auto;
      position: absolute;
      bottom: 0;
      width: 100%;
    }
  </style>

  <title>Ponto Turistico</title>
</head>

<body>
  <header>
    <h1>Pontos turisticos.com</h1>
    <h3>Seu guia turistico online</h3>
  </header>
  <h3>Ponto Turistico</h3>
  <ul>
    <li>Nome: {{$place->name}}</li>
    <li>Descrição: {{$place->description}}</li>
    <li>Endereço: {{$place->address}}</li>
  </ul>
  <a href="/places/edit/{{$place->id}}">Editar ponto Turistico</a>
  <footer>
    <p>Desenvolvido por: José Junior</p>
    <p id="copyright"> © 2021</p>
  </footer>
</body>

</html>