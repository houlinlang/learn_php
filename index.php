<?php
include "vendor/autoload.php";
?>
<!DOCTYPE html>
<h1>php项目</h1>
<a href="sudoku/">数独</a>
<br>
<a href="leecode/">leecode</a>
<br>
<a href="practice/">页面测试</a>
<?php

use practice\Worker;

Worker::tester();
