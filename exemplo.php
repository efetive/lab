<?php
	require("ConexaoMysql.class.php");
	
	$conexao = new ConexaoMysql;
	$conexao->servidor = 'localhost';
	$conexao->usuario = 'root';
	$conexao->senha = '';
	$conexao->bancoDeDados = 'obrtt_obr12';
	$conexao->conectar();
	$conexao->selecionarBD();
	//$conexao->fechar();
?>

<ul id="nav" class="clearfix">
	<?php
	$SQL = "SELECT * FROM estados order by nome;";
	$resultado = mysql_query($SQL) or die(mysql_error());
	while($linhas = mysql_fetch_array($resultado)){					
	?>
		<li class="menuEst"><a href=""><?php echo $linhas['nome']?> - <?php echo $linhas['sigla']; ?></a></li>
	<?php }?>
</ul>
