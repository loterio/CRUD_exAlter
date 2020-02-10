<?php 

  include_once "conf/default.inc.php";
  require_once "conf/Conexao.php";

  // recebendo variáveis de cad.php
  if(isset($_POST['codCad'])){
    $code = $_POST['codCad'];
    $description = isset($_POST['descCad']) ? $_POST['descCad'] : null;

    $pdo = Conexao::getInstance();
    $stmt = $pdo->query("UPDATE marca SET descricao='$description' WHERE codigo='$code'; ");

    header("location:index.php");
  }
  
  // echo "$code and $description<br>";

  $acao = isset($_GET['act']) ? $_GET['act'] : null;
  if($acao == 'editar') {
    $codigo = isset($_GET['cod']) ? $_GET['cod'] : null;
    buscarDados($codigo);
    // header("location:index.php");
  }

  function buscarDados($cod) {
    $pdo = Conexao::getInstance();
    $stmt = $pdo->query("SELECT * FROM marca WHERE codigo = $cod;");
    $dados = array();
    while ($line = $stmt->fetch(PDO::FETCH_ASSOC)){
      $dados['cod'] = $line['codigo'];
      $dados['desc'] = $line['descricao'];    
    }
    return $dados;
  }
  // header("location:index.php");
?>
<!-- <a href="index.php">voltar</a> -->

