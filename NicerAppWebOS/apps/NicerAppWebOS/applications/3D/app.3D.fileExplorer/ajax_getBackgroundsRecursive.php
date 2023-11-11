<?php
    $naRoot = realpath(dirname(__FILE__).'/../../../../../..');
    require_once($naRoot.'/NicerAppWebOS/boot.php');
    global $naWebOS;
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
    $debug = false;
    if ($debug) {
        $c = [
            'siteContent' => hmJSON($mi, '$mi')
        ];
        echo $naWebOS->getSite($c);
        echo '<script type="text/javascript">setTimeout (function() {na.site.settings.current.running_loadTheme = false; na.site.settings.current.loadingApps = false; na.hms.startProcessing()}, 1500); na.site.transformLinks()</script>';
    } else {
        $smi = json_encode($mi);
        echo $smi;
    }
?>
