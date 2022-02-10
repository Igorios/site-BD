
<?php
    define("HOST", "127.0.0.1");
    define("USUARIO", "root");
    define("SENHA", "novasenha");
    define("BD", "cadastro_site");

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ("Erro ao conectar");

    // if ($conexao->connect_errno) {
    //     echo "Erro ao conectar";
    // } else {
    //     echo "Conectado com sucesso";
    // }

?>