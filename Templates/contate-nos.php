<div class="sidebar-contact animated fadeInLeft">
    <div class="toggle">
        <p class="img-toggle"></p>
    </div>
    <h2 >CONTATE-NOS</h2>
    <div class="formBox scroll">
        <form action="" method="post">
            <div class="inputBox">
                <div class="inputText">Nome</div>
                <input required type="text" name="nome" class="input">
                        <?php 
                            if (!(empty($_SESSION['e-nome']))) {
                            echo '<h3>'.$_SESSION['e-nome'].'</h3>';
                            unset($_SESSION['e-nome']);
                        }
                        ?>
            </div>
            <div class="inputBox">
                <div class="inputText">Email</div>
                <input required type="email" name="mailto" class="input">
                <?php 
                            if (!(empty($_SESSION['e-mail']))) {
                            echo '<h3>'.$_SESSION['e-mail'].'</h3>';
                            unset($_SESSION['e-mail']);
                        }
                        ?>
 
            </div>
            <div class="inputBox">
                <div class="inputText">Telefone</div>
                    <input type="rel" name="tel" class="input">
            </div>
            <div class="inputBox">
                <div class="inputText">Mensagem</div>
                <textarea  required name="msg" class="input"></textarea>
            </div>
            <div class="inputBox hvr-bob btn-contato">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</div>