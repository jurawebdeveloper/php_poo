<?php
require_once 'a.php';
require_once 'b.php';
use Application\Form as Form;
use Application\Field as Field;
var_dump(new Form);
var_dump(new Field);

use Components\Form as CompForm;
use Components\Field as CompField;
var_dump(new CompForm);
var_dump(new Components\Form);
