<?php

if($_REQUEST['nome'] == '' || strlen($_REQUEST['nome']) > 3) {
    
    echo 'O campo nome é inválido!';

    return;
} 

echo "Nome: {$_REQUEST['nome']}";
echo '<hr>';
echo "Senha: {$_REQUEST['senha']}";
echo '<hr>';
echo "E-mail: {$_REQUEST['email']}";
echo '<hr>';
echo "Sexo: {$_REQUEST['sexo']}";
echo '<hr>';
echo "Estado: {$_REQUEST['estado']}";
echo '<hr>';
echo "Descrição: {$_REQUEST['descricao']}";
echo '<hr>';
echo isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Concordou? Sim' : 'Concordou? Não';
echo '<hr>';

/*
//POST

echo "Nome: {$_POST['nome']}";
echo '<hr>';
echo "Senha: {$_POST['senha']}";
echo '<hr>';
echo "E-mail: {$_POST['email']}";
echo '<hr>';
echo "Sexo: {$_POST['sexo']}";
echo '<hr>';
echo "Estado: {$_POST['estado']}";
echo '<hr>';
echo "Descrição: {$_POST['descricao']}";
echo '<hr>';
echo isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'Concordou? Sim' : 'Concordou? Não';
echo '<hr>';
*/

?>