<div style="display:inline-block;height:100px;max-height:100px;">
<?php
global $naWebOS;
global $naLAN;
//if (!$naLAN) die('403 Forbidden.');
//echo '<pre style="color:yellow;background:rgba(0,0,50,0.5);border-radius:10px;margin:10px;">'; var_dump ($naWebOS->view); echo '</pre>';

echo $naWebOS->html_vividButton (
    1, 'float:left;',

    'btnRobots', 'vividButton_icon_100x100 relative', '_100x100', 'relative',
    '',
    'if (!$(this).is(\'.disabled\')) { naLog.showEvents(event,\'robots\'); }',
    '',
    '',

    2, 'Show robot visitors',

    'btnCssVividButton_outerBorder.png',
    'btnCssVividButton.png',
    'btnCssVividButton.green2a.png',
    'btnVisitors_robots.png',

    '',
    '',

    null,
    null,
    null
);
echo $naWebOS->html_vividButton (
    3, 'float:left',

    'btnHumans', 'vividButton_icon_100x100 relative', '_100x100', 'relative',
    '',
    'if (!$(this).is(\'.disabled\')) { naLog.showEvents(event,\'humans\'); }',
    '',
    '',

    4, 'Show human visitors',

    'btnCssVividButton_outerBorder.png',
    'btnCssVividButton.png',
    'btnCssVividButton.green2a.png',
    'btnVisitors_humans.png',

    '',
    '',

    null,
    null,
    null
);
echo $naWebOS->html_vividButton (
    5, 'float:left',

    'btnLAN', 'vividButton_icon_100x100 relative', '_100x100', 'relative',
    '',
    'if (!$(this).is(\'.disabled\')) { naLog.showEvents(event,\'LAN\'); }',
    '',
    '',

    6, 'Show human visitors',

    'btnCssVividButton_outerBorder.png',
    'btnCssVividButton.png',
    'btnCssVividButton.green2a.png',
    'btnVisitors_LAN.png',

    '',
    '',

    null,
    null,
    null
);
?>
</div>
<script type="text/javascript">
    setTimeout(function() {
        na.site.settings.buttons['#btnHumans'].select();
    }, 2000);
</script>
<?php



//echo '<img src="/NicerAppWebOS/siteMedia/btnRobot.png" style="width:100px;height:100px;"/>';
//echo '<img src="/NicerAppWebOS/siteMedia/btnHumans.png" style="width:100px;height:100px;"/>';


foreach ($naWebOS->view as $appID => $appRec) break;
if ($appRec['page']=='index') {
    $db = $naWebOS->dbs->findConnection('couchdb');
    $cdb = $db->cdb;

    $debug = false;
    $dbName = $db->dataSetName('logentries');
    $cdb->setDatabase($dbName);

    // fetch dataRecord
    $findCommand = [
        'selector' => [
            'type' => 'new request',
            'isIndex' => true,
            'isBot' => false,
            'isLAN' => false
        ],
        'fields' => ['_id', 'ip', 's1', 's2', 'i', 'isIndex', 'isBot', 'request'],
        'sort' => [
            [ 's1' => 'asc' ],
            [ 's2' => 'asc' ]
        ],
        'use_index' => '_design/249f3b14593cc6f19467c3697f2398397bd9aab6'
    ];


    //echo '<pre style="padding:8px;border-radius:10px;background:rgba(255,255,255,0.5);color:green;">'; var_dump ($findCommand); echo '</pre>';
    try {
        $call = $cdb->find ($findCommand);
    } catch (Exception $e) {
        echo '<pre>';var_dump ($cdb);echo '</pre>';
        $msg = $fncn.' FAILED while trying to find in \''.$dbName.'\' : '.$e->getMessage();
        echo $msg;
        die();
    }

    foreach ($call->body->docs as $docID => $doc) {
        $docA = json_decode(json_encode($doc), true);

        $now = DateTime::createFromFormat('U.u', $doc->s1);
        $now2 = $now->format("Y-m-d H:i:s.u");

        $class = '';
        if ($doc->isBot) $class.='bot ';

        echo '<h2 class="logEntry '.$class.'" s1="'.$doc->s1.'" i="'.$doc->i.'"  onclick="naLog.onclick_logEntry(event);"><span class="datetimeAccurate">'.$now2.'</span> <span class="ip">'.$doc->ip.'</span><br/>'.$docA['request']['$_SERVER']['REQUEST_URI'].'</h2>';

    }

    echo PHP_EOL;
    echo '<script type="text/javascript">setTimeout(function() { na.desktop.settings.visibleDivs.push(\'#siteToolbarLeft\');na.desktop.resize();},1000);</script>';
}
?>
<script type="text/javascript" src="/NicerAppWebOS/apps/NicerAppWebOS/applications/2D/logs/naLog.source.js"></script>
