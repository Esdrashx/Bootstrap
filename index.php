<?php
include ( 'conexao.php' )
?>

<!DOCTYPE html>
<html lang= " pt-br ">
<head>
    <meta charset= " UTF-8 ">
    <title> Full Stack Eletro </title>
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

<header>
<div class="container-fluid">
<img src="./imagens/logo - teste.jpg" class="img-fluid" alt="Informacoes" style="width:100%">
<h1 class="h1-responsive mb-6 text-center text-white shadow-lg" style="margin-top: -350px;">Sejam Bem-Vindos</h1>
<p class="responsive mb-6 text-center text-white shadow-lg">Aqui em nossa loja programadores tem desconto nos produtos para sua casa!</p>
</div>
</header>

<br>  <br>  <br>  <br>  <br>
<br>  <br>  <br>  <br>  <br>

<footer id= " rodape "> 
<h3 id= " formasdepagamento "> Formas de Pagamento </h3>
<img src= " ./imagens/logo pagamento.jpg " alt= " Formas de Pagamento " width= " 500px ">
<p> &copy; Recode Pro </p>
</footer>
</main>
</body>
</html>