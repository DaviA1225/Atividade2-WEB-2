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

    $sql = "UPDATE professor SET nome = '" . $professor->getNome() . "', idade = '" . $professor->getIdade() . "', cpf = '" . $professor->getCpf() . "' , sexo = '" . $professor->getSexo() . "' WHERE siape= '". $professor->getSiape()."'";
    $pdo->exec($sql);

    echo"Atualizado";
}

catch(PDOException $e)
{
    die("Não foi possível acessar o Banco: $sql" . $e->getMessage());
}


?>