<?php
global $naWebOS;
//echo '<pre style="color:yellow;background:rgba(0,0,50,0.5);border-radius:10px;margin:10px;">'; var_dump ($naWebOS->view); echo '</pre>';
foreach ($naWebOS->view as $appID => $appRec) break;
if ($appRec['page']=='index') {
    $db = $naWebOS->dbs->findConnection('couchdb');
    $cdb = $db->cdb;

    $debug = false;
    $dbName = $db->dataSetName('logentries');

    // fetch dataRecord
    $findCommand = [
        'selector' => [
            'type' => 'new request',
            'isIndex' => true
        ],
        'fields' => ['_id', 'ip', 's1', 's2', 'i', 'request'],
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
        $msg = $fncn.' FAILED while trying to find in \''.$dataSetName.'\' : '.$e->getMessage();
        echo $msg;
        die();
    }

    foreach ($call->body->docs as $docID => $doc) {
        $docA = json_decode(json_encode($doc), true);

        $now = DateTime::createFromFormat('U.u', $doc->s1);
        $now2 = $now->format("Y-m-d H:i:s.u");

        echo '<h2 class="logEntry" s1="'.$doc->s1.'" i="'.$doc->i.'"  onclick="naLog.onclick_logEntry(event);"><span class="datetimeAccurate">'.$now2.'</span> <span class="ip">'.$doc->ip.'</span><br/>'.$docA['request']['$_SERVER']['REQUEST_URI'].'</h2>';

    }

    echo PHP_EOL;
    echo '<script type="text/javascript">setTimeout(function() { na.desktop.settings.visibleDivs.push(\'#siteToolbarLeft\');na.desktop.resize();},1000);</script>';
}
?>
<script type="text/javascript">
var naLog = {
    onclick_logEntry : function (evt) {
        var
        url = '/NicerAppWebOS/apps/NicerAppWebOS/applications/2D/logs/ajax_logEntry.php',
        dat = {
            s1 : parseFloat($(evt.currentTarget).attr('s1')),
            i : $(evt.currentTarget).attr('i')
        },
        ac = {
            type : 'GET',
            url : url,
            data : dat,
            success : function (data, ts, xhr) {
                debugger;
                $('#siteContent .vividDialogContent').html(data);
            },
            error : function (xhr, textStatus, errorThrown) {
            }
        };
        debugger;
        $.ajax(ac);
    },
    onclick_logEntry_details : function (evt) {
        var
        url = '/NicerAppWebOS/apps/NicerAppWebOS/applications/2D/logs/ajax_logEntry_details.php',
        dat = {
            id : evt.currentTarget.id
        },
        ac = {
            type : 'GET',
            url : url,
            data : dat,
            success : function (data, ts, xhr) {
                debugger;
                $('#siteContent .vividDialogContent').html(data);
            },
            error : function (xhr, textStatus, errorThrown) {
            }
        };
        debugger;
        $.ajax(ac);
    }
};
</script>
