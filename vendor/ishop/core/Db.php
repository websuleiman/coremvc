<?php

namespace ishop;
use \RedBeanPHP\R as R;

class Db
{
  use TSingletone;

  protected function __construct()
  {
    $db = require_once CONF . '/config_db.php';
    \RedBeanPHP\R::setup($db['dsn'], $db['user'], $db['pass']);
    if( !\RedBeanPHP\R::testConnection() ){
      throw new \Exception("Нет соединения с БД", 500);
    }
    \RedBeanPHP\R::freeze(true);
    if(DEBUG){
      \RedBeanPHP\R::debug(true, 1);
    }


  }



}
