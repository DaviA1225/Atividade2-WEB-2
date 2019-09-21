<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=web2","davi","senhaforte1206");
}

catch(PDOException $erro)
{
    echo $erro->getMessage();
}

require_once '../Body/Professor.php';

$professor = new Professor;

$professor->setNome($_POST['nome']);
$professor->setIdade($_POST['idade']);
$professor->setCPF($_POST['cpf']);
$professor->setSexo($_POST['sexo']);
$professor->setSiape($_POST['siape']);

try{
    $sql = "INSERT INTO professor (nome,idade,cpf,sexo) VALUES ('".$professor->getNome()."','".$professor->getIdade()."','".$professor->getCPF()."','".$professor->getSexo()."','".$professor->getSiape()."')";

    $pdo->exec($sql);

    echo"Professor Salvo!";

}

catch(PDOException $e)
{
    die("Não foi possível acessar o Banco: $sql" . $e->getMessage());
}






?>