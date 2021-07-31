<?php
    $cConexao = mysqli_connect('localhost', 'root', '', 'CADASTROTESTE') or die ('não conectou'); // conexão com o banco de dados

    $sEmail = $_GET['txbEmail'];
    $nSenha = $_GET['txbSenha']; // pegando os dados dá página HTML

    $sListagem = "SELECT * FROM usuario where USREMAIl = '{$sEmail}' AND USRSENHA = '{$nSenha}'"; //comando de select
    $oResultado = mysqli_query($cConexao, $sListagem); //tá puxando os dados

    $nLinha = mysqli_num_rows($oResultado);

    if($nLinha == 1)
        header('Location: PAINEL.php');
    
    else
        header('Location: LOGIN.htm');
    

    mysqli_close($cConexao); // fecha a conexão
?>