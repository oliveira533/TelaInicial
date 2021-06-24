<?php
    $cConexao = mysqli_connect('localhost', 'root', '', 'CADASTROTESTE'); // conexão com o banco de dados

    $sNome = $_GET['txbNome'];
    $sEmail = $_GET['txbEmail'];
    $nSenha = $_GET['txbSenha']; //pegando os dados dá página HTML

    $qCadastro = "INSERT INTO usuario (USRNOME, USREMAIL, USRSENHA) VALUES ('$sNome', '$sEmail', '$nSenha');";
    mysqli_query($cConexao, $qCadastro);
    mysqli_close($cConexao);

    echo('seus dados foram gravados');
?>