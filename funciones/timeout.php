<?php

/*
if(!isset($_SESSION)) 
{ 
session_set_cookie_params(1800); // las sesion de los cookies durara 1 hora en el cliente  
session_start();
}
*/

if(!isset($_SESSION['timeout']))
  {
    $_SESSION['timeout'] = time();
  }
else
  {
    if ($_SESSION['timeout'] + 60*5 < time()) 
      {
       // session timed out
        $_SESSION['contenido'] = $contenido;
        header("location: ".$maindir."login/logout.php?code=101");
        exit();

      }
    else
      {
        $_SESSION['timeout'] = time();
      }
  }

?>