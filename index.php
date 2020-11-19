<? php 
$ servername = "localhost" ;
$ username = "root" ;
$ senha = "" ;
$ database = "fseletro" ;


$ conn = mysqli_connect ( $ servername , $ username , $ password , $ database );

if (! $ conn ) {
    die ( "A conexão Falhou" . mysqli_connect_error ());
}
?>

<! DOCTYPE html >
< html  lang = " pt-br " >
< head >
    < meta  charset = " UTF-8 " >
    < title > Full Stack Eletro </ title >
    < link  rel = " stylesheet " href = " ./css/estilo.css " >
    < script  src = " ./js/funcoes.js " > </ script >
</ head >
< body >
    < div  class = " margem " >

    <? php
        include ( 'menu.html' );
        ?>

    < tr > </ tr >
    < hr >
    < Br >  < br >  < br >  < br >  < br >
    
    < main >
        < h1 > Sejam Bem Vindos! </ h1 >
        < p > Aqui em nossa loja, < b > programadores tem desconto </ b > nos produtos para sua casa! </ p >
    </ main >

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