<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text"  name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email " class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Gênero</p>
                <input type="radio" id=feminino name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <input type="radio" id=masculino name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" id=outro name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <div class="inputBox">
                    <br>
                    <label for="data_nascimento"></label>Data de Nascimento</b></label>
                    <input type="date" max="9999-12-31" name="data_nascimento" id="data_nascimento" required>
                </div>

                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereco</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>

<!-- CSS -->
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(45deg, purple, rgb(255, 251, 0));
    }

    .box {
        color: orange;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.9);
        padding: 15px;
        border-radius: 20px;
        width: 20%;
    }

    fieldset {
        border: 3px solid purple;
    }

    legend {
        border: 1px solid purple;
        padding: 10px;
        text-align: center;
        background-color: purple;
        border-radius: 10px;
        color: orange;
    }

    .inputBox {
        position: relative;
    }

    .inputUser {
        background: none;
        border: none;
        border-bottom: 1px solid orange;
        outline: none;
        color: orange;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
    }

    .labelInput {
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5px;
    }

    /* Utilizando focus para recuar a label top -20px criando efeito do texto subindo */
    .inputUser:focus~.labelInput,
    .inputUser:valid~.labelInput {
        top: -20px;
        font-size: 12px;
    }

    #data_nascimento {
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
    }

    #submit {
        background-color: purple;
        font-size: 15px;
        width: 100%;
        border: none;
        padding: 15px;
        color: orange;
        cursor: pointer;
        border-radius: 10px;
    }

    #submit:hover {
        background-color: orange;
        color: purple;


    }
</style>

<!-- PHP -->

<?php

if (isset($_POST['submit'])) 
{

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,genero,data_nasc,cidade,estado,endereco)
    VALUES ('$nome', '$email', '$telefone', '$genero', '$data', '$cidade', '$estado', '$endereco')");
}

// echo "<b>Nome:</b> $nome <br>";
// echo "<b>Email:</b> $email <br>";
// echo "<b>Gênero:</b> $genero <br>";
// echo "<b>Dt Nascimento:</b> $dataFormatada<br>";
// echo "<b>Telefone:</b> $telefone<br>";
// echo "<b>Cidade:</b> $cidade <br>";
// echo "<b>Estado:</b> $estado <br>";
// echo "<b>Endereço:</b> $endereco <br>";

?>