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