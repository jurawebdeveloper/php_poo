<?php
require_once 'a1.php';
require_once 'b1.php';
require_once 'c1.php';

use Library\Widgets\Field;
use Library\Widgets\Form;
use Library\Container\Table;
var_dump(new Field);
print '<br>';
var_dump(new Table);
print '<br>';
var_dump(new Form);
print '<br>';

$f = new Form;
$f->show();