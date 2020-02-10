<!DOCTYPE html>
<?php 
  include "action.php";
  include "conf/default.inc.php";
  require_once "conf/Conexao.php";
  $dados=buscarDados($codigo);
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Alter</title>
</head>
<body>
  <a href="index.php">voltar</a>
  <form action="action.php" method="post">
    <input type="text" name='codCad' id='codCad' value='<?php if($acao == 'editar') echo $dados['cod']; ?>' readOnly>
    <input type="text" name='descCad' id='descCad' value='<?php if($acao == 'editar') echo $dados['desc']; ?>'>
    <input type="submit">
  </form>
</table>  
</body>
</html>