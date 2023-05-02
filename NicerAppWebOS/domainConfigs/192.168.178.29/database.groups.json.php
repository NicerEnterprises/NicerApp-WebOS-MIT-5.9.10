<?php
require_once(dirname(__FILE__).'/../../boot.php');
global $naWebOS;
$db = $naWebOS->dbs->findConnection('couchdb');
$cdb = $db->cdb;
$dn = $naWebOS->domainForDB;
?>
{
    "Owners" : {
    },
    "Chief Officers" : {
    },
    "Moderators" : {
    }
}
