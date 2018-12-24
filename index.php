<?php 

function greetings($name,$dayNumber) {
	switch ($dayNumber) {
		case '1':
		case '2':
		case '3':
		case '4':
		case '5':
			echo "Привет, $name! Хорошего и продуктивного рабочего дня!";
			break;

		case '6':
		case '7':
			echo "Привет, $name! Желаю вам хорошо отдохнуть в этот день!";
			break;
		
		default:
			echo "Привет, $name!";
			break;
	}
	
}

greetings("Наталья",7);

 ?>