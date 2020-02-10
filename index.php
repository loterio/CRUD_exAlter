<!DOCTYPE html>
<?php 
  include_once "conf/default.inc.php";
  require_once "conf/Conexao.php";
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Alter</title>
</head>
<body>
  <table>
    <tr>
      <th>#</th>
      <th>Desc.</th>
      <th>Alt.</th>
    </tr>
    <?php
    $pdo = Conexao::getInstance();
    $stmt = $pdo->query("SELECT * FROM marca");
      while ($line = $stmt->fetch(PDO::FETCH_ASSOC)){
        ?> 
        <tr>
          <td><?php echo $line['codigo']; ?></td> 
          <td><?php echo $line['descricao']; ?></td>
          <td><a href='cad.php?cod=<?php echo $line['codigo']; ?>&act=<?php echo "editar" ?>'>a</a></td></tr>
  <?php } ?>
  </table>  
</body>
</html>