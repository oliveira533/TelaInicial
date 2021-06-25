<?php
    $cConexao = mysqli_connect('localhost', 'root', '', 'CADASTROTESTE'); // conexão com o banco de dados

    $sEmail = $_GET['txbEmail'];
    $nSenha = $_GET['txbSenha']; // pegando os dados dá página HTML

    $sListagem = "SELECT USRNOME, USRSENHA FROM usuario"; //comando de select
    $oResultado = mysqli_query($cConexao, $sListagem); //tá puxando os dados

    while ($oRegistro = mysqli_fetch_array($oResultado)) {
        if (($oRegistro = mysqli_fetch_array($oResultado) == $oResultado)){
        echo 'você entrou'; //escreve todos os produtos 
        }
    }
    
    mysqli_free_result($oResultado); // limpa a memória do servidor
    mysqli_close($cConexao); // fecha a conexão
?>