<?php require_once 'validador_acesso.php'; ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
      a:hover {
        text-decoration: none;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk 
      </a>
      
      <a class='btn btn-info text-light align-self-end mt-auto mb-auto' href='logoff.php'>Sair</a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center ">
                  <a href="abrir_chamado.php" class='d-flex flex-column justify-content-center align-self-center '><img src="formulario_abrir_chamado.png" alt='Abrir chamado'  height="70" class='align-self-center '><span class='d-flex align-self-center text-align-center '>Abrir chamado</span></a>
                  
                </div>
                <div class="col-6 d-flex justify-content-center">
                <a href='consultar_chamado.php' class='d-flex flex-column justify-content-center'>
                  <img src="formulario_consultar_chamado.png" width="70" height="70" alt="Consultar chamado" class='align-self-center'><span class='align-self-center'>Consultar chamado</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>