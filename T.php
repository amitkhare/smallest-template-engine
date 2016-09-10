class T{public $p;function v($f,$d=[]) {foreach ($d as $k=>$v) {$$k=$v;}ob_start();require($this->p.$f.'.php');return ob_get_clean();}}
