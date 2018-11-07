<?php

require "conexao.php";

function cadastrar($nome,$email,$nota01,$nota02)
{
   $link=getConnection();

   $query= "insert into tb_notas(nome, email, nota01, nota02) values=({'$nome'},{'$email'},{$nota01}, {$nota02})";

   return mysqli_query($link,$query);
}

function buscar()
{
  $link=getConnection();

  $resultado="select*from tb_notas";
   $lista= array();
   while ($aux=mysqli_fetch_assoc($resultado))
   {
     array_push($lista,$aux);
   }
   return $lista;
}

function buscarPorId($id)
{
  $link=getConnection();

  $resultado="select*from tb_notas where id= {$id}";

 $registro=mysqli_query($link,$query);

   return mysqli_tetch_assoc($registro);
}


function atualizar($nome,$email,$nota01,$nota02)
{
   $link=getConnection();

   $query= "update set nome = '{$nome}', email='{$email}', nota01={$nota01},nota02= {$nota02}) where id={$id}";

   return mysqli_query($link,$query);
}

function deletar($id)
{
  $link=getConnection();

  $resultado="delete from tb_notas where id= {$id}";

   return mysqli_tetch_assoc($registro);
}
