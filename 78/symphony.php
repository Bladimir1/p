<?php 
namespace Symphony{
	class Controller{
		protected $player = '1';
		function sel(){
			echo '<p>' . $this->player . '</p>';
		}
	}

	class Game{
		protected $player = '1';
		function sel(){
			echo '<p>' . $this->player . '</p>';
		}
	}

	class Assets{
		protected $player = '1';
		function sel(){
			echo '<p>' . $this->player . '</p>';
		}
	}
}
?>