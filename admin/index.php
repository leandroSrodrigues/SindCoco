<?php

    session_start();
    if(isset($_SESSION["login"])){
        header("Location: /admin/home.php");
    }

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Administração Sindcoco</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="shortcut icon" type="image/png" href="/img/logoMini.png"/>

        <link rel="stylesheet" href="/css/teste.css">
        <link rel="stylesheet" href="/css/bootstrap.java.css">

		<?php
		
			
			require("../util/conexao.php");

			
            require("../util/conexao.php");
           


		?>
    </head>
    <body>

   <div class="container" style="margin-top: 30px;">
        <br>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header>
                         <br>
                        <div class="imgcontainer">
                            <img src="/img/9.png"
                                alt="Avatar" class="avatar">
                        </div>
                    </header>
                    <article class="card-body">
                        <form  method="POST" action="/admin/verificaLogin.php" role="login" class="register-form">
                            <div class="form-group">
                                <label for="usr">Usuário:</label> 
                                <input type="text" name="login"     class="form-control" id="usr">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Senha:</label> 
                                <input type="password" name="senha"  class="form-control" id="password">
                            </div>
                            


                            <!-- form-group end.// -->
                            <div class="form-group">
                                <button class="btn btn-success btn-block">Entrar</button>
                            </div>

                            

                            <div class="container" style="background-color: #f1f1f1">
                                <!--<input class="btn btn-danger float-right" type="reset" value="Cancelar">-->
                                <!--<span class="psw" >Esqueceu a <a href="#">senha?</a></span> -->
                            </div>
                            <!-- form-group// -->
                        </form>


                        
                        </form>
                    


    </div>
    <!--container end.//-->

       <!-- <center>
            <h1>Administração SINDCOCO</h1> 
        </center>
        <div class="container">
  
        <div class="row" id="pwd-container">
            <div class="col-md-4"></div>
            
            <div class="col-md-4">
            <section class="login-form">
                <form method="POST" action="/admin/verificaLogin.php" role="login">
                <center>
                    <img src="/img/sindcoco.png" class="img-responsive" alt=""/>
                </center>
                <br>
                <h3>
                    Login:
                </h3>
                <input type="text" maxlenght="15" name="login" placeholder="login" required class="form-control input-lg" /> <br>
                <h3>
                    Senha:
                </h3>
                <input type="password" name="senha" class="form-control input-lg" id="password" placeholder="**********" required="" /> <br>
                
                
                <button type="submit" class="btn btn-success btn-block">Logar</button>
                
                </form>
                
            </section>  
            </div>
            
            

        </div>
    
  
  
    </div>   -->

    </body>
</html>