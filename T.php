<?php
// URL : https://github.com/amitkhare/SmallestTemplateEngine
// ### USAGE ###
// $theme = new T();
// $theme->p = __DIR__."/../resources/";
// $data = [
//     'var1'=>'value1',
//     'var2'=>'value2'
// ];
// echo $theme->v('templates/header',$data);
// echo $theme->v('views/pages/home',$data);
// echo $theme->v('templates/footer',$data);

class T{public $p;function v($f,$d=[]) {foreach ($d as $k=>$v) {$$k=$v;}ob_start();require($this->p.$f.'.php');return ob_get_clean();}}
