<html>
    <head>
        <title>Atividade2 WEB 2</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    </head>
    <body>
        <h3>Cadastrar Professor</h3>
    <div class="container">
			<div class="row">

            <?php include("../Layout/Cabecalho.html"); ?>

</div>   
<div class="row">

    <div class="col-md-3 col-sm-12">
    <?php include("../Layout/Menu.html") ?> 

</div>
<div class="col-md-9">

<form action="../RepositorioBD/SalvarProfessor.php" method="POST">

<h2>Cadastrar Professor</h2></br>

                <label>Nome: </label><input class="form-control" type="text" onblur="saidaNome();" name="nome" id="nomeId"/>
                <label>Idade: </label><input class="form-control" type="text" onblur=verificaIdade();  name="idade" id="idadeID"/>
                <label>CPF: </label><input class="form-control" type="text" onblur=verificarCPF(); name="cpf" id="CpfId"/>
                <label>Sexo: </label><input class="form-control" type="text" onblur=saidaSexo(); name="sexo" id="sexoId"/>
                <label>Siape: </label><input class="form-control" type="text" onblur=verificarSiape(); name="siape" id="siapeId"/>
                <p id="msgIdade"></p>
                <input class="btn btn-primary" type="submit" value="Salvar" /> 

            </form>
            </div>
        </div>
        <div class="row"><?php include("../Layout/Rodape.html"); ?></div>
    </div>
    </body>
</html>