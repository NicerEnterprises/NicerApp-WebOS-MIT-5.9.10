<?php
    global $naWebOS;
    require_once ($naWebOS->basePath.'/NicerAppWebOS/domainConfigs/'.$naWebOS->domain.'/pageHeader.php');
?>
    <script type="text/javascript">
        delete na.site.settings.current.app;
        na.d.s.visibleDivs = arrayRemove (na.d.s.visibleDivs, '#siteToolbarLeft');
        na.d.s.visibleDivs = arrayRemove (na.d.s.visibleDivs, '#siteToolbarRight');
        na.d.s.visibleDivs = arrayRemove (na.d.s.visibleDivs, '#siteToolbarTop');
        na.desktop.resize();
    </script>

    <p>
    Take a video or (tiled) background of any resolution, and project information onto that using any weblanguage you want.<br/>
    Written in a style simple enough for children to learn from.<br/>
    Opensourced under an enterprise-commercial perpetually free-usage MIT-license every December 1st <a href="https://github.com/NicerEnterprises/NicerApp-WebOS-MIT" class="naExternalLink nomod noPushState" target="ghMain">here</a> and <a href="https://github.com/NicerEnterprises/NicerApp-WebOS-MIT-5.10.0" class="naExternalLink nomod noPushState" target="ghMainMotherload">here</a>.<br/>
    This is v5.9 of this software, <a class="nomod noPushState" href="https://owl.nicer.app" target="newNA">version 5.10 can be found here</a>.
    </p>

    <p>
    Business plan (taking up to Dec 1st 2035):
    <ol>
      <li><p>Fix the <a target="naBugs-desktop-js" class="nomod noPushState" href="https://github.com/NicerEnterprises/NicerApp-WebOS-MIT-5.10.0/blob/96f1b56ca30f75152e95b5cc3e069452e8c65a41/logic.vividUserInterface/v6.y.z/2D/desktop.js#L154">bugs</a> (F12!) in <a href="https://owl.nicer.app" target="owl-root" class="nomod noPushState">version 5.10.0-beta2</a>.</p></li>
      <li><p>Move /news to https://said.by</p></li>
      <li><p>In addition to <a href="https://owl.nicer.app/me" target="owl-me" class="nomod noPushState">blogging</a> and news, make social media and forum features available on https://said.by</p></li>
      <li><p>Make webshops possible on https://said.by</p></li>
    </ol>
    </p>


    <h2 class="contentSectionTitle1"><span class="contentSectionTitle1_span">Available Apps</span></h2>

    <a href="<?php echo $naURLs['music'];?>" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Music</span></h3></a>
    
    <h3 id="h3_news" class="contentSectionTitle3 contentSectionTitle3_darker"><span class="contentSectionTitle3_span_darker">News</span></h3>
    <ul class="index" style="margin-block-end:33px;">
        <li><div class="contentSectionTitle3"><a href="<?php echo $naURLs['newsHeadlines_englishNews'];?>" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span backdropped">English News</span></a></div></li>
        <li><div class="contentSectionTitle3"><a href="<?php echo $naURLs['newsHeadlines_englishNews_worldHeadlines'];?>" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span backdropped">English News : World Headlines only</span></a></div></li>
        <li><div class="contentSectionTitle3"><a href="/business-news" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span backdropped">English Business News</span></a></div></li>
        <li><div class="contentSectionTitle3"><a href="<?php echo $naURLs['newsHeadlines_nederlandsNieuws'];?>" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span backdropped">Nederlands Nieuws</span></a></div></li>
        <li><div class="contentSectionTitle3"><a href="<?php echo $naURLs['newsHeadlines_nederlandsNieuws_wereldNieuws'];?>" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span backdropped">Nederlands Nieuws : internationale headlines</span></a></div></li>
        <li><div class="contentSectionTitle3"><a href="<?php echo $naURLs['newsHeadlines_deutscheNachrichten'];?>" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span backdropped">Deutsche Nachrichten</span></a></div></li>
        <li><div class="contentSectionTitle3"><a href="<?php echo $naURLs['newsHeadlines_arabic'];?>" class="contentSectionTitle3_a"><span class="contentSectionTitle3_span backdropped">Arabic Business News (in English)</span></a></div></li>
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

    <a href="/view/logs" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Logs</span></h3></a>

    <!--
    <a href="<?php echo $naURLs['tasks'];?>" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Tasks</span></h3></a>
    -->
<?php } ?>




