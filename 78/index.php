<?php  
	class Imac{
		public $screen = 'Retina 5K';
		protected $cpu = 'Intel Xeon w';
		private $keyboard = 'Magic Keyboard';
		function showHardware(){
			echo '<p>' . $this->cpu . '</p>';
			echo '<p>' . $this->keyboard . '</p>';
		}
	}
	$imac = new Imac();
	echo $imac->screen;
	//echo $imac->cpu;//неисправимая ошибка
	//echo $imac->keyboard;//неисправимая ошибка
	$imac->showHardware();
	class Macbook extends Imac{
		public $screen = 'Retina';
		protected $cpu = 'Intel core i5';
		function showHardware(){
			echo '<p>' . $this->screen . '</p>';
			echo '<p>' . $this->cpu . '</p>';
		}
	}
	echo '<h4>showHardware:</h4>';
	$macbook = new Macbook();
	$macbook->showHardware();
	
	class Ipad extends Macbook{
		public $screen = 'iquid Retina';
		protected $cpu = 'A12X Bionic';
		function showHardware(){
			echo '<p>' . $this->screen . '</p>';
			echo '<p>' . $this->cpu . '</p>';
		}
	}
	echo '<h4>showHardware:</h4>';
	$ipad = new Ipad();
	$ipad->showHardware();

	class Iphone extends Ipad{
		public $screen = '1080 x 1920';
		protected $cpu = 'Apple A11 Bionic';
		protected $touchId = 'Touch ID 2 generation';
		function showHardware(){
			echo '<p>' . $this->screen . '</p>';
			echo '<p>' . $this->cpu . '</p>';
			echo '<p>' . $this->touchId . '</p>';
		}
	}
	echo '<h4>showHardware:</h4>';
	$iphone = new Iphone;
	$iphone->showHardware();
?>