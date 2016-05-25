<?php session_start();


define("SYSPATH",'system/');

require SYSPATH."client.php";


$action = input_get('action');

if (file_exists('site/action/'.$action.'.php'))
{
    require "site/database/database.php";
 db_connect();
    require('site/action/'.$action.'.php'); 
  // db_disconnect();
}



?>
