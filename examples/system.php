<?php
/*
 * https://www.teleduino.org
 *
 * This code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

include_once(__DIR__.'/_bootstrap.php');

use Teleduino\Teleduino2560Client\Client as Teleduino2560;

if(isset($_SERVER['HTTP_HOST'])) {
    echo "<pre>";
}

$Teleduino2560 = new Teleduino2560();

//$Teleduino2560->setModeEthernetServerWeb($config['ethernet_server_web']);
$Teleduino2560->setModeEthernetClientProxy($config['ethernet_client_proxy']);

/*
echo "reset:\n";
$result = $Teleduino2560->reset();
echo print_r($result, true)."\n";
*/

/*
echo "getVersion:\n";
$result = $Teleduino2560->getVersion();
echo print_r($result, true)."\n";
*/

/*
echo "setStatusLedPin:\n";
$pin = 8; // Digital pin to be used for the status LED
$result = $Teleduino2560->setStatusLedPin($pin);
echo print_r($result, true)."\n";
*/

/*
echo "setStatusLed:\n";
$count = 2; // Flash count to be sent to the status LED
$result = $Teleduino2560->setStatusLed($count);
echo print_r($result, true)."\n";
*/

/*
echo "getFreeMemory:\n";
$result = $Teleduino2560->getFreeMemory();
echo print_r($result, true)."\n";
*/

/*
echo "ping:\n";
$result = $Teleduino2560->ping();
echo print_r($result, true)."\n";
*/

/*
echo "getUptime:\n";
$result = $Teleduino2560->getUptime();
echo print_r($result, true)."\n";
*/

/*
echo "loadPresets:\n";
$result = $Teleduino2560->loadPresets();
echo print_r($result, true)."\n";
*/