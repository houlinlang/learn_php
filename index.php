<?php
namespace learnphp;

include 'vendor/autoload.php';

use helper\LeeCode;

//开启报错
ini_set('max_execution_time', '0');
ini_set("display_errors", 1);
ini_set('max_execution_time', '0');
error_reporting(E_ALL);

$ans = LeeCode::Solution1190("(abc(de)f)");
echo $ans;
