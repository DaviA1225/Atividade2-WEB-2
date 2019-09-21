<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=web2","davi","senhaforte1206");
}

catch(PDOException $erro)
{
    echo $erro->getMessage();
}

require_once '../Body/Aluno.php';

$aluno = new Aluno;

$aluno->setNome($_POST['nome']);
$aluno->setIdade($_POST['idade']);
$aluno->setCPF($_POST['cpf']);
$aluno->setSexo($_POST['sexo']);
$aluno->setRa($_POST['ra']);

try{
    $sql = "SELECT * FROM aluno (nome,idade,cpf,sexo) VALUES ('"$aluno->getNome()."','".$aluno->getIdade()."','".$aluno->getCPF()."','".$aluno->getSexo()."' WHERE ra ='".$aluno->getRa()."')";

    $pdo->exec($sql);

    echo"";
}

catch(PDOException $e)
{
    die("Não foi possível acessar o Banco: $sql" . $e->getMessage());
}






















?>