<?php
require_once (dirname(__FILE__).'/boot.php');
global $naWebOS;
global $naLAN;


$authorizedFile = '45.83.241.21-2023-10-16_00:56:04_plus0200.html';

if (
    !$naLAN
    && !(
        array_key_exists('file',$_GET)
        && $_GET['file'] == $authorizedFile
    )
) die('403 Forbidden.');

if (array_key_exists('file', $_GET)) {
    $fp = '/var/www/'.$naWebOS->domain.'/NicerAppWebOS/siteLogs/'.$_GET['file'];
    //echo file_get_contents($fp); die();
    if ($naLAN) $c = [
        'siteContent' => file_get_contents($fp)
    ]; elseif ($_GET['file'] == $authorizedFile) $c = [
        'siteContent' => file_get_contents($fp)
    ]; else $c = [
        'siteContent' => '403 Forbidden.'
    ];
    if (
        array_key_exists('interface',$_GET)
        && $_GET['interface']=='no'
    ) echo file_get_contents($fp);
    else echo $naWebOS->getSite($c);

} elseif ($naLAN) {
    //$excl = '/(?!.*thumbs).*/'; // exclude anything that includes 'thumbs' in it's filepath.
    $excl = null;
    $folder = dirname(__FILE__).'/siteLogs/';
    $files = getFilePathList ($folder, true, FILE_FORMATS_html, $excl, array('file'));
    asort($files);
    $html = '';
    foreach ($files as $i => $fp) {
        $fp2 = str_replace('/var/www/'.$naWebOS->domain.'/NicerAppWebOS/siteLogs/', '', $fp);
        $url = '/NicerAppWebOS/logs.php?interface=no&file='.$fp2;
        $html .= '<a href="'.$url.'">'.$fp.'</a><br/>';
    }
    $c = [ 'siteContent' => $html ];
    //echo $naWebOS->getSite($c);
    $html .= '<script type="text/javascript">na.site.transformLinks()</script>';
    echo $html;

} else die('403 Forbidden.');
?>
