$(document).ready(function() {
    $('.vividButton4, .vividButton, .vividButton_icon_50x50_siteTop, .vividButton_icon_50x50').each(function(idx,el){
        if (!na.site.settings.buttons['#'+el.id]) na.site.settings.buttons['#'+el.id] = new naVividButton(el);
    });

    $('.naLogEntry').css({ width : ($(window).width() - 80) / 2 });

    var $el = $('#entry_'+window.location.hash.replace('#',''));
    $el[0].scrollIntoView(true);
    $el.css ({ border : '3px ridge lime', boxShadow : '2px 2px 6px 4px rgba(0,0,0,0.75), 0px 0px 3px 2px rgba(0,50,0,0.7)' });

});
