<?php include 'menu.php'; ?>

<body>

	<div class="container">
	  <div class="row">
	    <div class="col"></div> 
	    	<div class="col-6">
				<form class="form-login form">
	    		<center><h4>Login</h4></center>
				<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Senha</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha">
			</div>
			<center><button type="submit" class="btn btn-primary">Entrar</button></center>
			<center><label class="black">Não possui uma conta? <a href="cadastro.php">Cadastre-se</a></label></center>
				</form>
		</div>
	   <div class="col"></div>
    </div>	

	<?php 
	  $nome = $_POST['nome'];
	  $entrar = $_POST['entrar'];
	  $senha = md5($_POST['senha']);
	  $connect = mysql_connect('root','root','');
	  $db = mysql_select_db('banco.sql');
	    if (isset($entrar)) {
	             
	      $verifica = mysql_query("SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'") or die("erro ao selecionar");
	        if (mysql_num_rows($verifica)<=0){
	          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
	          die();
	        }else{
	          setcookie("login",$login);
	          header("Location:index.php");
	        }
	    }
?>
</body>