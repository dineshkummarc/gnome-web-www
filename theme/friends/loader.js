/**
 * When a box is clicked, the hover functionality should be disabled
 * so we create a lock, which, once set to true, overrides hover
 * functionality until the lock is once again set to false
 */
var locked = false;
/**
 * Additionally, when a box is clicked, we need to know if that box
 * had already been clicked (so that we could reset the look on everything)
 */
var toggled = false;

$(document).ready(function(){
    /* Hover functionality */
    $('#boxes > div').hover(function() {
        /* mouse in */

        // if user has clicked on a box, we don't want hover to frakk things up
        if (locked) {return false;}

        // make all boxes but this grey
        $('#boxes > div').not(this).addClass('greyed');

        // save background image url for later restoration
        $(this).data($(this).attr("id"), $(this).css("background-image"));

        // remove background
        $(this).css("background-image", "url(none)");

        // show the hover text
        $(this).children('.active-text').css("visibility", "visible");
        }, function() {
        /* mouse out */

        // if user has clicked on a box, we don't want hover to frakk things up
        if (locked) {return false;}

        // remove grey from all boxes
        $('#boxes > div').removeClass('greyed');

        // hide the hover text
        $(this).children('.active-text').css("visibility", "hidden");

        // restore the background image
        $(this).css("background-image", $(this).data($(this).attr("id")));
    });

    /* Click functionality */
    $('#boxes > div').click(function() {
        if (toggled) {
            /**
             * One of the boxes has already received a click, which means that
             * somewhere there is one green box, and three grey ones.
             * 
             * It also means that there is one form showing, as well as a
             * non-default text
             */
            if ($(this).hasClass('greyed')) {
                /**
                 * This box was not the previoulsy clicked box, thus we should
                 * make all the other boxes grey, and otherwise restore them to
                 * default configuration
                 *
                 * Any of the other paragraphs and forms should be hidden
                 *
                 * This element should be green, but remove background and
                 * instead get text
                 *
                 * This paragraph/form should be visible
                 */
                // for all boxes except this
                $('#boxes > div').not($(this)).each(function(i) {
                    // add greyed
                    $(this).addClass('greyed');

                    // restore background
                    $(this).css('background-image',
                                $(this).data($(this).attr('id')));

                    // hide text
                    $(this).children('.active-text')
                        .css('visibility', 'hidden');
                });

                // remove grey from this
                $(this).removeClass('greyed');

                // save this bakground-image for later restoration
                $(this).data($(this).attr('id'),
                             $(this).css('background-image'));

                // remove background from this
                $(this).css('background-image', 'url(none)');

                // show this text
                $(this).children('.active-text')
                    .css('visibility', 'visible');
                
                // hide default below paragraph
                $('p#donation-level').hide();

                $('div#below > form').hide();

                // show this form
                $('#'+$(this).attr('id')+'-form').show();
            } else {
                /**
                 * This box was the previously clicked one (i.e. something has
                 * been toggled, and this one is still green, this must be the
                 * one. The only logical effect is for the "active/toggled" box
                 * to "untoggle" thus restoring all boxes back to default
                 * configuration
                 */
                // for ALL boxes
                $('#boxes > div').each(function(i) {
                    // remove greyed
                    $(this).removeClass('greyed');
                });

                // hide text
                $(this).children('.active-text')
                    .css('visibility', 'hidden');

                // restore background
                $(this).css('background-image',
                            $(this).data($(this).attr('id')));

                // hide all forms
                $('div#below > form').hide();

                // restore default below paragraph
                $('p#donation-details').show();
                
                toggled = false;
                locked = false;
            }
        } else {
            /**
             * We are toggling stuff for the first time, 
             * all boxes except this one should be greyed, 
             * default paragraph should be hidden, 
             * this paragraph/form should be displayed
             */
            toggled = true;
            locked = true;

            // for all boxes except this
            $('#boxes > div').not($(this)).each(function(i) {
                // add greyed
                $(this).addClass('greyed');
            });

            if ($(this).css('background-image') != 'none') {
                $(this).data($(this).attr('id'),
                             $(this).css('background-image'));
                $(this).css('background-image', 'url(none)');
            }

            // show this text
            $(this).children('.active-text')
                .css('visibility', 'visible');

            // hide default below paragraph
            $('p#donation-details').hide();

            // show this form
            $('#'+$(this).attr('id')+'-form').show();
        }
    });
});
