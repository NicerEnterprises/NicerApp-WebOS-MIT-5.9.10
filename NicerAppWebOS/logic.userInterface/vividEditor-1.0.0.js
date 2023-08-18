class naVividEditor {
    constructor(selector) {
        var t = this;
        $(selector).css({ display : 'none' });

        var
        id = $(selector)[0].id,
        html = '<div id="'+id+'_toolbar" class="vividEditor_toolbar">';

        //html+=      '<div class="vividEditor_toolbar_caretPosition"></div>';
        //html+=      '<label>Start: <input id="start-container" type="text"/><input id="start-offset" type="number"/></label><br/>';
        //html+=      '<label>End: <input id="end-container" type="text"/><input id="end-offset" type="number"/></label><br/>';
        //html+=      '<button id="set">Set</button>';
        html+=      '<div id="'+id+'_toolbar__blockType" class="vividEditor_toolbar_dropdown">';
        html+=          '<div id="'+id+'_toolbar__blockType_selected" class="vividEditor_toolbar_dropdown__selected vividDropDownBox_selected vividScrollpane">Paragraph</div>';
        html+=          '<div id="'+id+'_toolbar__blockType_selector" class="vividEditor_toolbar_dropdown__selector vividDropDownBox_selector"><div class="vividScrollpane"><div>Heading 1</div><div>Heading 2</div><div>Heading 3</div><div>Heading 4</div><div>Paragraph</div></div></div>';
        html+=      '</div>';
        html+=      '<div id="'+id+'_toolbar__textAnimation" class="vividEditor_toolbar_dropdown">';
        html+=          '<div id="'+id+'_toolbar__textAnimation_selected" class="vividEditor_toolbar_dropdown__selected vividDropDownBox_selected vividScrollpane">No animations</div>';
        html+=          '<div id="'+id+'_toolbar__textAnimation_selector" class="vividEditor_toolbar_dropdown__selector vividDropDownBox_selector"><div class="vividScrollpane"><div>Heading 1</div><div>Heading 2</div><div>Heading 3</div><div>No animations</div></div></div>';
        html+=      '</div>';
        html+= '</div>';
        html+= '<div id="'+id+'_main" class="vividEditor_main" contenteditable="true">';
        html+= '<h1>Heading 1</h1>';
        html+= '<p>You can begin editing your text here.<br/>Press Shift-Enter to start a new paragraph.</p>';
        html+= '</div>';

        $(selector).after(html);

        var el = $('#'+id+'_main')[0];
        t.el = el;
        t.id = id;
        el.addEventListener('keydown', (event) => {
            if (event.key === 'Enter' && !event.shiftKey) {
                document.execCommand('insertLineBreak')
                event.preventDefault()
            }
            else if (event.key === 'Enter' && event.shiftKey) {
                var el = $('.vividEditor_main')[0];
                var range = document.createRange()
                var sel = window.getSelection()
                document.execCommand('insertLineBreak')
                document.execCommand('insertBrOnReturn', false, false);
                var el2 = el.childNodes[el.childNodes.length-1];
                range.setStart(el2, el2.childNodes.length-1)
                range.collapse(true)

                sel.removeAllRanges()
                sel.addRange(range)
                document.execCommand('insertHTML', false, '<p>&nbsp;</p>');
                range.setStart(el.childNodes[el.childNodes.length-1], 0)
                range.collapse(true)

                sel.removeAllRanges()
                sel.addRange(range)
                event.preventDefault()
            }
        });

        el.addEventListener('keyup', (event) => {
            if (event.isComposing || event.keyCode === 229) {
                return;
            }

            t.setToolbar_blockType(t);
            t.setToolbar_textAnimation(t);

            /* let's NOT auto-save things, but rather let the end-user press the "publish" button.
            clearTimeout (t.timeout_save);
            t.timeout_save = setTimeout (function() {
                var
                tree = $('#jsTree').jstree(true),
                sel = tree.get_node(tree.get_selected()[0]);
                na.cms.saveEditorContent(sel, function(rec) {
                });
            }, 1000);
            */
        });

        el.addEventListener('mouseup', (event) => {
            t.setToolbar_blockType(t);
            t.setToolbar_textAnimation(t);

            /* let's NOT auto-save things, but rather let the end-user press the "publish" button.
            clearTimeout (t.timeout_save);
            t.timeout_save = setTimeout (function() {
                var
                tree = $('#jsTree').jstree(true),
                sel = tree.get_node(tree.get_selected()[0]);
                na.cms.saveEditorContent(sel, function(rec) {
                });
            }, 1000);
            */
        });



        $('#'+id+'_toolbar__blockType').hover(function() {
            clearTimeout(na.site.settings.current.timeout_onmouseout_themes);
            $('#'+id+'_toolbar__blockType > .vividDropDownBox_selector').fadeIn('normal');
        }, function() {
            clearTimeout(na.site.settings.current.timeout_onmouseout_themes);
            na.site.settings.current.timeout_onmouseout_themes = setTimeout (function() {
                $('#'+id+'_toolbar__blockType > .vividDropDownBox_selector').fadeOut('normal');
            }, 500);
        });
        $('#'+id+'_toolbar__blockType > .vividDropDownBox_selector').mouseover(function() {
            clearTimeout(na.site.settings.current.timeout_onmouseout_themes);
        });
        $('#'+id+'_toolbar__blockType > .vividDropDownBox_selector > .vividScrollpane > div').mousedown(function(evt) {
            $('#'+id+'_toolbar__blockType > .vividDropDownBox_selected').html($(this).html());
            $('#'+id+'_toolbar__blockType > .vividDropDownBox_selector > .vividScrollpane > div').removeClass('selected');
            $(this).addClass('selected');
            switch ($(this).html()) {
                case 'Heading 1': t.setMain_blockType(t,'H1'); break;
                case 'Heading 2': t.setMain_blockType(t,'H2'); break;
                case 'Heading 3': t.setMain_blockType(t,'H3'); break;
                case 'Heading 4': t.setMain_blockType(t,'H4'); break;
                case 'Paragraph': t.setMain_blockType(t,'P'); break;
            }
        });


        $('#'+id+'_toolbar__textAnimation').hover(function() {
            clearTimeout(na.site.settings.current.timeout_onmouseout_themes);
            $('#'+id+'_toolbar__textAnimation > .vividDropDownBox_selector').fadeIn('normal');
        }, function() {
            clearTimeout(na.site.settings.current.timeout_onmouseout_themes);
            na.site.settings.current.timeout_onmouseout_themes = setTimeout (function() {
                $('#'+id+'_toolbar__textAnimation > .vividDropDownBox_selector').fadeOut('normal');
            }, 500);
        });
        $('#'+id+'_toolbar__textAnimation > .vividDropDownBox_selector').mouseover(function() {
            clearTimeout(na.site.settings.current.timeout_onmouseout_themes);
        });
        $('#'+id+'_toolbar__textAnimation > .vividDropDownBox_selector > .vividScrollpane > div').mousedown(function(evt) {
            $('#'+id+'_toolbar__textAnimation > .vividDropDownBox_selected').html($(this).html());
            $('#'+id+'_toolbar__textAnimation > .vividDropDownBox_selector > .vividScrollpane > div').removeClass('selected');
            $(this).addClass('selected');
            switch ($(this).html()) {
                case 'Heading 1': t.setMain_textAnimation(t,'H1'); break;
                case 'Heading 2': t.setMain_textAnimation(t,'H2'); break;
                case 'Heading 3': t.setMain_textAnimation(t,'H3'); break;
                case 'No animations': t.setMain_textAnimation(t,false); break;
            }
        });




        return this;
    }


    // utility functions
    setToolbar_blockType (t) {
        var
        pos = t.getCaretPosition(t.el),
        tag = pos.start.container[pos.start.container.length-1].tag;
        switch(tag) {
            case 'H1': $('#'+t.id+'_toolbar__blockType > .vividDropDownBox_selected').html('Heading 1'); break;
            case 'H2': $('#'+t.id+'_toolbar__blockType > .vividDropDownBox_selected').html('Heading 2'); break;
            case 'H3': $('#'+t.id+'_toolbar__blockType > .vividDropDownBox_selected').html('Heading 3'); break;
            case 'H4': $('#'+t.id+'_toolbar__blockType > .vividDropDownBox_selected').html('Heading 4'); break;
            case 'P': $('#'+t.id+'_toolbar__blockType > .vividDropDownBox_selected').html('Paragraph'); break;
            default:
                tag = pos.start.container[pos.start.container.length-2].tag;
                switch(tag) {
                    case 'H1': $('#'+t.id+'_toolbar__blockType > .vividDropDownBox_selected').html('Heading 1'); break;
                    case 'H2': $('#'+t.id+'_toolbar__blockType > .vividDropDownBox_selected').html('Heading 2'); break;
                    case 'H3': $('#'+t.id+'_toolbar__blockType > .vividDropDownBox_selected').html('Heading 3'); break;
                    case 'H4': $('#'+t.id+'_toolbar__blockType > .vividDropDownBox_selected').html('Heading 4'); break;
                    case 'P': $('#'+t.id+'_toolbar__blockType > .vividDropDownBox_selected').html('Paragraph'); break;
                }
                break;
        }
    }

    setMain_blockType (t, tagName) {
        $(t.el).focus()
        var
        pos = t.getCaretPosition(t.el),
        tag = pos.start.container[pos.start.container.length-1].tag,
        el = pos.start.container[pos.start.container.length-1].el,
        newEl = document.createElement(tagName);

        if (pos.start.container.length >= 2) {
            tag = pos.start.container[pos.start.container.length-2].tag;
            el = pos.start.container[pos.start.container.length-2].el;
            newEl.innerHTML = $(pos.start.container[pos.start.container.length-1].el).html();
        } else {
            newEl.innerHTML = $(el).html();
        }

        el.parentNode.replaceChild (newEl, el);
    }

    setToolbar_textAnimation (t) {
        var
        pos = t.getCaretPosition(t.el),
        tag = (
            pos.start.container.length >= 2
            ? pos.start.container[pos.start.container.length-2].tag
            : pos.start.container[pos.start.container.length-1].tag
        );
        switch (tag) {
            case 'H1': $('#'+t.id+'_toolbar__textAnimation > .vividDropDownBox_selected').html('Heading 1'); break;
            case 'H2': $('#'+t.id+'_toolbar__textAnimation > .vividDropDownBox_selected').html('Heading 2'); break;
            case 'H3': $('#'+t.id+'_toolbar__textAnimation > .vividDropDownBox_selected').html('Heading 3'); break;
            case 'P' : $('#'+t.id+'_toolbar__textAnimation > .vividDropDownBox_selected').html('No animations'); break;
        }
    }

    setMain_textAnimation (t, tagName) {
        $(t.el).focus()
        var
        pos = t.getCaretPosition(t.el),
        tag = pos.start.container[pos.start.container.length-1].tag,
        el = pos.start.container[pos.start.container.length-1].el;

        if (tagName) var newEl = document.createElement(tagName);

        $(el).removeClass('contentSectionTitle1').removeClass('contentSectionTitle2').removeClass('contentSectionTitle3');

        switch (tagName) {
            case 'H1' : newEl.innerHTML = '<span class="contentSectionTitle1_span">'+$(el).html()+'</span>'; break;
            case 'H2' : newEl.innerHTML = '<span class="contentSectionTitle2_span">'+$(el).html()+'</span>';  break;
            case 'H3' : newEl.innerHTML = '<span class="contentSectionTitle3_span">'+$(el).html()+'</span>';  break;
            default :
                var newEl = document.createElement('p');
                newEl.innerHTML = $(el).html(); break;
        }

        el.parentNode.replaceChild(newEl, el);
    }


    // helper functions
    getCaretPosition (editableDiv) { // many thanks to https://stackoverflow.com/questions/46434775/accounting-for-brs-in-contenteditable-caret-position?noredirect=1&lq=1 and https://www.freecodecamp.org/news/three-dots-operator-in-javascript/
        const $el = $(editableDiv);

        function pathFromNode(node, reference) {
        function traverse(node, acc) {
            if (node === reference) {
            acc.shift();
            return acc;
            } else {
            const parent = node.parentNode;
            if (!parent) return acc;
            const index = [...parent.childNodes].indexOf(node);
            return traverse(parent, [{index:index,tag:parent.tagName,el:parent}, ...acc]);
            }
        }
        return traverse(node, []);
        }

        function nodeFromPath(path, reference) {
        if (path.length === 0) {
            return reference;
        } else {
            const [index, ...rest] = path;
            const next = reference.childNodes[index];
            return nodeFromPath(rest, next);
        }
        }

        function getCaret(el) {
        const range = document.getSelection().getRangeAt(0);
        return {
            start: {
            container: pathFromNode(range.startContainer, el),
            offset: range.startOffset
            },
            end: {
            container: pathFromNode(range.endContainer, el),
            offset: range.endOffset
            }
        };
        }

        function setCaret(el, start, end) {
        const range = document.createRange();
        range.setStart(nodeFromPath(start.container, el), start.offset);
        range.setEnd(nodeFromPath(end.container, el), end.offset);
        sel = document.getSelection();
        sel.removeAllRanges();
        sel.addRange(range);
        }

        return getCaret($el[0]);
    };
};
