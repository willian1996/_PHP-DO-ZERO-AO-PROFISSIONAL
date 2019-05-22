<?php require_once 'pages/header.php'; ?>

<div class="container">
    <h1>Cadastre-se</h1>
    <?php 
    require_once 'classes/usuarios.class.php';
    $u = new Usuarios();
    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $telefone = addslashes($_POST['telefone']);
        
        if(!empty($nome) && !empty($email) && !empty($senha)){
            $u->cadastrar($nome, $email, $senha, $telefone);
        }else{
            ?>
            
            <div class="alert alert-warning">
                Preencha todos os campos!
            </div>
            <?php
        }
    }
    
    
    ?>
    
    <form method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" required/>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" required/>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" required/>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" class="form-control" required/>
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-default"/>
    
    </form>
</div>









<?php require_once 'pages/footer.php'; ?>