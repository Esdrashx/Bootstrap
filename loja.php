  
<?php
incluir ( 'conexao.php' )
?>

<!DOCTYPE html>
<html lang="pt-br">

<cabeça>
    <meta charset="UTF-8">
    <title> Nossas Lojas - Full Stack Eletro </title>
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
      <h1 id= " titulo_pagina " > Nossas Lojas </h1>
    </header>
    <hr>

    <seção classe= " lojas " >
            <div class= " unidade " id= " loja1 ">
                <h3> Rio de Janeiro </h3>
                <p> Avenida Presidente Vargas 5000 </p>
                <p> 10 &ordm; andar </p>
                <p> Centro </p>
                <p> (021) 3333-3333 </p>
            </div>

            <div class= " unidade " id= " loja2 ">
                <h3> São Paulo </h3>
                <p> Avenida Paulista, 985 </p>
                <p> 03 &ordm; andar </p>
                <p> Jardins </p>
                <p> (011) 4444-4444 </p>
            </div>

            <div class= " unidade " id= " loja3 ">
                <h3> Santa Catarina </h3>
                <p> Rua Major &Aacute; vila 370 </p>
                <p> Vila Mariana </p>
                <p> (047) 5555-5555 </p>
                <p> </p>
            </div>
        </seção>

        </div>
     </td>
    </tr>

</table>
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