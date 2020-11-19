<? php 
$ servername = "localhost" ;
$ username = "root" ;
$ senha = "" ;
$ database = "fseletro" ;


$ conn = mysqli_connect ( $ servername , $ username , $ password , $ database );

if (! $ conn ) {
    die ( "A conexão Falhou" . mysqli_connect_error ());
}

if ( isset ( $ _POST [ 'nome' ]) && isset ( $ _POST [ 'msg' ])) {
    $ nome = $ _POST [ 'nome' ];
    $ msg = $ _POST [ 'msg' ];
    
    $ sql = "inserir em comentários (nome, msg) valores ('$ nome', '$ msg')" ;
    $ resultado = $ conn -> consulta ( $ sql );   
}
?>  


<! DOCTYPE html >
< html  lang = " pt-br " >
< head >
    < meta  charset = " UTF-8 " >
    < title > Produtos - Full Stack Eletro </ title >
    < link  rel = " stylesheet " href = " ./css/estilo.css " >
    < script  src = " ./js/funcoes.js " > </ script >
</ head >
< body >
    < div  class = " margem " >
    
    <? php
        include ( 'menu.html' );
        ?>

    < header >
    < h1 > Produtos </ h1 >
    </ header >
    < hr >

    <? php
        include ( 'tabelap.html' );
        ?>
        
                < tr >
                < td  rowspan = " 5 " width "20%" valing = " top " >

                <? php
                $ sql = "selecione * de tb_produtos" ;
                $ resultado = $ conn -> consulta ( $ sql );

                if ( $ result -> num_rows > 0 ) {

               while ( $ rows = $ result -> fetch_assoc ()) {
                ?>

           <? php
           include ( 'produtos.html' );
           ?>

            <? php
            }
          } else {
         echo   "Nenhum produto cadastrado" ;
          }
           ?>

    </ table >
    < tr > < td >
    < Br >  < br >  < br >  < br >  < br >
    < Br >  < br >  < br >  < br >  < br >
    < Br >  < br >  < br >  < br >  < br >
    < footer  id = " rodape " > 
        < h3  id = " formasdepagamento " > Formas de Pagamento </ h3 >
        < img  src = " ./imagens/logo pagamento.jpg " alt = " Formas de Pagamento " width = " 500px " >
        < p > & copy; Recode Pro </ p >
      </ footer >
    </ div >
</ body >
</ html >
