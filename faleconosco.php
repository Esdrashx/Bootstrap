<?php
include ( 'conexao.php' )
?>

<!DOCTYPE html >
<html  lang= " pt-br " >
<head >
    <meta  charset= " UTF-8 " >
    <title> Contato - Full Stack Eletro </title >
    <link  rel= " stylesheet " href= " ./css/estilo.css " >
    <script  src= " ./js/funcoes.js " > </script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class= " margem " >
    <main>
    <?php
        include ( 'menu.html' );
        ?>

    <?php
    include ( 'tabelac.html' );
        ?>

<header>
<h1 id="titulo_pagina">Contatos</h1>
</header>
<hr>
<br>

<nav class="container-fluid">
<section class="contatos">
<div class="contato">
<img src="./imagens/img - email.png"><br>
<p>contato@fullstackeletro.com</p>
</div>

<div class="telefone">
<img src=""><br>
<p>(11) 99999-9999</p>
</div>
</section>

<br><br><br>
<div class="container">
<form method="post" action="" class="sugestao">
<div class="comentarios">
<h4>Nome:</h4>
<input type="text" name="nome" style="width: 500px"><br>
<h4>Mensagem:</h4>
<input type="text" name="msg" style="width: 500px; height: 100px"><br>
<input type="submit" name="submit" value="Enviar"><br>
</div>
</form>

 <?php
            $sql = "selecione * dos comentários" ;
            $resultado = $conn -> consulta ( $sql );

            if ( $ result -> num_rows > 0 ) {
                while ( $ rows = $ result -> fetch_assoc ()) {
                    echo   "Dados:" , $ rows [ 'dados' ], "<br>" ;
                    echo   "Nome:" , $ rows [ 'nome' ], "<br>" ;
                    echo   "Mensagem:" , $ rows [ 'msg' ], "<br>" ;
                    echo   "<hr>" ;
                }
            } else {
                echo   "Ainda não há comentários" ;
            }
    
    ?>

</nav>

<br>  <br>  <br>  <br>  <br>
<br>  <br>  <br>  <br>  <br>
<br>  <br>  <br>  <br>  <br>
  
<footer id= " rodape "> 
<h3 id= " formasdepagamento " > Formas de Pagamento </h3>
<img src= " ./imagens/logo pagamento.jpg " alt= " Formas de Pagamento " width= " 500px " >
<p> &copy; Recode Pro </p>
</footer>
</main>
</body>
</html>
