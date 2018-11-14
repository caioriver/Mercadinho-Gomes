<?php
require_once "../fun/_fixed.php";

$var = new validacao;

$_SESSION['e-mail'] = $var->validarEmail($_POST['mail']);
$_SESSION['e-nome'] = $var->validarNome($_POST['nome']);

if ($_SESSION['e-mail'] == NULL && $_SESSION['e-nome']) {

    $email = $_POST['mail'];
    $subject = "Contato";
    $msg = $_POST['msg'];
    $tel = $_POST['tel'];
    $nome = $_POST['nome'];
    $to = MAIL_CLIENTE;
    $mensage ="<strong>NOME:</strong>$nome<br>
    <strong>E-MAIL:</strong>$email<br>
    <strong>TEL:</strong>$tel<br>
    <strong>ASSUNTO:</strong>$subject<br>
    <strong>FORMULARIO:</strong><br>$msg</strong>";
    $header = "MIME-Version: 1.0\n";
    $header .= "Content-type: text/html; charset=iso-8859-1\n";
    $header .="FROM: $to\n";
    mail($to,$subject,$mensage,$header);
    echo("Mensagen enviada");
    header("Location: /Mercadinho-gomes/index.php");
    } else {
    $_SESSION['dbug'] = "Erro";
    header("Location: /Mercadinho-gomes/index.php");
    }
