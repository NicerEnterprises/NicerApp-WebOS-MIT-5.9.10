<?php
require_once(dirname(__FILE__).'/../../boot.php');
global $naWebOS;
$db = $naWebOS->dbs->findConnection('couchdb');
$cdb = $db->cdb;
$dn = $naWebOS->domainForDB;
?>
{
    "<?php echo $naWebOS->ownerName;?>" : {
        "groups" : [
            "<?php echo $dn;?>___Owners",
            "<?php echo $dn;?>___Chief_Officers"
        ]
    }
}
