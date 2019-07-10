<?php
$classes = spl_classes();
foreach ($classes as $classe) {
	$rc = new ReflectionClass($classe);
	//echo '<pre>';
	print 'Classe: '. $classe.PHP_EOL;

	foreach ($rc->getMethods() as $method) {
		print '......Método: '.$method->getName();
		print '(';
		$paramNames = array();
		$parameters = $method->getParameters();
		if(count($parameters)>0){
			foreach ($parameters as $parameter) {
				if($parameter->isOptional()){
					$paramNames[]='['.$parameter->getName().']';
				}else{
					$paramNames[]=$parameter->getName();
				}
			}
		}
		print implode(', ', $paramNames);
		print ')';
		print '<br>' . PHP_EOL;
	}
}