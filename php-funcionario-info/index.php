<!-- Desenvolva um sistema em que o usuário forneça um CPF de um funcionário e 
seu sistema mostre seu nome e salário. Crie uma classe Funcionarios e crie o metodo 
chamado findCPF(string), onde receba um CPF como parâmetro, percorra o array de funcionários, 
construído pela classe, e retorne o funcionário quando achar o CPF. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Busca Funcionario</title>
</head>

<body>
  <form action="cpf.php" method="post">
    <label> Digite o Identificador do funcionario: </label>
    <input type="number" name="cpf" placeholder="Cpf do funcionario">
    <button type="submit">Buscar</button>
  </form>
</body>

</html>