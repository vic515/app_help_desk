<?PHP
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo cadastro - App Help Desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="script.js"></script>
    <style>
        .flex-column a:hover {
            color: white;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>
    <div class='container'>
        <div class='row d-flex justify-content-center'>
            <div class='col-8 align-self-center'>
            <form action="add_cadastro.php" method='post'>
                <div class='input-group flex-column mt-5'>
                    <label for="email">
                        Insira seu email
                        <?php include 'database_users.php';?>
                        <input type="email" name="email" id="email" class = 'form-control w-100' placeholder='Insira seu email'>
                        <?php
                            if(isset($_GET['email']) && $_GET['email'] == 'cadastrado') { 
                        ?> 
                        <span class='text-danger'>Esse email já está cadastrado na nossa base de dados</span> <?php
                        } 
                        ?>
                    </label>
                    <label for="senha">
                        Insira sua senha
                        <input type="password" class='form-control w-100' placeholder='Insira sua senha' name='senha' id='senha'> 
                    </label>
                    <label for="confirmaSenha">
                        Confirme sua senha 
                        <input id='confirmaSenha' type="password" class='form-control w-100' placeholder='Confirme sua senha' name='confirmaSenha' onfocusout='validaDados()'>
                        <span id='testeSenha' class='d-none'>Suas senhas não conferem</span>                      
                    </label>
                    <label for="indicacao">
                        Descreva de qual setor da empresa você é
                        <input name="indicacao" class='form-control w-100' id="indicacao" rows='2' type='text'>
                    </label>
                    <button class='d-none' type="submit" id='submit'>Cadastre-se</button>
                    <input class='btn btn-success btn-lg w-100 mt-3 d-block text-light' type='button' value='Cadastre-se' id='fakebutton'>
                </div>
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>
