<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php";?>
<body>
    <?php include_once "header.php";?>

<main class="container">
    <section class="row">
        <div class="col-md6">  
        <form action="salvarProduto.php" method="post" enctype="multipart/form-data">
    <form action ="logarUsuario.php" method="post" enctype="multipart/form-data">
    </div>  
    
    <div class="form-group">
      <label for="emailUsuario">Email do Usuario </label>
      <input type="email" class="form-control" id="emailUsuario" placeholder="Email do Usuario">
    </div>
    <div class="form-group">
      <label for="senhaUsuario">Senha do Usuario</label>
      <input type="passaword" class ="form-control" id="senhaUsuario"  placeholder="Senha do Usuario">
      
    </div>
    <a class='btn btn-sucess' href='cadastroUsuario.php'>Criar cadastro</a>
    <p>Ou</p>
<button class="btn btn-primary" type="submit">Logar </button>
  </form>
  
    </section>
</main>


</body>
</html>