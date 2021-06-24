<?php
    $cConexao = mysqli_connect('localhost', 'root', '', 'CADASTROTESTE'); // conexão com o banco de dados

    $sNome = $_GET['txbNome'];
    $sEmail = $_GET['txbEmail'];
    $nSenha = $_GET['txbSenha']; // pegando os dados dá página HTML

    $qCadastro = "INSERT INTO usuario (USRNOME, USREMAIL, USRSENHA) VALUES ('$sNome', '$sEmail', '$nSenha');"; // comando que insere os dados
    mysqli_query($cConexao, $qCadastro); // insere os dados
    mysqli_close($cConexao); // fecha a conexão com o banco de dados 

    echo('seus dados foram gravados');
?>