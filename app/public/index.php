<?php
require_once dirname(__FILE__) . '/../bootstrap.php';


use SampleApp\testCustomComponent1 as Res1;
use SampleApp\testCustomComponent2 as Res2;



$res1 = new Res1();
$res1Response = $res1->makeRequest();

$res2 = new Res2();
$res2Response = $res2->makeRequest();


var_dump($res1);
var_dump($res2);
die();