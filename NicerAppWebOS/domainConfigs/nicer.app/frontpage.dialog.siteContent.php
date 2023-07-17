<?php
    global $naWebOS;
    require_once ($naWebOS->basePath.'/NicerAppWebOS/domainConfigs/'.$naWebOS->domain.'/pageHeader.php');
?>
    <script type="text/javascript">
        delete na.site.settings.current.app;
    </script>

    <p>
    Take a video or (tiled) background of any resolution, and project information onto that using any weblanguage you want.<br/>
    Written in a style simple enough for children to learn from.<br/>
    Opensourced <a href="https://github.com/NicerEnterprises/NicerApp-WebOS" class="naExternalLink nomod noPushState" target="ghMain">here</a>, development branch <a href="https://github.com/NicerEnterprises/NicerApp-WebOS-dev" class="naExternalLink nomod noPushState" target="ghDev">here</a>
    </p>

    <h1 class="contentSectionTitle1"><span class="contentSectionTitle1_span">Available Apps</span></h1>

    <a href="<?php echo $naURLs['music'];?>" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Music</span></h3></a>
    
    <h3 id="h3_news" class="contentSectionTitle3 contentSectionTitle3_darker"><span class="contentSectionTitle3_span_darker">News</span></h3>
    <ul class="index" style="margin-block-end:33px;">
        <li><div class="contentSectionTitle3"><a href="<?php echo $naURLs['newsHeadlines_englishNews'];?>" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span">English News</span></a></div></li>
        <li><div class="contentSectionTitle3"><a href="<?php echo $naURLs['newsHeadlines_englishNews_worldHeadlines'];?>" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span">English News : World Headlines only</span></a></div></li>
        <li><div class="contentSectionTitle3"><a href="/news-business" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span">English Business News</span></a></div></li>
        <li><div class="contentSectionTitle3"><a href="<?php echo $naURLs['newsHeadlines_nederlandsNieuws'];?>" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span">Nederlands Nieuws</span></a></div></li>
        <li><div class="contentSectionTitle3"><a href="<?php echo $naURLs['newsHeadlines_nederlandsNieuws_wereldNieuws'];?>" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span">Nederlands Nieuws : internationale headlines</span></a></div></li>
        <li><div class="contentSectionTitle3"><a href="<?php echo $naURLs['newsHeadlines_deutscheNachrichten'];?>" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span">Deutsche Nachrichten</span></a></div></li>
        <li><div class="contentSectionTitle3"><a href="<?php echo $naURLs['newsHeadlines_arabic'];?>" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span">Arabic Business News (in English)</span></a></div></li>
    </ul>
    
    <a href="/wiki/frontpage" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Wikipedia.org view</span></h3></a>

    <a href="<?php echo $naURLs['tarot'];?>" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Tarot cardgame</span></h3></a>

    <a href="https://said.by" class="contentSectionTitle3_a" target="saidBy"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Blogging features (on https://said.by)</span></h3></a>
    
    <a href="https://zoned.at" target="zonedAt" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">URL redirection (on https://zoned.at)</span></h3></a>

    <h2 class="contentSectionTitle1" ><span class="contentSectionTitle1_span">Demos</span></h2>
    <a href="<?php echo $naURLs['3Dcube'];?>" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">3D demo : cube</span></h3></a>
    <a href="<?php echo $naURLs['3Dmodels'];?>" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">3D demo : loading of models (slow to start up)</span></h3></a>
    <a href="<?php echo $naURLs['backgroundsBrowser'];?>" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">3D file explorer</span></h3></a>
  
    
    
<?php 
    global $naLAN; 
    if ($naLAN) { 
?>
    <h2 class="contentSectionTitle1"><span class="contentSectionTitle1_span">Administrative features</span></h2>

    <a href="<?php echo $naURLs['analytics'];?>" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Analytics</span></h3></a>

    <a href="<?php echo $naURLs['tasks'];?>" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Tasks</span></h3></a>
<?php } ?>



