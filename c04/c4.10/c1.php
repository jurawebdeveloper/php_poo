<?php
namespace Library\Widgets;
use Library\Container\Table;
use SplFileInfo;
class Form {
	public function fazAlgo(Field $x){}
	public function show(){
		print '<h1>Testando...</h1>';
		new Table;
		new SplFileInfo('/tmp/shadow');
	}
}