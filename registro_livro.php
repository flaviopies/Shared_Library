<html>
<body>
	<?php
		
	?>
	<h1 align="center"> Novo Registro </h1>
	<div align ="center">
	<!Formulário para se adicionar livros>
	<h3> Por favor preencher as informações abaixo </h3>
				<table border="1" cellspacing="2" align="center" width="30%">
				<tr>
				<th> Nome </th>
				<th width="25%"> Autor </th>
				<th width="10%"> Tema </th>
				<th width="10%"> Nº Págs </th>
				<th width="10%"> Dono </th>
				<th width="10%"> Emprestado à </th>
				</tr>
				<FORM ACTION=\"http://127.0.0.1/biblioteca/registro_livro.php\" METHOD=\"POST\">
						<tr>
						<td> <INPUT TYPE= "Text" value=0 name="nome"> </td>
						<td> <INPUT TYPE= "Text" value=0 name="autor"> </td>
						<td> <INPUT TYPE= "Text" value=0 name="tema"> </td> 
						<td> <INPUT TYPE= "Text" value=0 name="n_pag"> </td> 
						<td> <INPUT TYPE= "Text" value=0 name="proprietario"> </td> 
						<td> <INPUT TYPE= "Text" value=0 name="locatario"> </td> 
						</tr>	
				</table>	
				<INPUT TYPE= "Submit" value="Adicionar">
				</FORM>
	</div>
	<?php
	$nome = $_POST['nome'];
	$autor = $_POST['autor'];
	$tema = $_POST['tema'];
	$n_pag = $_POST['n_pag'];
	$proprietario = $_POST['proprietario'];
	$locatario = $_POST['locatario'];
	if($nome && $autor && $tema && $n_pag && $proprietario && $locatario)
		{
		$id_proprietario = "";
		$id_locatario = "";
		$pesquisa_ids = "SELECT * FROM usuarios";
		$resultado_ids = mysql_query($pesquisa_ids);
		while($linha=mysql_fetch_row($resultado_ids))
			{
				if($proprietario == $linha[1]) 
				{
				$id_proprietario = $linha[0];
				}
				elseif($locatario == $linha[1]) 
				{
				$id_locatario = $linha[0];
				}
				else
				{
				die("Os nomes inseridos não constam no sistema. <BR> Por favor inseri-los antes de realizar um registro de livro. <BR> 
				<a href=\"http://127.0.0.1/biblioteca/registro_usuario.php\"> Clique aqui para inserir um usuário </a><BR>")
				}
			}
		$pesquisa = "INSERT INTO livros (Nome, Autor, Num_Pag, Assunto, ID_Proprietario, ID_Locatario ) VALUES ( '$nome', '$autor' , '$tema', '$num_pag','$id_proprietario','$id_locatario')";
		$resultado = mysql_query($pesquisa);
		}
	?>
</body>
</html>
