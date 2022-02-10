
<?php

include_once('../database/conexao.php');

if ( isset($_POST['nome']) ) {
        $nome = addslashes($_POST['nome']);
        $sobrenome = addslashes($_POST['sobrenome']);
        $cidade = addslashes($_POST['cidade']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);

        $result = mysqli_query($conexao, "INSERT INTO usuario(nome, sobrenome, cidade, telefone, email) VALUES('$nome','$sobrenome','$cidade','$telefone','$email')");

        header('Location: ../index.html');
        exit();
    } else {
        echo "Não";
    }

?>