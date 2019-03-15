<?php 

$nome = $_POST['nome'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('mysql:host=localhost;dbname=projeto.sql", "root", ""');
$db = mysql_select_db('projeto.sql');
$query_select = "SELECT nome FROM usuarios WHERE nome = '$nome'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$loginArray = $array['nome'];


 if($nome == "" || $nome == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
 
    }else{
      if($logarray == $nome){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$nome','$senha')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
      }
    }
?>