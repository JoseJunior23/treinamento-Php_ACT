<?php
class Funcionarios
{
  private $funcionarios;
  public function __construct()
  {
    $this->funcionarios = [
      ['id' => '1', 'cpf' => '123456789999', 'nome' => 'João', 'salario' => '2123.02'],
      ['id' => '2', 'cpf' => '223776789944', 'nome' => 'Maria', 'salario' => '2223.02'],
      ['id' => '3', 'cpf' => '623456789922', 'nome' => 'Catarina', 'salario' => '1123.02'],
      ['id' => '4', 'cpf' => '923456789933', 'nome' => 'Pedro', 'salario' => '2003.02'],
      ['id' => '5', 'cpf' => '823456789988', 'nome' => 'Einstein', 'salario' => '5123.02'],
      ['id' => '6', 'cpf' => '723456789955', 'nome' => 'Filomena', 'salario' => '1890.02']
    ];
  }
 
 $cpf = $_POST['cpf'];

  public function find($cpf)
  {
    foreach ($this->funcionarios as $funcionario) {
      if ($funcionario['cpf'] == $cpf) {
        return $funcionario;
      }
    }
    return null;
  }
}
