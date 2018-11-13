<?php 
session_start();
require_once "./fun/_fixed.php";
$connect = db_connect();
    if (empty($_SESSION['id'])) {
        header("Location: ./usuarios.php");
    }
$iduser = $_SESSION['id'];
$query_0 = 'SELECT nome,id FROM usuarios WHERE id = :id ;';
$stmt_0 = $connect->prepare($query_0);
$stmt_0->bindValue(':id',$iduser);
$stmt_0->execute();
$list_0 = $stmt_0->fetch(PDO::FETCH_ASSOC);

// pega o ID da URL
$produto = isset($_GET['produto']) ? $_GET['produto'] : null;
$qx = isset($_GET['qx']) ? $_GET['qx'] : null;

foreach($produto as $_valor){
    $query_1 = 'SELECT nome,id,preco,catg FROM estoque WHERE id = '.$_valor.';';
    $stmt_1 = $connect->prepare($query_1);
    $stmt_1->execute();
    $list_1 = $stmt_1->fetch(PDO::FETCH_ASSOC);
    if (!(empty($list_1))) {
        
    $date = date('y-m-d');
    $query_2 = 'INSERT INTO requisicoes (iduser,nomeuser,idprod,nomeprod,catg,dadd,preco) VALUES (:iduser,:nomeuser,:id,:nomeprod,:catg,:dadd,:preco);';
    $stmt_2 = $connect->prepare($query_2);
    $stmt_2->bindValue(':iduser',$_SESSION['id']);
    $stmt_2->bindValue(':nomeuser',$list_0['nome']);
    $stmt_2->bindValue(':id',$list_1['id']);
    $stmt_2->bindValue(':nomeprod',$list_1['nome']);
    $stmt_2->bindValue(':preco',$list_1['preco']);
    $stmt_2->bindValue(':catg',$list_1['catg']);
    $stmt_2->bindValue(':dadd',$date);
    $stmt_2->execute();

    $query_3 ='UPDATE usuarios SET debit = debit - :debit WHERE id = :id;';
    $stmt_3 = $connect->prepare($query_3);
    $stmt_3->bindValue(':id',$list_0['id']);
    $stmt_3->bindValue(':debit',$list_1['preco']);
    $stmt_3->execute();
    }

}
header("Location: historico.php");
?>
