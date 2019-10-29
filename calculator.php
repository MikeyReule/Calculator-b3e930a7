<?php

echo "Welke operatie wil je uitvoeren? (+, -, *, /)";
echo PHP_EOL;
$antwoord = readline("");
echo PHP_EOL;

if ($antwoord == "+") {
		$nummer1 = readline("Wat is je eerste getal?: ");
		echo PHP_EOL;
			$nummer2 = readline("Wat is je tweede getal?: ");
			echo PHP_EOL;
				$add = (int)$nummer1 + (int)$nummer2;
				echo "Uw antwoord is: $add";
} elseif ($antwoord == "-") {
		$nummer1 = readline("Wat is je eerste getal?: ");
		echo PHP_EOL;
			$nummer2 = readline("Wat is je tweede getal?: ");
			echo PHP_EOL;
				$sub = (int)$nummer1 - (int)$nummer2;
				echo "Uw antwoord is: $sub";
} elseif ($antwoord =="*") {
		$nummer1 = readline("Wat is je eerste getal?: ");
		echo PHP_EOL;
			$nummer2 = readline("Wat is je tweede getal?: ");
			echo PHP_EOL;
				$mult = (int)$nummer1 * (int)$nummer2;
				echo "Uw antwoord is: $mult";
} elseif ($antwoord =="/") {
		$nummer1 = readline("Wat is je eerste getal?: ");
		echo PHP_EOL;
			$nummer2 = readline("Wat is je tweede getal?: ");
			echo PHP_EOL;
				$divi = (int)$nummer1 / (int)$nummer2;
				echo "Uw antwoord is: $divi";
} else {
	echo "U moet een correct symbool invoeren.";
}

?>