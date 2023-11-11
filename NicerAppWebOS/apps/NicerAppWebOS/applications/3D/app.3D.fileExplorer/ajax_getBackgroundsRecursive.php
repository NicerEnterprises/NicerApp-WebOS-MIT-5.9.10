<?php
    $naRoot = realpath(dirname(__FILE__).'/../../../../../..');
    require_once($naRoot.'/NicerAppWebOS/boot.php');

    $mi = [];

    $root = $naRoot.'/NicerAppWebOS/siteMedia/backgrounds';
    //var_dump (file_exists($root)); die();
    $fileFormats = '/.*/';
    $excl = '/.*thumbs.*/';
    $f = getFilePathList ($root, true, $fileFormats, $excl, array('dir'), null, 1, true);
    $mi[] = [
        'root' => str_replace($rootPath_na, '', $root),
        'thumbnails' => './thumbs',
        'files' => $f
    ];
    $smi = json_encode($mi);
    echo $smi;
    //echo '<pre style="color:lime;background:green;border-radius:8px;">'; var_dump ($mi); echo '</pre>';
?>
