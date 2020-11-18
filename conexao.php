<? php
	$ servidor = "localhost" ;
	$ login = "root" ;
	$ senha = "" ;
	$ bancodados = "fullstackeletro" ;
	$ conn = mysqli_connect ( $ servidor , $ login , $ senha , $ bancodados );
 
    if (! $ conn ) {
        die ( "Falha na conexão com o BD" . mysqli_connect_error ());
	}	
	
	if ( isset ( $ _POST [ 'nome' ]) && isset ( $ _POST [ 'msg' ])) {
		$ nome = $ _POST [ 'nome' ];
		$ msg = $ _POST [ 'msg' ];

		$ sql = "inserir em comentários (nome, msg) valores ('$ nome', '$ msg')" ;
		$ resultado = $ conn -> consulta ( $ sql );
    }
    ?> 