<?php include('head.php')?>
<?php include('header.php')?>
<?php include('nav.php')?>

<body>
	<div class="container">
	<h2 id="h2">Boucle</h2>
	</div>
	<div class="container">
	<h3 class="text-primary"> Boucle foreach</h3>
	</div>
	<div class="container">
	<div class="row">
	
		<?php
		foreach ($colors as $value){
			echo "<div class='col-3 p-3 mb-3  text-white text-center' style='background-color:$value;'>couleur est $value</div><br>";
		}?>
	<div class="container">
	<h3 class="text-primary"> Boucle for</h3>
	</div>
		<?php

for ($i = 0; $i<5; $i++) {
	$a+=100;  
} 
 echo "le nombre est de $a <br>";
 for($i = 0;$i<5; $i++){
 	$b+=50;
 }
 echo "le nombre est de $b <br>";
 for($i = 0;$i<5; $i++){
 	$c+=10;
 }
 echo "le nombre est de $c <br>";
?>
</div>
</div>
<div class="container">
	<h3 class="text-primary"> Boucle while</h3>
<?php while ($x<=5){
	echo "le nombre est $x <br>";
	$x++;
} ?>
</div>
</div>
<div class="container">
	<h3 class="text-primary">A partir d'une fonction</h3>
	<?php mafunction(); ?>
</div>
</div>
<div class="container">
	<h3 class="text-primary">Nouveau</h3>
	<div class="row">
<?php
		// foreach ($val as $dev){
		// 	echo "<div class='col-3 p-3 mb-3  text-white text-center' style='background-color:$colors2;'> $dev</div><br>";
for($i=0; $i < $lenghdevs; $i++){
	$random =rand(0,$lenghcolors2-1);
echo "<div class='col-2 p-4 mb-4 text-white text-center' style='background-color:$colors2[$random];'>$devs[$i]</div>";
}
		?>

</div>
</div>
</div>

<?php include('footer.php'); ?>

</body>