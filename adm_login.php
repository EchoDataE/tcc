<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link href="_css/cadlog.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <ul>
    <li><a href="index.html">Banca do Rock</a></li>
    <li><a class="entr" href="cad.php">Entrar</a></li> 
  </ul>
    </div>
    <div class="row"><div class="col sid"></div>
    <div class="col mid">
        <div class="box">
            <div class="form_cad">
                <h2>Fazer login</h2>
                <form name="f_cad" method="POST" action="cad.php"> 

                <label><strong>Nome de usuário:</strong></label> <br/>
                  <input type="text" name="f_username" required><br /><br/>
           
                  <label><strong>Email:</strong></label> <br/>
                  <input type="email" name="f_email" required><br /><br/>
           
                  <label><strong>Senha:</strong></label><br/>
                  <input type="password" name="f_senha" required><br /><br/>

                  <input type="submit" id="entr" value="Enviar" href="_cadprodutos.php">
                  <input type="reset" value="Limpar">
                </form>
            </div>
            
        
        </div>
        
        <div class="col sid"></div>
    </div>
    
    </div>
</body>
</html>