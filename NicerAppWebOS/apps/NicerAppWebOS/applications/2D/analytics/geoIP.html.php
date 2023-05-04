<?php 
//namespace Foo;
//require_once realpath(dirname(__FILE__).'/../../../../').'/NicerAppWebOS/3rd-party/geoLite2/vendor/autoload.php';
//use GeoIp2\Database\Reader;
session_start();

if (!array_key_exists('geoIP',$_SESSION)) $_SESSION['geoIP'] = array();
if (!array_key_exists($_GET['IP'],$_SESSION['geoIP'])) {
    //$reader = new Reader(realpath(dirname(__FILE__).'/../../../../').'/NicerAppWebOS/3rd-party/geoLite2/GeoLite2-City.mmdb');
    //$record = $reader->city($_GET['IP']);
    $apiKey = trim(file_get_contents(dirname(__FILE__).'/api.geolocation.io.APIKEY.txt'));
    $xec = 'curl https://api.ipgeolocation.io/ipgeo?apiKey='.$apiKey.'&ip='.$_GET['IP'];
    exec ($xec, $output, $result);
//var_dump ($xec); var_dump ($output); die();
    $_SESSION['geoIP'][$_GET['IP']] = json_decode($output[0], true);
};

$record = $_SESSION['geoIP'][$_GET['IP']];
//echo '<pre>'; var_dump ($record); die();
$html = 
    '<table>'
        .'<tr><th>Continent</th><td>'.$record['continent_name'].'</td></tr>'
        .'<tr><th>Country</th><td>'.$record['country_name'].'</td></tr>'
        .'<tr><th>Province</th><td>'.$record['state_prov'].'</td></tr>'
        .'<tr><th>City</th><td>'.$record['city'].'</td></tr>'
        .'<tr><th>ISP</th><td>'.$record['isp'].'</td></tr>'
    .'</table>';

echo $html;
?>
