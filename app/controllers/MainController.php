<?php

namespace app\controllers;

use ishop\Cache;


class MainController extends AppController {

  public function indexAction () {
    //echo __METHOD__;
    $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');

    $brands = \R::find('brand', 'LIMIT 3');
    $brands = \R::find('brand', 'LIMIT 3');
    $hits = \R::find('product', "hit = '1' AND status = '1' LIMIT 8");
    $this->set(compact('brands', 'hits'));

//    $posts = \R::findAll("test");
//    $post = \R::findOne("test", "id=?", [2]);
    //debug($posts);
    //debug($post);

//    $name = 'John';
//    $age = 30;
//    $names = ['Andrey', 'Jane',];


//    $cache = Cache::instance();
//    $cache->set('test', $names);
    /*
        $cache->delete('test');
        $data = $cache->get('test');
        if(!$data){
          $cache->set('test', $names);
        }
        debug($data);
    */
    //  $this->set(compact('name', 'age', 'names', 'posts'));

  }

}