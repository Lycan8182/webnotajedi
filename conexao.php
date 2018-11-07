<?php

define("SERVE", array
(
   "host"=>"ec2-184-73-169-151.compute-1.amazonaws.com",
   "user"=>"yyyvkbvhmuckcw",
   "pass"=>"cac01efaba962eacf00264ce7cc3a753fff8bbd19e39190f23d967695a244617",
   "dbase"=>"d7aumm1s1u05k4",
   "port"=>"5432"

)
);

function getConnection()
{
  $link=mysqli_connect(SERVER['host'],SERVER['user'],SERVER['pass'],SERVER['host'],);
}
