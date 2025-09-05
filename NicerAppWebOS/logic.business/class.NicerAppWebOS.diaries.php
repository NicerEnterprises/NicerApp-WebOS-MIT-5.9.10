<?php

class naDiaries {
    public function getDiary ($diaryName='siteOwner') {
        global $naWebOS;
        $rp = realpath(dirname(__FILE__).'/../siteData');
        //var_dump($rp); echo '<br/>';
        $dp = $rp.'/'.$naWebOS->domain.'/diaries/'.$diaryName;
        //var_dump($dp); echo '<br/>'; var_dump (file_exists($dp)); echo '<br/>';
        $files = getFilePathList ($dp, true, '/*.html.php');
        echo '<div class="naDiaryWebPage">';
        foreach ($files as $fileIdx => $fp) {

            if (basename($fp)!=='_dayTitle.html.php') {
                if (strpos($fp,'.archived.')===false) {
                    echo '<div class="naDiaryDayShifted">';
                    echo '<div class="naDiaryDay">';
                    echo require_return ($fp);
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="naDiaryDay">';
                echo require_return ($fp);
                echo '</div>';
            }

        }
        echo '</div>';
    }
}

?>
