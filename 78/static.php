<?php  
	function proverka(){
		$test = 0;
		$test++;
		echo $test . '<br>';
	}
	proverka();
	proverka();
	proverka();

	function proverkaStat(){
		static $test = 0;
		$test++;
		echo $test . '<br>';

	}
	echo '<br>';
	proverkaStat();
	proverkaStat();
	proverkaStat();

	class Myclass{
		function hi($text){
			echo $text . '<br>';

		}
		public $a = 12;
	}
	echo '<br>';
	$ekz = new Myclass();
	$ekz->hi('hello');
	echo $ekz->a . '<br>';

	class Mystat{
		static function hello($text){
			echo $text . '<br>';
		} 
		static $b = 13;

	}
	echo '<br>';
	Mystat::hello('kak dela?');
	Mystat::$b;
	
?>