<?php 
session_start();
// COLETAR DADOS DAS TURMAS EXISTENTES
require_once "../../fun/_fixed.php";
// CONEXÃO
var_dump($_GET['box']);
if (empty($_GET['box'])) {
    $_GET['box'] = null;
    // header("Location: _CRUD.php");
}
if (($_SESSION['type-user'] == 'super')) {
$connect = db_connect();
$_checkbox = $_GET['box'];
foreach($_checkbox as $_valor){

$query0 = "SELECT id,nome,debit FROM usuarios WHERE id = :iduser;";
$stmt0 = $connect->prepare($query0);
$stmt0->bindValue(':iduser',$_valor);
$list_0 = $stmt0->fetch(PDO::FETCH_ASSOC);
var_dump($query0);


$query1 = "SELECT preco,id FROM requisicoes WHERE iduser = :id";
$stmt1 = $connect->prepare($query1);
$stmt1->bindValue(':id',$_valor);
$stmt1->execute();
$list_1 = $stmt1->fetch(PDO::FETCH_ASSOC);
var_dump($query1);

$query2 = "UPDATE usuarios SET debit = debit + :debit WHERE id = :iduser;";
$stmt2 = $connect->prepare($query2);
$stmt2->bindValue(':iduser',$_valor);
$stmt2->bindValue(':debit',$list_1['preco']);
$list_2 = $stmt2->fetch(PDO::FETCH_ASSOC);
var_dump($list_2);

// $query3 = 'DELETE FROM requisicoes  WHERE iduser = :id;';
// $stmt3 = $connect->prepare($query3);
// $stmt3->bindValue(':id',$_valor);
// $stmt3->execute();
// var_dump($query3);


$_SESSION['dbug'] = "Requisição removida";
//  header("Location: requisicoes_CRUD.php");

}

} else {
$_SESSION['dbug'] = "Erro Tente novamente";
// header("Location: requisicoes_CRUD.php");
}
echo($_SESSION['dbug']);
unset($_SESSION['dbug']);