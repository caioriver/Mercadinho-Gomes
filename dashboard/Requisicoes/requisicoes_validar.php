<?php 
session_start();
// COLETAR DADOS DAS TURMAS EXISTENTES
require_once "../../fun/_fixed.php";
// CONEXÃO
if (($_SESSION['type-user'] == 'super')) {
$connect = db_connect();
$_checkbox = $_GET['box'];
foreach($_checkbox as $_valor){
$query1 = 'DELETE FROM requisicoes  WHERE id = :id;';
var_dump($query1);
$insert1 = $connect->prepare($query1);
$insert1->bindValue(':id',$_valor);
var_dump($_valor);
$insert1->execute();
$_SESSION['dbug'] = "Requisição removida";
 header("Location: requisicoes_CRUD.php");

}

} else {
$_SESSION['dbug'] = "Erro Tente novamente";
// header("Location: requisicoes_CRUD.php");
}
echo($_SESSION['dbug']);
unset($_SESSION['dbug']);