<?php  
namespace Laravel{
	class Controller{
		protected $enemy = '0';
		function sel(){
			echo '<p>' . $this->enemy . '</p>';
		}
	}

	class Game{
		protected $enemy = '0';
		function sel(){
			echo '<p>' . $this->enemy . '</p>';
		}
	}

	class Assets{
		protected $enemy = '0';
		function sel(){
			echo '<p>' . $this->enemy . '</p>';
		}
	}
}
?>