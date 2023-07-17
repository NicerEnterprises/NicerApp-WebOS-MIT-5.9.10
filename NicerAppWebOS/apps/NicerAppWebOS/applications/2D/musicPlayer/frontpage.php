<?php
    /*
    $views = array(
        'music_index__DJ_Firesnake' => array (
            '/NicerAppWebOS/apps/nicer.app/applications/2D/musicPlayer' => array (
                'set' => 'DJ_FireSnake',
                'SEO_value' => 'music-2015-DJ_FireSnake'
            )
        ),
        'music_index__Deep_House' => array (
            '/NicerAppWebOS/apps/nicer.app/applications/2D/musicPlayer' => array (
                'set' => 'Deep_House',
                'SEO_value' => 'music-2021-Deep_House'
            )
        ),
        'music_index__Beautiful_Chill_Mixes' => array (
            '/NicerAppWebOS/apps/nicer.app/applications/2D/musicPlayer' => array (
                'set' => 'Beautiful_Chill_Mixes',
                'SEO_value' => 'music-Beautiful_Chill_Mixes'
            )
        ),
        'music_index__Black_Horse__Mongolian_Traditional_Classical_Music_Art' => array (
            '/NicerAppWebOS/apps/nicer.app/applications/2D/musicPlayer' => array (
                'set' => 'Black_Horse__Mongolian_Traditional_Classical_Music_Art',
                'SEO_value' => 'music-Black_Horse-Mongolian-Traditional-Classical-Music-Art'
            )
        )
    );
    $json = array();
    $urls = array();
    foreach ($views as $viewName => $viewSettings) {
        $json[$viewName] = json_encode($viewSettings);
        $urls[$viewName] = '/apps/'.base64_encode_url($json[$viewName]);
    };
    */
    $rootPath_vkdmd = realpath(dirname(__FILE__).'/../../../../../..');
    require_once ($rootPath_vkdmd.'/NicerAppWebOS/boot.php');
    require_once ($rootPath_vkdmd.'/NicerAppWebOS/domainConfigs/'.$naWebOS->domain.'/mainmenu.items.php');
    global $naURLs;
    //var_dump ($naURLs);
?>
    <link href="https://fonts.googleapis.com/css?family=Krona+One&display=swap" rel="stylesheet"> 
    <style>
        p {
            color : white;
            background : rgba(0,0,0,0.4);
            border-radius : 14px;
        }

        #pageTitle {
            display : inline-block;
        }

        .container {
            display : flex;
            justify-items : center;
            align-items : start;
            justify-content : center;
            align-content : start;
            width : 100%;
            height : 100%;
        }

        .bg {
            display : inline-block;
            background : rgba(0,0,0,0.4);
            border-radius : 14px;
            height : fit-content;
            text-align : center;
        }
        
        p a span {
            color : white;
            font-size : 180%;
            font-weight : bold;
        }
        
        p a:hover span {
            color : cyan;
            font-size : 180%;
            font-weight : bold;
        }
        
        p a:visited span {
            color : #CCC;
            font-size : 180%;
            font-weight : bold;
        }
    </style>
    <div class="container">
    <div class="bg">
        <h1 id="pageTitle" class="vt" style="font-size:200%;">nicer.app music collections</h1>
        <p>
        <a class="contentSectionTitle3_a vt" href="<?php echo $naURLs['music_index__Sabaton']?>"><span class="contentSectionTitle3_span vt">Sabaton - 2022 recent hits</span></a>
        <br/><br/>
        <a class="contentSectionTitle3_a vt" href="<?php echo $naURLs['music_index__DJ_Firesnake']?>"><span class="contentSectionTitle3_span vt">DJ FireSnake</span></a>
        <br/><br/>
        <a class="contentSectionTitle3_a vt" href="<?php echo $naURLs['music_index__Deep_House']?>"><span class="contentSectionTitle3_span vt">Deep House</span></a>
        <br/><br/>
        <a class="contentSectionTitle3_a vt" href="<?php echo $naURLs['music_index__Black_Horse__Mongolian_Traditional_Classical_Music_Art']?>"><span class="contentSectionTitle3_span vt">Black Horse - Mongolian Traditional Classical Music Art</span></a>
        <br/><br/>
        <a class="contentSectionTitle3_a vt" href="<?php echo $naURLs['music_index__Beautiful_Chill_Mixes']?>"><span class="contentSectionTitle3_span vt">Beautiful Chill Mixes</span></a>
        </p>
    </div>
    </div>
