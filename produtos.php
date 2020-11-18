  
  
<?php
incluir ( 'conexao.php' )
?>

<!DOCTYPE html>
<html lang="pt-br">

<cabeça>
    <meta charset="UTF-8">
    <title> Produtos - Full Stack Eletro </title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="./js/funcoes.js"></script>

    < Roteiro src= " https://code.jquery.com/jquery-3.3.1.slim.min.js " integridade =" SHA384-Q8i / X + 965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH + 8abtTE1Pi6jizo " crossorigin =" anonymous " > </script de >
    < Roteiro  src= " https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integridade =" SHA384-ZMP7rVo3mIykV + 2 + 9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK / l8WvCWPIPm49 " crossorigin = " anônimo " > </script >
    < Roteiro  src= " https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js " integridade =" SHA384-ChfqqxuZUCnJSK3 + MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW / JmZQ5stwEULTy " crossorigin =" anonymous " > </script de >
    < Vínculo  rel= " stylesheet " href =" https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css " integridade =" SHA384-MCw98 / SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO " crossorigin =" anonymous " >
</head>

<corpo>
    <principal>
    <div class="margem">
    
    <?php
        include ( 'menu.html' );
        ?>

<cabeçalho>
        <h1 id= " titulo_pagina " > Produtos </h1>
    </header>
    <hr>

<seção classe= " categorias ">
         <h3> Categorias </h3>
         <ul>
         <li onclick= " exibir_todos ('todos') "> Todos (12) </li>
         <li onclick= " exibir_categoria ('Geladeira') "> Geladeiras (3) </li>
         <li onclick= " exibir_categoria ('fogao') " > Fogões (2) </li>
         <li  onclick= " exibir_categoria ('microondas') " > Microondas (3) </li>
         <li  onclick= " exibir_categoria ('lavadoraderoupas') " > Lavadoura de roupas (2) </li>
         <li  onclick= " exibir_categoria ('lavaloucas') " > Lava-louças (2) </li>
         </ul>
</seção>

<?php

$sql= "selecione * do produto";
$resultado= $conn -> consulta ( $sql );

if ( $result ->num_rows > 0 ) {
    while ( $rows= $result -> fetch_assoc ()) {
?>

        <div class= " box_produto " id= " Gel<?php  echo  $rows [ " categoria " ]; ?> " >
            <img src= " <?php  echo  $rows [ " imagem " ]; ?> " width= " 120px " onmouseover = " mouseOver (this); " onclick = " destaque (this); " >
            <Br>
            <p> <?php  echo  $rows [ "descrição" ]; ?> </p>
            <hr>
            <p id= " preço_antes " > R $ <?php  echo  $rows [ "preco" ]; ?> </p>
            <p id= " preço_atual " > R $ <?php  echo  $rows [ "pré-final" ]; ?> </p>
            <Br>
            <a href= " <?Php  echo  $linhas [ "link" ]; ?> " >
                <button  style= " cursor: pointer " type= " submit " > Comprar </button> </a>
        </div>


<?php   
            }
          } else {
         echo  "Nenhum produto cadastrado" ;
          }
           ?>

    </table>
    <tr><td>
    <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br>
    <footer id="rodape"> 
        <h3 id="formasdepagamento">Formas de Pagamento</h3>
        <img src="./imagens/logo pagamento.jpg" alt="Formas de Pagamento" width ="500px">
        <p> &copy; Recode Pro </p>
      </footer>
    </div>
</body>
</html>