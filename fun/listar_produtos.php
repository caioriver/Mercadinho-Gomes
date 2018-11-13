<?php
require_once "_fixed.php";
session_start();
$connect = db_connect();
if (empty($_POST['cat']) || $_POST['cat'] == "all" ) {
    
    if (empty($_POST['like'])) {
    
        $query_1 = "SELECT nome,id,img,catg FROM estoque WHERE catg = :catg;";
        $stmt_1 = $connect->prepare($query_1);
        $stmt_1->bindValue(':catg',$_POST['catg']);
        $stmt_1->execute();    
    } else {
        $search = '"%'.$_POST['like'].'%"';
        $query_1 = 'SELECT nome,id,img,catg FROM estoque WHERE nome LIKE '.$search.' AND catg = :catg;';
        $stmt_1 = $connect->prepare($query_1);
        $stmt_1->bindValue(':catg',$_POST['catg']);
        $stmt_1->execute();
    }
    $query_1 = "SELECT nome,id,img,catg FROM estoque"; 
    $stmt_1 = $connect->prepare($query_1);
    $stmt_1->execute();


} else 
    

