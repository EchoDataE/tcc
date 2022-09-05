<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <title>Cadastre-se</title>

    <link href="_css/cadlog.css" rel="stylesheet" type="text/css"/>

</head>
<body> 

  <ul>
    <li><a href="index.html">Banca do Rock</a></li>
    <li><a class="entr" href="log.php">Entrar</a></li> 
  </ul>
    </div>
    <div class="row"><div class="col sid"></div>
    <div class="col mid">
        <div class="box">
            <div class="form_cad">
                <h2>Cadastre-se</h2>
          
                <form name="f_cad" method="POST" action="caduser.php"> 

                  
                  <input id="barra_usuario" type="text" name="f_username" placeholder="Nome de usúario:" ><br /><br/>
           
                  
                  <input type="email" name="f_email" required placeholder="E-mail:"><br /><br/>
           
                  
                  <input type="password" name="f_senha" required placeholder="Senha:"><br /><br/>

                  
                  <input type="password" name="f_senhaconf" required placeholder="Confirmar senha:"><br /><br/>

                  <input type="submit" id="entr" value="Enviar" href="log.php">
                  <input type="reset" value="Limpar">
                </form>
            </div>
            
        
        </div>
        
        <div class="col sid"></div>
    </div>
    
    </div>
</body>
</html>