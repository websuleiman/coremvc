<?php

namespace app\controllers;
use ishop\base\Controller;
// use ishop\App;
use ishop\Cache;

class MainController extends AppController
{
  public function indexAction(){

  $posts = \RedBeanPHP\R::findAll('test');
  $post = \RedBeanPHP\R::findOne('test', 'id = ?', [2]);


  $this->setMeta('Главная страница', 'Описание', 'Ключевики');
$names = ['Dimon', 'jane', 'Mike'];
$cache = Cache::instance();
//$cache->set('test', $names);
$cache->delete('test');
$data = $cache->get('test');
if(!$data){
  $cache->set('test', $names);
}
//debug($data);
  $this->set(compact('posts'));

  }
}
