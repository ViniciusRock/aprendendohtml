<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Estudos de HTML5 - INDEX</title>
</head>
</body>
	<div align="center">
	
	<img src="html.png" height="100"/>
	<br/>
	<hr>
	<h1>Estudos de HTML5 e Css3</h1>
	<hr>
			<h3>Módulo 1: Html Básico</h3><br/>
			1.<a href="1.html">O que é HTML.html</a> <br/><br/>
			2.<a href="2.html">Estrutura de uma página HTML</a> <br/><br/>
			3.<a href="3.html">Cabeçalhos</a> <br/><br/>
			4.<a href="4.html">Parágrafos</a> <br/><br/>
			5.<a href="5.html">Formatação de textos</a> <br/><br/>
			6.<a href="6.html">Listas não ordenadas</a> <br/><br/>
			7.<a href="7.html">Listas ordenadas</a> <br/><br/>
			8.<a href="8.html">Imagens</a> <br/><br/>
			9.<a href="9.html">Links</a> <br/><br/>
			10.<a href="10.html">Tabelas(em progresso 26/04)</a> <br/><br/>
			11.<a href="11.html">Formulários(nada ainda)</a> <br/><br/>
			12.<a href="12.html">Iframe(nada ainda)</a> <br/><br/>
			13.<a href="13.html">Acionadores de Eventos -ex OnClick-(nada ainda)</a> <br/><br/>
			<hr>
			<?php
@$fp = fopen("logfile.html", "ab");
if(!$fp) {
echo "Could not open file for logging";
}
else {
$str = $_SERVER["REMOTE_ADDR"];
$str .= " ";
$str .= date("H:i, d M Y");
fwrite($fp, $str);
fclose($fp);
}
?> 
			<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>	
			
			<h3>Módulo #2 - CSS Básico(falta completar o módulo 1)</h3>
			1-O que é CSS <br/>
			2-Inline CSS <br/>
			3-Seletores CSS	<br/>
			4-Classes e IDs	<br/>
			5-Tags Div e SPAN	<br/>
			6-Bordas	<br/>
			7-Formatação de Texto	<br/>
	</div>
</body>
</html>
