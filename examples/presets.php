<?php
/*
  presets.php - Teleduino2560 PHP presets example
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
echo "getPresets:\n";
$result = $Teleduino2560->getPresets();
echo print_r($result, true)."\n";
*/

/*
echo "setPresets:\n";
$result = $Teleduino2560->getPresets();
if($result['result'])
{
	$presets = $result['values'];
	$presets['pin_modes'][3] = 0; // Set pin 3 mode to 'input'
	$presets['pin_modes'][4] = 1; // Set pin 4 mode to 'output'
	$presets['pin_outputs'][4] = 1; // Set pin 4 state to 'high'
	$presets['pin_modes'][5] = 2; // Set pin 5 mode to 'PWM'
	$presets['pin_outputs'][5] = 64; // Set pin 5 duty cycle to 64
	$result = $Teleduino2560->setPresets($presets);
	echo print_r($result, true)."\n";
}
else
{
	echo "Failed to fetch presets.\n";
}
*/

?>