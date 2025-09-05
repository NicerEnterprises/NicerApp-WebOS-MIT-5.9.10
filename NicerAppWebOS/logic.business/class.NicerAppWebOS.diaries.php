<?php

class naDiaries {
    public function getDiary ($diaryName='siteOwner') {
        global $naWebOS;
        $first1 = true;
        $rp = realpath(dirname(__FILE__).'/../siteData');
        //var_dump($rp); echo '<br/>';
        $dp = $rp.'/'.$naWebOS->domain.'/diaries/'.$diaryName;
        //var_dump($dp); echo '<br/>'; var_dump (file_exists($dp)); echo '<br/>';
        $files = getFilePathList ($dp, true, '/*.html.php');
        asort ($files);
        echo '<div class="naDiaryWebPage">';
        foreach ($files as $fileIdx => $fp) {

            if (basename($fp)==='-dayTitle.html.php') {
                    if (!$first1) { echo '</div>'; } else { $first = false; }
                    echo '<div class="naDiaryDay">';
            }

            if (strpos($fp,'.archived')===false) {
                if (basename($fp)!=='-dayTitle.html.php') {
                    echo '<div class="naFilePath">'; echo $fp; echo '</div>';
                }
                echo require_return ($fp);
            }

        }
        echo '</div>';

    }
}

?>
