<?php
    //pour include des classes
    session_start();
    require_once './variable.php';
    spl_autoload_register('autoload');
    function autoload($class_name){
	$array_paths = array(
		'database/',
		'app/classes/',
		'models/',
		'controllers/'
	);
    //explode signifier la conversion \\ en /;
	$parts = explode('\\',$class_name);
    //array_pop supprimer la dernier in array (recuperer)
	$name = array_pop($parts);
	foreach($array_paths as $path){
		$file = sprintf($path.'%s.php',$name);
		if(is_file($file)){
			include_once $file;
		}
	}
    //sprintf permet de affecter $name in %s
    }
?>