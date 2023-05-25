<script type="text/javascript" src="/NicerAppWebOS/apps/NicerAppWebOS/applications/2D/3rd-party-site.wikipedia.org/index.js"></script>
<div id="navbar">
<?php
    global $naWebOS;
    echo $naWebOS->html_vividButton (
        0, 'align-items:center;justify-content:center;margin-right:10px;margin-left:10px;',

        'btnClearCookies',
        'vividButton_icon_50x50 grouped btnAdd forum', '_50x50', 'grouped',
        '',
        'na.wiki.followLink(\''.$_GET['app-wikipedia_org'].'\')',
        '',
        '',

        201, 'View at wikipedia.org.',


        'btnCssVividButton_outerBorder.png',
        'btnCssVividButton.blue1a.png',
        null,//'btnCssVividButton_iconBackground.png',
        'Wikipedia-logo-v2.png',

        '',

        'View at wikipedia.org.',
        'grouped btnAdd themes',
        ''
    );
?>
</div>
<iframe src="/NicerAppWebOS/apps/NicerAppWebOS/applications/2D/3rd-party-site.wikipedia.org/app.content_fullService.php?app-wikipedia.org=<?php echo $_GET['app-wikipedia_org'];?>" style="width:calc(100% - 5px);height:calc(100% - 65px);border:none;"></iframe>
