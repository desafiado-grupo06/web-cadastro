<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">        
        <link rel="stylesheet" href="styles/style.css" type="text/css">
    </head>
    <body>
        <!-- Image and text -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="icons/pata.png" width="60" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    Cadastro
            </a>
            <div class="" role="group" aria-label="Basic example">  
                <button type="button" class="btn btn-primary">Login</button>
                <button type="button" class="btn btn-primary">Cadastro</button>
            </div>            
        </nav>
        <div class="container">
            <form>
                <div class="form-row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nome" placeholder="Nome completo">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="cpf" placeholder="CPF">
                    </div>
                    <div class="col-md-2">
                        <select id="genero" class="custom-select">
                            <option value="outro">Outro</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>                                                    
                        </select> 
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="email" placeholder="Insira o e-mail">
                    </div>
                    <div class="form-group col-md-6">
                    <input type="password" class="form-control" id="senha" placeholder="Insira a senha">
                    </div>                                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="endereco" placeholder="Endereço">
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" id="bairro" placeholder="Bairro">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="cidade" placeholder="Cidade">  
                    </div>
                </div>                               
                <button type="button" class="btn btn-primary btn-lg btn-block">Cadastrar</button>
            </form>
        </div>
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>