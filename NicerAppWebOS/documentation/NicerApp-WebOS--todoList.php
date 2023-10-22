<?php
    global $naWebOS;
    require_once ($naWebOS->basePath.'/NicerAppWebOS/domainConfigs/'.$naWebOS->domain.'/pageHeader.php');
?>

<h1 class="contentSectionTitle2"><span class="contentSectionTitle2_span">NicerApp WebOS Development Direction</span></h1><br/><br/>

<p class="todoList">FYI : major release time is Christmas Day each year.</p>

<ol class="todoList">


    <li class="todoList"><div>(DONE) (2023) Build an extension of the Sag library that i'm using for communication between PHP and couchdb that allows you to log database calls and view them with /NicerAppWebOS/logs.php</div></li>

    <li class="todoList"><div>(DONE) (2023) Allow users (and Guests) to specify which theme a new end-user should initially see for a page managed by them on a NicerApp website.</div></li>

    <li class="todoList"><div>(CURRENT) (2023 Oct,Nov,Dec) Fix the final bugs in vividMenu.</div></li>

    <li class="todoList"><div>(CURRENT) (2023 Oct,Nov,Dec) Upgrade the blogging features.
        <ol class="todoList_l1">
            <li class="todoList_l1"><div>(CURRENT) (2023 Oct,Nov,Dec) Fix any final bugs in the Theme Editor (none known at this time).</div></li>

            <li class="todoList_l1"><div>(STALLED) Create a custom HTML WYSIWYG rich-text editor component of my own, that ties into the UWTE.<br/>
            This is stalled because browser makers need to start supporting a window.getSelection() that returns a .anchorOffset and .extentOffset that works on the .innerHTML instead of the .innerText of any given element (usually the .commonAncestorElement).
                <ol class="todoList_l2">
                    <li class="todoList_l2"><div>supply data from a HTML+CSS form into <a href="https://github.com/NicerEnterprises/NicerApp-WebOS/blob/main/NicerAppWebOS/logic.business/class.core.WebsiteOperatingSystem-5.y.z.php#L1353" class="noPushState" target="naGH_wos1088">css_keyframes_to_array() and css_animation_template_to_animation()</a>.</div></li>
                </ol>
            </div></li>
        </ol>

    </div></li>



    <li class="todoList"><div>Add a checkbox in the Theme Editor to select backgrounds and stretch instead of tile them for any DIV.</div></li>

    <li class="todoList"><div>Show a small error window for a short time when a page can't load.</div></li>

    <li class="todoList"><div>Work my WebOS to be more Windows(tm)(r) compatible in terms of it's user-interface.<br/>
    Specifically, i want to move the date-time indicator on my web-pages to the bottom-right of the screen.<br/>
    The only downside of this is that i'll lose pixel space for content/apps. But there's ways around that, like only showing the time indicator when the page is F11-ed, shown fullscreen without browser menus.
    </div>
    </li>

    <li class="todoList"><div>Build a comments engine and user-interface (again).</div></li>

    <li class="todoList"><div>Make the musicPlayer app work on smartphone vertical screens as well.</div></li>


    <li class="todoList"><div>Restore the automatic retrieval of new backgrounds download routines for nicerapp via free to use methods of delivery at Google image search and (TODO :)Bing image search.</div></li>

    <li class="todoList">
    <div><pre class="todoList">
    rewrite the backgrounds analysis and automatic resizing routines;
    - put all of the backgrounds in a DOMAIN_TLD___backgrounds dataSet with relative filepath (starting at siteMedia/backgrounds) and image size.
    - let users search for backgrounds based on filepath, then save those searches in their account settings and make them viewable as photoalbums.
    </pre></div>
    </li>


    <li class="todoList"><div>Write 'vividRangeFinder' (a percentage bar with 2 percentage stops)</div></li>


    <li class="todoList"><div>Upgrade the news app and vividDialog : add siteToolbarLeft functionality :<br/>
        <ol class="todoList_l1">
            <li class="todoList_l1"><div>add/enable/disable/remove any URL to a combination of lists that are each given a name, which get stored in several database-stored dataSubSets (records/documents) inside a dataSet (table/couchdb-database).<br/>
            </li>
            <li class="todoList_l1"><div>the ability to assign specific 'theme' and 'sub-theme' settings to such a URL.</div></li>
            <li class="todoList_l1"><div>the ability to do keyphrase searches (perhaps later with 'or' and 'and' logic support) on the news content gatered, and paint that content with specific 'theme' and/or 'sub-theme' settings.<br/>
            (putting all of this in siteToolbarLeft and the rest in the siteThemeEditor, and that those can already be shown at the same time, means you can edit *all* user-interface settings for *any* app or service on any HD screen or pad screen.</div></li>
            <li class="todoList_l1"><div>let vividDialog have a vividMenu, with vividButton icons that will lead to vividMenus and vividDialogs and vividDialogPopups, at the top-right of it's borders.<br/>
            the contents of this menu should be defined in a &lt;UL&gt; structure (that can, if needed, get loaded with fresh content via AJAX), much like the vividMenu already is today.</div></li>
        </ol>
    </div>
    </li>


    <li class="todoList"><div>Figure out a way to store the width and height of each background found in the filesystem in the output of .../NicerAppWebOS/domainConfigs/DOMAIN.TLD/ajax_backgrounds_recursive.php and .../NicerAppWebOS/domainConfigs/DOMAIN.TLD/ajax_backgrounds.php.<br/>
    (NOT DONE) Then use this information in the backgrounds menu to select only elligible backgrounds, and popup an error message 'No backgrounds found, reverting to search key = {$someSearchKey}' when no backgrounds are found for the current search / menu-option.</div></li>

    <li class="todoList"><div>Integration of payment platforms (as plugins) for paypal.com, creditcards, and the Dutch banking system iDeal.</div></li>

    <li class="todoList"><div>Music production app via linux commandline app sonic-pi, integration of that app with payment modules and musicPlayer.</div></li>

    <li class="todoList"><div>Add MySQL and PostgreSQL to the list of supported database architectures (via .../NicerAppWebOS/3rd-party/adodb5), currently only couchdb is supported.<br/>
    </div></li>


</ol>
<script type="text/javascript">
                        na.site.bindTodoListAnimations (
                            '.todoList > li, '
                            +'.todoList > li > div, '
                            +'.todoList > li > pre, '
                            +'.todoList_l1 > li, '
                            +'.todoList_l1 > li > div, '
                            +'.todoList_l1 > li > pre, '
                            +'.todoList_l2 > li, '
                            +'.todoList_l2 > li > div, '
                            +'.todoList_l2 > li > pre '
                        );

</script>
