<?php
    global $naWebOS;
    require_once ($naWebOS->basePath.'/NicerAppWebOS/domainConfigs/'.$naWebOS->domain.'/pageHeader.php');
    require_once ($naWebOS->basePath.'/NicerAppWebOS/logic.business/class.NicerAppWebOS.diaries.php');
    $diaries = new naDiaries();
?>
<script type="text/javascript" src="/NicerAppWebOS/3rd-party/jQuery/jquery-3.7.0.min.js?c=20250817_120652"></script>
<script type="text/javascript" src="/NicerAppWebOS/3rd-party/jQuery/cookie/jquery.cookie.js?c=20250817_120652"></script>
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function(){
            $('.naDiaryDayHeader').on('click', function () {
                if ($(this).is('shown'))
                    $(this).removeClass('shown');
                    $(this).hide();
                else
                    $(this).addClass('shown');
                    $(this).show();

            });
            $('.naDiaryDaySegmentHeader, .naDiaryDayHeader').css({cursor:'hand'}).removeClass('todoList');
        },1000);
    });
</script>
<div style="background:rgba(0,0,50,0.007)">
    <style>
        p {
            display : block;
        }
    </style>
    <link type="text/css" rel="StyleSheet" href="/NicerAppWebOS/documentation/NicerEnterprises--company--base.css?c=NOW">
    <link type="text/css" rel="StyleSheet" href="/NicerAppWebOS/documentation/NicerEnterprises--company--moods-screen.css?c=NOW">

    <h1 class="contentSectionTitle2"><span class="contentSectionTitle2_span">Nicer Enterprises - company overview</span> (<a href="https://nicer.app/NicerAppWebOS/documentation/NicerEnterprises--company-print.php" class="nomod noPushState" target="naCompanyDiary">print</a>)</h1>

    <div class="naDiaryWebPage">
        <div>
            <p>
            <a href="https://nicer.app" target="naHP">https://nicer.app</a>, <a href="https://said.by" target="sbHP">https://said.by</a>, <a href="https://zoned.at" target="zAt">https://zoned.at</a>, <a href="https://github.com/NicerEnterprises" target="githubNicerEnterprises">https://github.com/NicerEnterprises</a>, in addition to ALL of the content listed on and/or hosted by the cloudhosting service companies, online forums and social media accounts that I use (or have ever used), are ENTIRELY
            Copyrighted (C) and Owned by <a href="mailto:rene.veerman.netherlands@gmail.com" target="_new" class="nomod noPushState">Rene Veerman &lt;rene.veerman.netherlands@gmail.com&gt;</a>.<br/>
            </p>
        </div>

        <p>
        Should I unexpectedly die for some strange reason, for instance by long standing disputes suddenly becoming lethal in some way, I want my belongings donated first to my parents, and second to the Amsterdam.NL stedelijk museum, who may do with it all as they please, but who are requested to keep copies of https://nicer.app plus https://said.by up and running at all times.<br/>
        My accountant's details are well engraved in medical law at https://mentrum.nl<br/>
        </p>
    </div>

    <?php echo $diaries->getDiary('siteOwner');?>
</div>
