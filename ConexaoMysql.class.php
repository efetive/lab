<?php
	class ConexaoMysql
		{
			public $servidor;
			public $usuario;
			public $senha;
			public $bancoDeDados;
			
			public function conectar(){
				mysql_connect($this->servidor, $this->usuario, $this->senha) or die(mysql_error()) ;
			}
			
			public function selecionarBD(){
				mysql_select_db($this->bancoDeDados) or die(mysql_error());
			}
			
			public function fechar(){
				mysql_close();
			}
		}
		// até 12 min
?>