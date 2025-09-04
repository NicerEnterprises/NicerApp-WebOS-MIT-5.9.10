<?php
    global $naWebOS;
    require_once ($naWebOS->basePath.'/NicerAppWebOS/domainConfigs/'.$naWebOS->domain.'/pageHeader.php');
    require_once ($naWebOS->basePath.'/NicerAppWebOS/logic.business/class.NicerAppWebOS.diaries.php');
    $diaries = new naDiaries();
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.naDiaryDayHeader').on('click', evt, function () {
           if ($(evt.currentTarget).is('shown')) $(evt.currentTarget).hide(); else $(evt.currentTarget).show();
        });
    });
</script>
<div style="background:rgba(0,0,50,0.007)">
    <style>
        p {
            display : block;
        }
    </style>
    <style>
        .naDiaryWebPage {
            background : rgba(0,0,255,0.555);
            margin : 10px;
            padding : 10px;
            border-radius : 10px;
            text-shadow : 0px 0px 3px rgba(0,255,0,0.8), 3px 3px 2px rgba(0,0,0,0.7);
            box-shadow:0px 0px 8px 4px rgba(0,0,0,0.631), 3px 3px 5px 3px rgba(0,0,0,0.7);
        }

        .naDiaryDayHeader {
            margin : 10px;
            padding : 10px;
            border-radius : 10px;
            background : rgba(0,255,0,0.7);
            color : yellow;
            text-shadow : 3px 3px 2px rgba(0,0,0,0.7);
        }
        .naDiaryDay {
            padding : 10px;
        }
        .naDiaryDaySegmentHeader {
            margin : 10px;
            padding : 10px;
            border-radius : 10px;
            background : rgba(0,0,255,0.7);
            color : rgba(0,255,0,0.7);
            text-shadow : 3px 3px 2px rgba(0,0,0,0.7);
        }
        .naDiaryDaySegment {
            margin : 10px;
            padding : 10px;
            border-radius : 10px;
            background : rgba(255,255,255,0.25);
            color : black;
        }
        .naDiaryDaySegment li {
            padding : 7px;
            margin : 3px;
            margin-top : 8px;
            margin-bottom : 8px;
            border-radius : 10px;
            background : rgba(255,255,255,0.25);
        }
        .naDiaryDaySegment p, .naDiaryDaySegment p:hover {
            background : none;
        }

        .naDiarySegmentHeader {

        }
        .naDiarySegment {

        }

        .naDiaryEntryHeader {
            background : rgba(220,220,220,0.33);
            color : yellow;
            margin : 10px;
            padding : 10px;
            border-radius : 10px;
            text-shadow : 0px 0px 3px rgba(0,255,0,0.8), 3px 3px 2px rgba(0,0,0,0.7);
            box-shadow:0px 0px 8px 4px rgba(0,0,0,0.631), 3px 3px 5px 3px rgba(0,0,0,0.7);
        }
        .naDiaryEntry {
            font-family : El Missiri;
            line-height:1.5em;
            margin : 50px;
            padding : 16px;
            border-radius:5px;
            text-shadow : 0px 0px 3px rgba(0,255,0,0.8), 3px 3px 2px rgba(0,0,0,0.7);
            box-shadow:0px 0px 8px 4px rgba(0,0,0,0.631), 4px 4px 15px 5px rgba(0,0,0,0.7);
        }
    </style>
    <h1 class="contentSectionTitle2"><span class="contentSectionTitle2_span">Nicer Enterprises - company overview</span></h1><br/><br/><br/>


    <div class="naDiaryWebPage">
        <div>
            <p>
            <a href="https://nicer.app" target="naHP">https://nicer.app</a>, <a href="https://said.by" target="sbHP">https://said.by</a>, <a href="https://zoned.at" target="zAt">https://zoned.at</a>, <a href="https://github.com/NicerEnterprises" target="githubNicerEnterprises">https://github.com/NicerEnterprises</a>, in addition to ALL of the content listed on and/or hosted by the cloudhosting service companies, online forums and social media accounts that I use (or have ever used), are ENTIRELY
            Copyrighted (C) and Owned by <a href="mailto:rene.veerman.netherlands@gmail.com" target="_new" class="nomod noPushState">Rene A.J.M. Veerman &lt;rene.veerman.netherlands@gmail.com&gt;</a>.<br/>
            </p>
            <p><a href="https://drive.google.com/drive/u/1/folders/1p_ouHCyVMW1IadAX-vBKasQVP01M91GD" class="nomod noPushState" target="naWeOS--fb-dot-com">I'm also 'DJ FireSnake'.</a>.</p>
            <p><a href="https://facebook.com/rene.veerman.90" class="nomod noPushState" target="naWeOS--fb-dot-com">https://facebook.com/rene.veerman.90</a>.</p>
            <p><a href="https://www.facebook.com/gavanHoverswell" class="nomod noPushState" target="naWeOS--fb-dot-com">https://facebook.com/gavanHoverswell</a>.</p>
            <p><a href="https://x.com/ReneVeerman1977" class="nomod noPushState" target="naWebOS--x-dot-com">https://x.com/ReneVeerman1977</a>.</p>
            <p><a href="https://youtube.com/@Rene-AJM-Veerman" class="nomod noPushState" target="naWebOS--youtube-dot-com">https://youtube.com/@Rene-AJM-Veerman</a>.</p>
        </div>

        <p>
        Should I unexpectedly die for some strange reason, for instance by long standing disputes suddenly becoming lethal in some way, I want my belongings donated first to my parents, and second to the Amsterdam.NL stedelijk museum, who may do with it all as they please, but who are requested to keep copies of https://nicer.app plus https://said.by up and running at all times.<br/>
        My accountant's details are well engraved in medical law at https://mentrum.nl<br/>
        </p>
    </div>

    <?php
        echo $diaries->getDiary('siteOwner');
    ?>


    <div class="naDiaryDay">


    </div>
</div>
