<?php
/*
  servo.php - Teleduino2560 PHP servo example
  Version 0.1.2
  Nathan Kennedy 2009 - 2014
  http://www.teleduino.org

  This code is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'_config.php');
include_once(dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'teleduino2560.php');

if(isset($_SERVER['HTTP_HOST']))
{
	echo "<pre>";
}

$Teleduino2560 = new Teleduino2560();

//$Teleduino2560->setModeEthernetServerWeb($config['ethernet_server_web']);
$Teleduino2560->setModeEthernetClientProxy($config['ethernet_client_proxy']);

/*
echo "defineServo:\n";
$servo = 0; // Servo (0 - 47)
$pin = 1; // Servo pin (0 - 69)
$result = $Teleduino2560->defineServo($servo, $pin);
echo print_r($result, true)."\n";
*/

/*
echo "setServo:\n";
$servo = 0; // Servo (0 - 47)
$position = 90; // Servo position (0 - 180)
$result = $Teleduino2560->setServo($servo, $position);
echo print_r($result, true)."\n";
*/

/*
echo "getServo:\n";
$servo = 0; // Servo (0 - 47)
$result = $Teleduino2560->getServo($servo);
echo print_r($result, true)."\n";
*/

?>