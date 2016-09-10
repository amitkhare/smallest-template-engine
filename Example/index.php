<?php

require(__DIR__."/../T.php"); // require template class

// take an instance
$theme = new T();

// set template path
$theme->p = __DIR__."/resources/";

// assign variables in array and access them in view file

$data = [
    'title'=>'Your Site Title',
    'var1'=>'value1'
];

// no need to add .php at the end of file
// call header and pass optional $data variable in second option
echo $theme->v('templates/header',$data);

// call home file and pass optional $data variable in second option
echo $theme->v('views/pages/home',$data);

// call footer and pass optional $data variable in second option
echo $theme->v('templates/footer',$data);
