<?php
/**
 * Created by PhpStorm.
 * User: wilder20
 * Date: 26/09/18
 * Time: 08:22
 */
require "../vendor/autoload.php";

use App\Wcs\Hello;
use HelloWorld\SayHello;


$test1=new Hello();
$test2=new SayHello();

echo $test1->talk();
echo $test2->world();

