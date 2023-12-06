<?php
global $naWebOS;
global $naLAN;
//if (!$naLAN) die('403 Forbidden.');
//echo '<pre style="color:yellow;background:rgba(0,0,50,0.5);border-radius:10px;margin:10px;">'; var_dump ($naWebOS->view); echo '</pre>';
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
            'isIndex' => true,
            'isBot' => false,
            'isLAN' => false
        ],
        'fields' => ['_id', 'isIndex', 'ip', 'i', 's1', 's2', 'request'],
        'sort' => [
            [ 's1' => 'asc' ],
            [ 's2' => 'asc' ]
        ],
        'use_index' => '_design/249f3b14593cc6f19467c3697f2398397bd9aab6',
        'limit' => 10 * 1000
    ];
    //echo '<pre style="padding:8px;border-radius:10px;background:rgba(255,255,255,0.5);color:green;">'; var_dump ($findCommand); echo '</pre>';
    try {
        $call = $cdb->find ($findCommand);
    } catch (Exception $e) {
        echo '<pre>';var_dump ($cdb);echo '</pre>';
        $msg = $fncn.' FAILED while trying to find in \''.$dbName.'\' : '.$e->getMessage();
        //trigger_error ($msg, E_USER_ERROR);
        echo $msg;
        //return false;
        die();
    }



    //echo '<pre style="color:white;background:rgba(0,50,0,0.5);border-radius:10px;margin:10px;">'; var_dump($call); echo '</pre>';
    foreach ($call->body->docs as $docID => $doc) {
        //echo '<pre style="padding:5px;margin:8px;color:white;background:rgba(0,50,0,0.5);">'; var_dump ($doc); echo '</pre>';
        //$call2 = $cdb->get($doc->_id);
        //echo $call2->body->entry->request->html;

        //echo '<pre style="color:white;background:rgba(0,50,0,0.5);border-radius:10px;padding:5px;margin:10px;">'; var_dump($call2->body); echo '</pre>';


        $marginLeft = 10;
        if (!$doc->isIndex) $marginLeft = 50;
        $docA = json_decode(json_encode($doc), true);

        $url = '';
        if (array_key_exists('request', $docA))
            $url = $docA['request']['$_SERVER']['REQUEST_URI'];
        if (array_key_exists('httpOpts', $docA))
            $url = $docA['httpOpts']['ALL cURL fields']['CURLOPT_URL'];


        if (array_key_exists('request', $docA)) {
            $now = DateTime::createFromFormat('U', $doc->s1);
            $now2 = $now->format("Y-m-d H:i:s");

            echo '<div id="'.$doc->_id.'" i="'.$doc->i.'" style="margin:10px;margin-left:'.$marginLeft.'px" onclick="naLog.onclick_logEntry(event);">';
            echo '<h2><span class="datetimeAccurate">'.$now2.'</span> <span class="ip">'.$doc->ip.'</span> '.$url.'</h2>';
            //echo hmJSON ($docA['request'], 'Request response');
            echo '</div>';
        }
/*
        // fetch dataRecord
        $findCommand2 = [
            'selector' => [
                //'type' => 'new request',
                's1' => $doc->s1
            ],
            'fields' => ['_id', 'isIndex', 'ip', 's1', 's2', 'request', 'httpOpts', 'httpResponse'],
            'sort' => [
                [ 's1' => 'asc' ],
                [ 's2' => 'asc' ]
            ],
            'use_index' => '_design/249f3b14593cc6f19467c3697f2398397bd9aab6'
        ];
        //echo '<pre style="padding:8px;border-radius:10px;background:rgba(255,255,255,0.5);color:green;">'; var_dump ($findCommand); echo '</pre>';
        try {
            $call2 = $cdb->find ($findCommand2);
        } catch (Exception $e) {
            $msg = $fncn.' FAILED while trying to find in \''.$dataSetName.'\' : '.$e->getMessage();
            //trigger_error ($msg, E_USER_ERROR);
            echo $msg;
            //return false;
            die();
        }

        foreach ($call2->body->docs as $docID2 => $doc2) {
            $now3 = DateTime::createFromFormat('U.u', $doc2->s2);
            $now4 = $now3->format("Y-m-d H:i:s.u");
            if (!$doc2->isIndex) {
                $marginLeft = 50;
                $docB = json_decode(json_encode($doc2), true);
                echo '<div style="margin-left:'.$marginLeft.'px">';
                echo '<h3><span class="datetimeAccurate">'.$now4.'</span> <span class="ip">'.$doc2->ip.'</span> '.$docB['request']['$_SERVER']['REQUEST_URI'].'</h3>';
                if (array_key_exists('request', $docB)) echo hmJSON ($docB['request'], 'Request response');
                if (array_key_exists('httpOpts', $docB)) echo hmJSON ($docB['httpOpts'], 'HTTP options');
                if (array_key_exists('httpResponse', $docB)) echo hmJSON ($docB['httpResponse'], 'HTTP response');
                //else { echo '<pre>'; var_dump ($docB); echo '</pre>'; };
                echo '</div>';
            }
        }
*/
    }
    //$html = '';
    //$html .= '<script type="text/javascript">setTimeout (function() {na.site.settings.current.running_loadTheme = false; na.site.settings.current.loadingApps = false; na.hms.startProcessing()}, 1500); na.site.transformLinks()</script>';
    //echo $html;



}
//require_once(dirname(__FILE__).'/../../../../../logs.php');
?>
