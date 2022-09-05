<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <title>Cadastrar produtos</title>

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
            <div class="form_cadprodutos">
                <h2>Cadastro de produtos</h2>
          
                <form name="f_cad" method="POST" action="cad_prod.php"> 

                <label><strong>Nome do Produto:</strong></label> <br/>
                  <input type="text" name="f_prodnome" required><br /><br/>
           
                  <label><strong>Preço:</strong></label> <br/>
                  <input type="number" name="f_prodpreco" required><br /><br/>

                  <label><strong>Descrição:</strong></label><br/>
                  <input type="text" name="f_proddesc" required><br /><br/>

                  <input type="submit" id="entr" value="Enviar" >
                  <input type="reset" value="Limpar">
                </form>
            </div>
        
        </div>
        
        <div class="col sid"></div>
        <div class="form_cadcategorias">
                <h2>Cadastro de categorias</h2>
          
                <form name="f_cad" method="POST" action="cad_cat.php"> 

                <label><strong>Nome da categoria:</strong></label> <br/>
                  <input type="text" name="f_prodnome" required><br /><br/>

                  <label><strong>Descrição:</strong></label><br/>
                  <input type="text" name="f_proddesc" required><br /><br/>

                  <input type="submit" id="entr" value="Enviar">
                  <input type="reset" value="Limpar">
                </form>
    </div>
    
    </div>
</body>
</html>