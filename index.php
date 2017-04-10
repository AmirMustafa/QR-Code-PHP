<?php 																//way to receive current date and time
date_default_timezone_set('Asia/Kolkata');							//Timezone for receiving date and time
$date = date('d-m-Y');									 			// Current Date
echo "<br>";echo "<br>";echo "<br>";
$time = date('H:i');												// Current Time 

$date_time = date('d-m-Y H:i');										//current Date and Time

?>


<?php
																	// Added to get City through IP

  
    include("geo_ip_files/geoipcity.inc");
    include("geo_ip_files/geoipregionvars.php");

    $giCity = geoip_open("geo_ip_files/GeoLiteCity.dat", GEOIP_STANDARD);

    //$ip =$_SERVER['REMOTE_ADDR'];										//use this in server to get IP
    $ip = file_get_contents('https://api.ipify.org');					//use this in locahost to get IP 
    
    //$ip = "106.222.109.18";
    
    
    $record = geoip_record_by_addr($giCity, $ip);


    
    
    //echo $ip; die;
   // echo "Getting Country and City detail by IP Address <br /><br />";
    "IP: " . $ip . "<br /><br />";



$city = $record->city;

//include('footer.php');
?>

<?php
/**
 * @title            QR Code Example
 *
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2012-2017, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License <http://www.gnu.org/licenses/gpl.html>
 */

require 'QRCode.class.php'; // Include the QRCode class

try
{

    /**
     * If you have PHP 5.4 or higher, you can instantiate the object like this:
     * (new QRCode)->fullName('...')->... // Create vCard Object
     */
    $oQRC = new QRCode; // Create vCard Object
    $a = 'Name you want to pass';
    $oQRC->fullName($a)                                                  // Add Full Name  ..
       // ->nickName('Aamir')                                            // Add Nickname
        //->gender('M')                                                  // Add Gender
        ->email($city)                                                   // Add Email Address
       // ->impp('phs_7@aol.com')                                        // Add Instant Messenger
        //->url('http://www.amir.com')                                   // Add URL Website
        ->note($date_time)                                               // Add Note
        //->categories('developer,designer,climber,swimmer')             // Add Categories
        ->photo('http://cp4.chasingpapers.com/images/photo_1491567494.jpg') // Add Avatar
       // ->lang('en-US')                                                // Add Language
        ->finish();                                                      // End vCard

        // echo '<p><img src="' . $oQRC->get(300) . '" alt="QR Code" /></p>'; // Generate and display the QR Code
        $oQRC->display(); // Display

}
catch (Exception $oExcept)
{
    echo '<p><b>Exception launched!</b><br /><br />' .
    'Message: ' . $oExcept->getMessage() . '<br />' .
    'File: ' . $oExcept->getFile() . '<br />' .
    'Line: ' . $oExcept->getLine() . '<br />' .
    'Trace: <p/><pre>' . $oExcept->getTraceAsString() . '</pre>';
}
