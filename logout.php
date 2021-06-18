<?php
session_start();

if (empty($_SESSION)) {
  header("Location: index.php?msgErro=Você precisa se autenticar no sistema.");
}
else {
  session_destroy();
  header("Location: index.php?msgSucesso=Logout efetuado com sucesso!");
}
die();
 ?>
