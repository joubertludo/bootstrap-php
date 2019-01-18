<?php
switch ($_SERVER["SCRIPT_NAME"]) {
	
		case "/exo-php/about.php":
		$CURRENT_PAGE = "about";
		$PAGE_TITLE = " about";
	    break;
		case "/exo-php/contact.php":
		$CURRENT_PAGE = "contact";
		$PAGE_TITLE = " salut";
		break;
		case "/exo-php/users.php":
		$CURRENT_PAGE = "users";
		$PAGE_TITLE = " salut";
		break;
		case "/exo-php/boucle.php":
		$CURRENT_PAGE = "boucle";
		$PAGE_TITLE = " salut";
		break;
		default:
		$CURRENT_PAGE = "index";
		$PAGE_TITLE = " salut";
		

}
		
 $colors = array("red", "green", "blue", "yellow", "black", "grey", "pink", "blue" );
 $a = 0;
 $b =0;
 $c =0;
 $x=1;
function mafunction($colorMSg="red"){
	echo "<div class='text-center' style='background-color:black; color:$colorMSg;'>je suis une div fait à partir une fonction php</div><br>";
}

$devs = array("hortense", "clem", "kevin", "romain", "laurine", "thibault", "wikenson", "yohann", "aurelien", "nicolas", "ludo", "matthias" );
$colors2 = array("red", "green", "blue", "yellow", "black", "grey", "pink", "blue", "red" );
$lenghdevs = count($devs);
$lenghcolors2 = count($colors2);
?>