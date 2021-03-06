<?php
session_start();
if (empty($_POST)) {
    $_SESSION['debug'] = "Não foi possivel postar";
} else {
    // VALIDADOR POR POO
    require_once "../../fun/init.php";
    $val = new validacao;

        $_SESSION['nome-e'] = $val->validarNome($_POST['nome']);
        $_SESSION['mail-e'] = $val->validarEmail($_POST['mail']);
        $_SESSION['c-mail-e'] =$val->comparaDois($_POST['mail'],$_POST['c-mail'],'E-mail');
        $_SESSION['cpf-e'] =$val->validarCpf($_POST['cpf']);
        $_SESSION['tel-e'] = $val->validarTelefone($_POST['tel']);
        $_SESSION['end-e'] = $val->validarAll($_POST['end'],'Endereço');
        $_SESSION['pass-e'] = $val->validarSenha($_POST['pass']);
        $_SESSION['c-pass-e'] = $val->comparaDois($_POST['c-pass'],$_POST['pass'],'Senha');
        $_SESSION['adm-pass-e'] = $val->validarSenha($_POST['adm-pass']);
        var_dump($_SESSION['nome-e']);

        // LOGICA PARA BANCO
        if ($_SESSION['nome-e'] == NULL && $_SESSION['mail-e'] == NULL && $_SESSION['c-mail-e'] == NULL 
        && $_SESSION['cpf-e'] == NULL && $_SESSION['tel-e'] == NULL && $_SESSION['end-e'] == NULL 
        && $_SESSION['pass-e'] == NULL && $_SESSION['c-pass-e'] == NULL && $_SESSION['adm-pass-e'] == NULL ) 
        {
            
            $conect = db_connect();
            $query_1 = "INSERT INTO admin (nome,mail,cpf,tel,endc,dadd,pass) VALUES (:nome,:mail,:cpf,:tel,:endc,:dadd,:pass);";
            $stmt_1 = $conect->prepare($query_1);
            $stmt_1->bindValue(':nome',$_POST['nome']);
            $stmt_1->bindValue(':mail',$_POST['mail']);
            $stmt_1->bindValue(':cpf',$_POST['cpf']) ;
            $stmt_1->bindValue(':tel',$_POST['tel']);
            $stmt_1->bindValue(':endc',$_POST['end']);
            $stmt_1->bindValue(':dadd',date('y-m-d'));
            $stmt_1->bindValue(':pass',sha1($_POST['pass']));
            $stmt_1->execute();
            // $stmt_1->bindValue(':debit',$fileNome);
                
            $_SESSION['dbug'] = "Dados cadastrados";
            header ("Location: admin_criar.php");
        } else 
        {
            header ("Location: admin_criar.php");
            $_SESSION['dbug'] = "Dados inválidos";

            
            }
        }