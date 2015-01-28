<?php
/*
  serial.php - Teleduino2560 PHP serial example
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
echo "defineSerial:\n";
$port = 0; // Serial port
$baud = 9600; // Baud rate (300, 1200, 2400, 4800, 9600, 14400, 19200, 28800, 38400, 57600, 115200)
$result = $Teleduino2560->defineSerial($port, $baud);
echo print_r($result, true)."\n";
*/

/*
echo "setSerial:\n";
$port = 0; // Serial port
$bytes = "Teleduino rocks!\n"; // String of bytes to be written
$result = $Teleduino2560->setSerial($port, $bytes);
echo print_r($result, true)."\n";
*/

/*
echo "getSerial:\n";
$port = 0; // Serial port
$byte_count = 64; // Length of byte string to read and return
$result = $Teleduino2560->getSerial($port, $byte_count);
echo print_r($result, true)."\n";
*/

/*
echo "flushSerial:\n";
$port = 0; // Serial port
$result = $Teleduino2560->flushSerial($port);
echo print_r($result, true)."\n";
*/

?>