<?php
include ( 'conexao.php' )
?>

<!DOCTYPE html>
<html lang= " pt-br ">
<head>
<meta charset= " UTF-8 ">
<title> Nossas Lojas - Full Stack Eletro </title>
<link rel= " stylesheet " href= " ./css/estilo.css ">
<script src= " ./js/funcoes.js "> </script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class= " margem ">
    <main>
    <?php
        include ( 'menu.html' );
        ?>

    <?php
        include ( 'tabelal.html' );
        ?>

    <header>
    <h1> Nossas Lojas </h1>
    </header>
    <hr>

    <section class="container-fluid">
    <div class="row">
    <div class="lojas border border-info rounded">
    <h3>Rio de Janeiro</h3>
    <p>Avenida Presidente Vargas, 5000</p>
    <p>10 &ordm; andar</p>
    <p>Centro</p>
    <p>(21) 3333-3333</p>
    </div>

    <div class="lojas border border-info rounded">
    <h3>São Paulo</h3>
    <p>Avenida Paulista, 985</p>
    <p>3 &ordm; andar</p>
    <p>Jardins</p>
    <p>(11) 4444-4444</p>
    </div>

    <div class="lojas border border-info rounded">
    <h3>Santa Catarina</h3>
    <p>Rua Major &Aacute;vila, 370</p>
    <p>3 &ordm; andar</p>
    <p>Vila Mariana</p>
    <p>(47) 5555-5555</p>
    </div>
    </section>


<br>  <br>  <br>  <br>  <br>
<br>  <br>  <br>  <br>  <br>

<footer id= " rodape "> 
<h3 id= " formasdepagamento "> Formas de Pagamento </h3>
<img src= " ./imagens/logo pagamento.jpg " alt= " Formas de Pagamento " width= " 500px " >
<p> &copy; Recode Pro </p>
</footer>
</main>
</body>
</html>