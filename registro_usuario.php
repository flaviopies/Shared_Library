<html>
  <head>
    <h1 align="center"> Formulário de inscrição </h1>
  </head>
  <body>
    <div align="center">
		<table border="0">
        <Form Action="http://127.0.0.1/biblioteca/confirmacao_registro_usuario.php" Method="Post">
        <tr>
		<td> E-mail: </td>
		<td> <Input type="text" name="email"><BR> </td>
	    </tr>
		<tr>
		<td> Nome: </td>
        <td> <Input type="text" name="nome"><BR> </td>
		</tr>
		<tr>
        <td> Senha:</td>
        <td><Input type="password" name="senha"><BR></td>
		</tr>
		</table>
        <Input type="submit" value="Enviar"><BR>
        </Form>
	<a href="http://127.0.0.1/biblioteca/home.php"> Retornar à página inicial </a>
    </div>
  </body>
</html>