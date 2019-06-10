<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php";?>
<body>
    <?php include_once "header.php";?>

<main class="container">
    <section class="row">
        <div class="col-md6"></div>  <form action="salvarProduto.php" method="post" enctype="multipart/form-data">
    <form action ="salvarUsuario.php" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
      <label for="nomeUsuario">Nome do Usuario</label>
      <input type="text" class="form-control" id="nomeUsuario"  placeholder="Nome do Usuario" 
    </div>
    <div class="form-group">
      <label for="emailUsuario">Email do Usuario </label>
      <input type="email" class="form-control" id="emailUsuario" placeholder="Email do Usuario">
    </div>
    <div class="form-group">
      <label for="senhaUsuario">Senha do Usuario</label>
      <input type="passaword" class ="form-control" id="senhaUsuario"  placeholder="Senha do Usuario">
      
    </div>
    <div class="form-group">
      <label for="nivelUsuario">Nivel do Usuario </label>
      <select name="nivelUsuario" id="nivelUsuario" class="form-control">
      <option selected disabled> Selecione o nivel! </option> 
<option value="0">Administrador</option>
<option value="1">Usuario</option>
</select>

    </div>
    <button class="btn btn-success" type="submit">Finalizar cadastro</button>
  </form>
  
    </section>
</main>


</body>
</html>