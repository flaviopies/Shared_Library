<html>
  <head>
	<! http://www.w3schools.com/css/css_examples.asp Useful link to learn CSS >
    <h1 align="center"> Biblioteca Comunitária </h1>
    <div align="center">	
    <img src="shared_library\images\man_reading2.png" align="center">
    </div>
  </head>
  <body>
    <div align="center">
	<BR>
        <Form Action="http://127.0.0.1/biblioteca/registro_livro.php" Method="Post">
        <table border="0"> 
		<tr>
		<td> Usuário:</td>
        <td> <Input type="text" name="usuario"><BR> </td>
		<tr>
        <td> Senha: </td>
        <td> <Input type="password" name="senha"><BR> <td>
		</tr>
		</table>
        <Input type="submit" value="OK"><BR>
        Para se registrar 
	<a href="http://127.0.0.1/biblioteca/registro_usuario.php"> clique aqui </a><BR>
        </Form>
    </div>
  </body>
</html>