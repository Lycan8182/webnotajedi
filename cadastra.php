<?php

require "crud.php";

session_start();
 if($_SERVER['REQUEST_METHODO']==='POST')
{
  $nome= filter_input(INPUT_POST,'txtNome',FILTER_SANITIZE_STRING);
  $email= filter_input(INPUT_POST,'txtEmail',FILTER_SANITIZE_STRING);
  $nota01= filter_input(INPUT_POST,'txtNome',FILTER_SANITIZE_STRING);
  $nota02= filter_input(INPUT_POST,'txtNome',FILTER_SANITIZE_STRING);


if( registra($nome,$email,$nata01,$nota02))
{
  $_SESSION['msg']='Dados gravados com sucesso!';
}
else
{
  $SESSION['msg'] ='falha ao gravar.'   ;
}

header('location: index.html');
}
