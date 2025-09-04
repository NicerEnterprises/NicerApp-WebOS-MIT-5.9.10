<?php

class naDiaries {
    public function getDiary ($diaryName='siteOwner') {
        global $naWebOS;
        $rp = realpath(dirname(__FILE__).'/../siteData');
        //var_dump($rp); echo '<br/>';
        $dp = $rp.'/'.$naWebOS->domain.'/diaries/'.$diaryName;
        //var_dump($dp); echo '<br/>'; var_dump (file_exists($dp)); echo '<br/>';
        $files = getFilePathList ($dp, true, '/*.html.php');
        echo '<div class="naDiaryDay">';
        foreach ($files as $fileIdx => $fp) {
            if (strpos($fp,'.archived.')===false) echo require_return ($fp);
        }
        echo '</div>';
    }
}

?>
