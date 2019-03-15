<?php include 'menu.php'; ?>
<body>
   <div class="container">
    <div class="row">
      <div class="col"></div> 
        <div class="col-6 cadastro">
        <form class="form-cadastro form" method="post" action="salvaCadastro.php">
        <center><h4>Cadastro de Usuário </h4></center>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" placeholder="Nome" name="nome">
       </div>
       <div class="form-group">
            <label>Data de Nascimento</label>
            <input type="date" class="form-control" placeholder="Data de Nascimento" name="dtnasc">
       </div>
        <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
      </div>
      <div class="form-group">
        <label>Senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha">
        </div>

      <center><button type="submit" class="btn btn-primary">Cadastrar</button></center>
        </form>
    </div>
     <div class="col"></div>
    </div>

</body>
</html>
   