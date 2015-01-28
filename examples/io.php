<?php
/*
  io.php - Teleduino2560 PHP I/O example
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
echo "definePinMode:\n";
$pin = 2; // Digital pin (0 - 69)
$mode = 1; // Mode (0 - input, 1 - output)
$result = $Teleduino2560->definePinMode($pin, $mode);
echo print_r($result, true)."\n";
*/

/*
echo "setDigitalOutput:\n";
$pin = 2; // Digital pin (0 - 69)
$output = 2; // Output (0 - low, 1 - high, 2 - toggle)
$expire_time = 10000; // Expire time in milliseconds (0 to never expire)
$save = false; // Save digital output as preset
$result = $Teleduino2560->setDigitalOutput($pin, $output, $expire_time, $save);
echo print_r($result, true)."\n";
*/

/*
echo "setPwmOutput:\n";
$pin = 6; // Pwm pin (2 - 13, 44 - 46)
$output = 128; // Output (0 - low, 255 - high)
$result = $Teleduino2560->setPwmOutput($pin, $output);
echo print_r($result, true)."\n";
*/

/*
echo "getDigitalInput:\n";
$pin = 2; // Digital pin (0 - 69)
$result = $Teleduino2560->getDigitalInput($pin);
echo print_r($result, true)."\n";
*/

/*
echo "getAnalogInput:\n";
$pin = 54; // Analog pin (54 - 69)
$result = $Teleduino2560->getAnalogInput($pin);
echo print_r($result, true)."\n";
*/

/*
echo "getAllInputs:\n";
$result = $Teleduino2560->getAllInputs();
echo print_r($result, true)."\n";
*/

/*
echo "setDigitalOutputs:\n";
$offset = 1;
$outputs = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
$expire_times = array(100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750, 800, 850, 900, 950, 1000, 1050, 1100, 1150, 1200, 1250, 1300, 1350, 1400, 1450, 1500, 1550, 1600, 1650);
$result = $Teleduino2560->setDigitalOutputs($offset, $outputs, $expire_times);
echo print_r($result, true)."\n";
*/

?>