<?php 
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
$con = mysqli_connect("127.0.0.1", "root", "", "pevstore") or die
 ("Sem conexão com o servidor");
 
$result = mysql_query("SELECT * FROM Pessoa 
WHERE nome = '$login' AND senha = '$senha'");

if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:site.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:login.php');
   
  }
?>