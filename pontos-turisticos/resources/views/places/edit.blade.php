<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/resources/css/styles.css">
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

    h3 {
      text-align: center;
    }

    form {
      padding: 5px;
      height: 550px;
      max-width: 800px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #fff;
      border-radius: 10px;
      font-size: 2rem;

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
  <h3>Editar Ponto Turistico</h3>
  <form action="/places/update/{{$place->id}}" method="post">
    @CSRF
    <label"> Nome: </label>
      <input name="name" value="{{$place->name}}">
      <label"> Descrição: </label>
        <input name="description" value="{{$place->description}}">
        <label"> Endereço: </label>
          <input name="address" value="{{$place->address}}">
          <button type="submit">Enviar</button>
  </form>
  <a href="/places/delete/{{$place->id}}">Deletar</a>
  <footer>
    <p>Desenvolvido por: José Junior</p>
    <p id="copyright"> © 2021</p>
  </footer>
</body>

</html>