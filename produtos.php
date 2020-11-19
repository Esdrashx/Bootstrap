<?php
include ( 'conexao.php' )
?>

<!DOCTYPE html>
<html lang= " pt-br ">
<head>
<meta charset= " UTF-8 ">
<title> Produtos - Full Stack Eletro </title>
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
        include ( 'tabelap.html' );
        ?>
<header>
<h1 id="titulo_pagp">Produtos</h1>
</header>
   
    <hr>

    <div class="container-fluid">

   <section class="categorias">
    <h3>Categorias</h3>
    <ul>
    <li onmouseover="mouseLista(this);" onclick="exibir_todos();">Todos(12)</li>
    <li onmouseover="mouseLista(this);" onclick="exibir_categoria('geladeira');">Geladeiras(3)</li>
    <li onmouseover="mouseLista(this);" onclick="exibir_categoria('fogão');">Fogões(2)</li>
    <li onmouseover="mouseLista(this);" onclick="exibir_categoria('microondas');">Microondas(3)</li>
    <li onmouseover="mouseLista(this);" onclick="exibir_categoria('maquinadelavar');">Máquina de Lavar(2)
    </li>
    <li onmouseover="mouseLista(this);" onclick="exibir_categoria('lavalouca');">Lava Louças(2)</li>
    </ul>
    </section>
    <section class="produtos">

    <?php

$sql= "select *from produto";
$result= $conn->query($sql);

if ($result->num_rows > 0) {
    while ($rows= $result->fetch_assoc()) {
?>

<div class="box_produto" id="geladeira<?php echo $rows["categoria"]; ?>">
<img src="<?php echo $rows["imagem"]; ?>" width="120px" onmouseover="mouseOver(this);" onclick="destaque(this);">
<br>
<p><?php echo $rows["descrição"]; ?></p>
<hr>
<p id="preço_antes">R$ <?php echo $rows["preco"]; ?></p>
<p id="preço_atual">R$ <?php echo $rows["precofinal"]; ?></p>
<br>
<a href="<?php echo $rows["link"]; ?>">
<button style="cursor:pointer" type="submit">Comprar</button></a>
</div>

<?php
    }
} else {
    echo ("Nenhum produto cadastrado");
}
?>

</section>
</div>        

<br>  <br>  <br>  <br>  <br>
<br>  <br>  <br>  <br>  <br>
<br>  <br>  <br>  <br>  <br>

<footer  id= " rodape "> 
<h3 id= " formasdepagamento "> Formas de Pagamento </h3>
<img src= " ./imagens/logo pagamento.jpg " alt= " Formas de Pagamento " width= " 500px " >
<p> &copy; Recode Pro </p>
</footer>
</main>
</body>
</html>
