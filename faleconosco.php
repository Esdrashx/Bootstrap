  
<?php
incluir ( 'conexao.php' )
?>

<!DOCTYPE html>
<html lang="pt-br">

<cabeça>
    <meta charset="UTF-8">
    <title> Contato - Full Stack Eletro </title>
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
<h1 id="titulo_pagina"> Contato </h1>
</header>

<hr>

<?php
    include ( 'tabelac.html' );
    ?>

    <div class="alic">

    <nav class= " container-fluid " >
    <section class= " contato " >
    <div class= " contatos " >
    <img src="./imagens/img - email.png"> contato@fullstackeletro.com
</div>

    <h4>Nome: </h4>
    <input type="test" style="width: 250px;">
    <h4>Mensagem: </h4>
    <textarea style="width: 250px;"></textarea>
    <input type="submit" value="Enviar">
 </form> 
 <?php
            $sql= "selecione * dos comentários" ;
            $resultado= $conn -> consulta ( $ sql );

            if ( $result -> num_rows > 0 ) {
                while ( $rows = $result -> fetch_assoc ()) {
                    echo  "Dados:" , $rows [ 'dados' ], "<br>" ;
                    echo  "Nome:" , $rows [ 'nome' ], "<br>" ;
                    echo  "Mensagem:" , $rows [ 'msg' ], "<br>" ;
                    echo  "<hr>" ;
                }
            } else {
                echo  "Ainda não há comentários" ;
            }
    ?>

</div>
 </div>
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