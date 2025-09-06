<?php

class naDiaries {
    public function getDiary ($diaryName='siteOwner') {
        global $naWebOS;
        $first1 = true;
        $rp = realpath(dirname(__FILE__).'/../siteData');
        //var_dump($rp); echo '<br/>';
        $dp = $rp.'/'.$naWebOS->domain.'/diaries/'.$diaryName;
        //var_dump($dp); echo '<br/>'; var_dump (file_exists($dp)); echo '<br/>';
        $files = getFilePathList ($dp, true, '/.*html\.php/');
        sort ($files);
       // echo '<pre>'; var_dump($files); echo '</pre>'; die();
        echo '<div class="naDiaryWebPage">';
        echo '<span onclick="$(\'.naFilePath,ol,ul,.naDiaryEntry,.naDiaryDay,.naDiaryDaySegment\', $(\'.naDiaryWebPage\')).show(\'slow\');" style="background:rgba(0,0,50,0.7);border:1px solid white;box-shadow:2px 2px 3px 1px rgba(0,0,0,0.55);padding:5px;border-radius:8px;">expand all</span>';
        echo '<span style="margin-left:10px;background:rgba(0,0,50,0.7);border:1px solid white;box-shadow:2px 2px 3px 1px rgba(0,0,0,0.55);padding:5px;border-radius:8px;"><a href="https://nicer.app/NicerAppWebOS/documentation/NicerEnterprises--company-print.php" class="nomod noPushState" target="naCompanyDiary">print</a></span>';
        foreach ($files as $fileIdx => $fp) {

            if (basename($fp)==='-dayTitle.html.php') {
                //echo '<div class="naDiaryDay">';
                if (strpos($fp,'.archived')===false) {
                    echo require_return ($fp);
                }
                //echo '</div>';
            } else {
                if (strpos($fp,'.archived')===false) {
                    if (false && basename($fp)!=='-dayTitle.html.php') {
                        echo '<div class="naFilePath">'; echo $fp; echo '</div>';
                    }
                    if (strpos($fp,'html.php')!==false) echo require_return ($fp);
                }
            }
        }
        echo '</div>';

    }
}

?>
