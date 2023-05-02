<?php
$rootPathNA = realpath(dirname(__FILE__).'/../..').'/NicerAppWebOS';
require_once ($rootPathNA.'/boot.php');

    global $naWebOS;
    $db = $naWebOS->dbsAdmin->findConnection('couchdb');
    $cdb = $db->cdb;

    $findCommand = [
        'selector' => [
            'ip' => $naIP
        ],
        'fields' => [ '_id', '_rev' ]
    ];
    $cdb->setDatabase ($dataSetName);
    try {
        $call = $cdb->find ($findCommand);
    } catch (Exception $e) {
        cdb_error (503, 'Could not delete themes. $e->getMessage()=='.$e->getMessage());
        exit();
    }
    foreach ($call->body->rows as $idx => $row) {
        $cdb->delete ($row->_id, $row->_rev);
    }
?>
status : Success.
