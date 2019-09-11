<?php
include "class/ArrayList.php";

$arr=new ArrayList();
$arr->arrList();
$arr->add(20);
$arr->add(100);



echo $arr->get(0);
