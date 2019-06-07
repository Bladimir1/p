<meta charset="utf-8">
<?php 
	include 'laravel.php';
	include 'symphony.php';

	use Laravel\Select as Lar;
	use Symphony\Select as Sym;

	$ekz1 = new Lar();
	$ekz1->sel();

	echo '<br>';
	$ekz2 = new Sym();
	$ekz2->sel();
?>