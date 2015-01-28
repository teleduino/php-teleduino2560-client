<?php
/*
  eeprom.php - Teleduino2560 PHP EEPROM example
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
echo "resetEeprom:\n";
$quarter = 0; // (0 - 3)
$result = $Teleduino2560->resetEeprom($quarter);
echo print_r($result, true)."\n";
*/

/*
echo "setEeprom:\n";
$offset = 500; // Starting position of EEPROM to write to
$bytes = 'Teleduino rocks!'; // String of bytes to be written
$result = $Teleduino2560->setEeprom($offset, $bytes);
echo print_r($result, true)."\n";
*/

/*
echo "getEeprom:\n";
$offset = 500; // Starting position of EEPROM to read from
$byte_count = 16; // Length of byte string to read and return
$result = $Teleduino2560->getEeprom($offset, $byte_count);
echo print_r($result, true)."\n";
*/

?>